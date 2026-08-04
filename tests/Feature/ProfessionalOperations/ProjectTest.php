<?php

use App\Professional\Domain\Models\Professional;
use App\ProfessionalOperations\Domain\Enums\ProjectStatus;
use App\ProfessionalOperations\Domain\Models\Client;
use App\ProfessionalOperations\Domain\Models\Project;

it('redirects guests away from project creation', function () {
    $client = Client::factory()->create();

    $response = $this->get("/clients/{$client->id}/projects/create");

    $response->assertRedirect(route('login'));
});

it('shows the project planning form for a client', function () {
    $professional = Professional::factory()->create();
    $client = Client::factory()->create(['name' => 'Acme Studios']);

    $response = $this->actingAs($professional)->get("/clients/{$client->id}/projects/create");

    $response->assertOk();
    $response->assertSee('Acme Studios');
});

it('lets the professional plan a project for a client', function () {
    $professional = Professional::factory()->create();
    $client = Client::factory()->create();

    $response = $this->actingAs($professional)->post("/clients/{$client->id}/projects", [
        'name' => 'Season 3 Mix',
    ]);

    $response->assertRedirect();
    $project = $client->fresh()->projects()->first();
    expect($project)
        ->name->toBe('Season 3 Mix')
        ->status->toBe(ProjectStatus::Planned);
});

it('requires a name to plan a project', function () {
    $professional = Professional::factory()->create();
    $client = Client::factory()->create();

    $response = $this->actingAs($professional)->post("/clients/{$client->id}/projects", [
        'name' => '',
    ]);

    $response->assertSessionHasErrors('name');
    expect($client->fresh()->projects()->count())->toBe(0);
});

it("shows a project's detail page", function () {
    $professional = Professional::factory()->create();
    $client = Client::factory()->create();
    $project = Project::factory()->create(['client_id' => $client->id, 'name' => 'Season 3 Mix']);

    $response = $this->actingAs($professional)->get("/clients/{$client->id}/projects/{$project->id}");

    $response->assertOk();
    $response->assertSee('Season 3 Mix');
    $response->assertSee('Planned');
});

it('lets the professional activate a planned project', function () {
    $professional = Professional::factory()->create();
    $client = Client::factory()->create();
    $project = Project::factory()->create(['client_id' => $client->id, 'status' => ProjectStatus::Planned]);

    $response = $this->actingAs($professional)->post("/clients/{$client->id}/projects/{$project->id}/activate");

    $response->assertRedirect();
    expect($project->fresh()->status)->toBe(ProjectStatus::Active);
});

it('lets the professional put an active project on hold', function () {
    $professional = Professional::factory()->create();
    $client = Client::factory()->create();
    $project = Project::factory()->create(['client_id' => $client->id, 'status' => ProjectStatus::Active]);

    $response = $this->actingAs($professional)->post("/clients/{$client->id}/projects/{$project->id}/hold");

    $response->assertRedirect();
    expect($project->fresh()->status)->toBe(ProjectStatus::OnHold);
});

it('lets the professional archive a project', function () {
    $professional = Professional::factory()->create();
    $client = Client::factory()->create();
    $project = Project::factory()->create(['client_id' => $client->id, 'status' => ProjectStatus::Active]);

    $response = $this->actingAs($professional)->post("/clients/{$client->id}/projects/{$project->id}/archive");

    $response->assertRedirect();
    expect($project->fresh()->status)->toBe(ProjectStatus::Archived);
});
