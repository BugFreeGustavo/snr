<?php

use App\Professional\Domain\Models\Professional;
use App\ProfessionalOperations\Domain\Models\Client;
use App\ProfessionalOperations\Domain\Models\Project;

it('redirects guests away from the clients list', function () {
    $response = $this->get('/clients');

    $response->assertRedirect(route('login'));
});

it('shows a meaningful empty state when there are no clients yet', function () {
    $professional = Professional::factory()->create();

    $response = $this->actingAs($professional)->get('/clients');

    $response->assertOk();
    $response->assertSee("You haven't onboarded any clients yet.", false);
    $response->assertSee('Onboard client');
});

it('lists onboarded clients', function () {
    $professional = Professional::factory()->create();
    $client = Client::factory()->create(['name' => 'Acme Studios']);

    $response = $this->actingAs($professional)->get('/clients');

    $response->assertOk();
    $response->assertSee('Acme Studios');
});

it('lets the professional onboard a new client', function () {
    $professional = Professional::factory()->create();

    $response = $this->actingAs($professional)->post('/clients', [
        'name' => 'Acme Studios',
        'email' => 'hello@acmestudios.test',
        'notes' => 'Met at a film festival.',
    ]);

    $response->assertRedirect(route('clients.index'));
    expect(Client::where('name', 'Acme Studios')->exists())->toBeTrue();
});

it('requires a name to onboard a client', function () {
    $professional = Professional::factory()->create();

    $response = $this->actingAs($professional)->post('/clients', [
        'name' => '',
    ]);

    $response->assertSessionHasErrors('name');
    expect(Client::count())->toBe(0);
});

it('shows the client onboarding form', function () {
    $professional = Professional::factory()->create();

    $response = $this->actingAs($professional)->get('/clients/create');

    $response->assertOk();
    $response->assertSee('Onboard client');
});

it('shows a client\'s detail page', function () {
    $professional = Professional::factory()->create();
    $client = Client::factory()->create([
        'name' => 'Acme Studios',
        'notes' => 'Met at a film festival.',
    ]);

    $response = $this->actingAs($professional)->get("/clients/{$client->id}");

    $response->assertOk();
    $response->assertSee('Acme Studios');
    $response->assertSee('Met at a film festival.');
});

it("lists the client's projects on their detail page", function () {
    $professional = Professional::factory()->create();
    $client = Client::factory()->create();
    $project = Project::factory()->create([
        'client_id' => $client->id,
        'name' => 'Season 3 Mix',
    ]);

    $response = $this->actingAs($professional)->get("/clients/{$client->id}");

    $response->assertOk();
    $response->assertSee('Season 3 Mix');
    $response->assertSee('Planned');
});
