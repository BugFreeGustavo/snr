<?php

use App\Professional\Domain\Models\Professional;
use App\ProfessionalOperations\Domain\Enums\ProjectStatus;
use App\ProfessionalOperations\Domain\Models\Client;
use App\ProfessionalOperations\Domain\Models\Project;
use Illuminate\Support\Carbon;

it('redirects guests away from the workspace', function () {
    $response = $this->get('/workspace');

    $response->assertRedirect(route('login'));
});

it('shows the workspace to an authenticated professional', function () {
    $professional = Professional::factory()->create(['name' => 'Ada Lovelace']);

    $response = $this->actingAs($professional)->get('/workspace');

    $response->assertOk();
    $response->assertSee('Ada Lovelace');
});

it('greets the professional according to the time of day', function (string $time, string $greeting) {
    Carbon::setTestNow($time);
    $professional = Professional::factory()->create(['name' => 'Ada']);

    $response = $this->actingAs($professional)->get('/workspace');

    $response->assertSee("{$greeting}, Ada");
})->with([
    'morning' => ['08:00', 'Good morning'],
    'afternoon' => ['14:00', 'Good afternoon'],
    'evening' => ['20:00', 'Good evening'],
]);

it('shows a meaningful empty state when there are no active projects', function () {
    $professional = Professional::factory()->create();

    $response = $this->actingAs($professional)->get('/workspace');

    $response->assertOk();
    $response->assertSee('No active projects right now. Plan a project from any client to see it appear here.', false);
});

it('shows active projects on the workspace', function () {
    $professional = Professional::factory()->create();
    $client = Client::factory()->create();
    Project::factory()->create([
        'client_id' => $client->id,
        'name' => 'Season 3 Mix',
        'status' => ProjectStatus::Active,
    ]);
    Project::factory()->create([
        'client_id' => $client->id,
        'name' => 'Archived Job',
        'status' => ProjectStatus::Archived,
    ]);

    $response = $this->actingAs($professional)->get('/workspace');

    $response->assertOk();
    $response->assertSee('Season 3 Mix');
    $response->assertDontSee('Archived Job');
});
