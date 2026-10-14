<?php

use App\Professional\Domain\Models\Professional;
use App\ProfessionalOperations\Domain\Enums\DeliverableStatus;
use App\ProfessionalOperations\Domain\Enums\ProjectStatus;
use App\ProfessionalOperations\Domain\Models\Deliverable;
use App\ProfessionalOperations\Domain\Models\Project;

it('redirects guests away from deliverable planning', function () {
    $project = Project::factory()->create();

    $response = $this->get("/clients/{$project->client_id}/projects/{$project->id}/deliverables/create");

    $response->assertRedirect(route('login'));
});

it('shows the deliverable planning form for a project', function () {
    $professional = Professional::factory()->create();
    $project = Project::factory()->create(['name' => 'Season 3 Mix']);

    $response = $this->actingAs($professional)->get("/clients/{$project->client_id}/projects/{$project->id}/deliverables/create");

    $response->assertOk();
    $response->assertSee('Season 3 Mix');
});

it('lets the professional plan a deliverable for a project', function () {
    $professional = Professional::factory()->create();
    $project = Project::factory()->create();

    $response = $this->actingAs($professional)->post("/clients/{$project->client_id}/projects/{$project->id}/deliverables", [
        'name' => 'Episode 1 Stereo Mix',
    ]);

    $response->assertRedirect(route('clients.projects.show', [$project->client_id, $project]));
    expect($project->deliverables()->first())
        ->name->toBe('Episode 1 Stereo Mix')
        ->status->toBe(DeliverableStatus::Planned);
});

it('requires a name to plan a deliverable', function () {
    $professional = Professional::factory()->create();
    $project = Project::factory()->create();

    $response = $this->actingAs($professional)->post("/clients/{$project->client_id}/projects/{$project->id}/deliverables", [
        'name' => '',
    ]);

    $response->assertSessionHasErrors('name');
    expect($project->deliverables()->count())->toBe(0);
});

it('refuses to plan a deliverable in an archived project', function () {
    $professional = Professional::factory()->create();
    $project = Project::factory()->create(['status' => ProjectStatus::Archived]);
    $projectUrl = "/clients/{$project->client_id}/projects/{$project->id}";

    $response = $this->actingAs($professional)->from($projectUrl)->post("{$projectUrl}/deliverables", [
        'name' => 'Episode 1 Stereo Mix',
    ]);

    $response->assertRedirect($projectUrl);
    $response->assertSessionHasErrors('deliverable');
    expect($project->deliverables()->count())->toBe(0);
});

it("lists a project's deliverables on its detail page", function () {
    $professional = Professional::factory()->create();
    $project = Project::factory()->create();
    Deliverable::factory()->for($project)->create(['name' => 'Episode 1 Stereo Mix', 'status' => DeliverableStatus::AwaitingReview]);

    $response = $this->actingAs($professional)->get("/clients/{$project->client_id}/projects/{$project->id}");

    $response->assertOk();
    $response->assertSee('Episode 1 Stereo Mix');
    $response->assertSee('Awaiting Review');
    $response->assertSee('Plan deliverable');
});

it('does not offer deliverable planning on an archived project', function () {
    $professional = Professional::factory()->create();
    $project = Project::factory()->create(['status' => ProjectStatus::Archived]);

    $response = $this->actingAs($professional)->get("/clients/{$project->client_id}/projects/{$project->id}");

    $response->assertOk();
    $response->assertDontSee('Plan deliverable');
});

it('moves a deliverable through its business events', function (DeliverableStatus $from, string $event, DeliverableStatus $to) {
    $professional = Professional::factory()->create();
    $project = Project::factory()->create();
    $deliverable = Deliverable::factory()->for($project)->create(['status' => $from]);

    $response = $this->actingAs($professional)
        ->post("/clients/{$project->client_id}/projects/{$project->id}/deliverables/{$deliverable->id}/{$event}");

    $response->assertRedirect(route('clients.projects.show', [$project->client_id, $project]));
    expect($deliverable->fresh()->status)->toBe($to);
})->with([
    'Deliverable Submitted' => [DeliverableStatus::Planned, 'submit', DeliverableStatus::AwaitingReview],
    'Revision Requested' => [DeliverableStatus::AwaitingReview, 'request-revision', DeliverableStatus::InRevision],
    'Revision Completed' => [DeliverableStatus::InRevision, 'complete-revision', DeliverableStatus::AwaitingReview],
    'Deliverable Approved' => [DeliverableStatus::AwaitingReview, 'approve', DeliverableStatus::Approved],
]);

it('rejects a move the lifecycle does not allow', function () {
    $professional = Professional::factory()->create();
    $project = Project::factory()->create();
    $deliverable = Deliverable::factory()->for($project)->create(['status' => DeliverableStatus::Planned]);
    $projectUrl = "/clients/{$project->client_id}/projects/{$project->id}";

    $response = $this->actingAs($professional)->from($projectUrl)->post("{$projectUrl}/deliverables/{$deliverable->id}/approve");

    $response->assertRedirect($projectUrl);
    $response->assertSessionHasErrors('deliverable');
    expect($deliverable->fresh()->status)->toBe(DeliverableStatus::Planned);
});

it('refuses to progress a deliverable of an archived project', function () {
    $professional = Professional::factory()->create();
    $project = Project::factory()->create(['status' => ProjectStatus::Archived]);
    $deliverable = Deliverable::factory()->for($project)->create(['status' => DeliverableStatus::Planned]);
    $projectUrl = "/clients/{$project->client_id}/projects/{$project->id}";

    $response = $this->actingAs($professional)->from($projectUrl)->post("{$projectUrl}/deliverables/{$deliverable->id}/submit");

    $response->assertSessionHasErrors('deliverable');
    expect($deliverable->fresh()->status)->toBe(DeliverableStatus::Planned);
});

it("does not reach a deliverable through another project's address", function () {
    $professional = Professional::factory()->create();
    $project = Project::factory()->create();
    $otherDeliverable = Deliverable::factory()->create();

    $response = $this->actingAs($professional)
        ->post("/clients/{$project->client_id}/projects/{$project->id}/deliverables/{$otherDeliverable->id}/submit");

    $response->assertNotFound();
    expect($otherDeliverable->fresh()->status)->toBe(DeliverableStatus::Planned);
});

it('offers only the business events the current status allows', function () {
    $professional = Professional::factory()->create();
    $project = Project::factory()->create();
    Deliverable::factory()->for($project)->create(['status' => DeliverableStatus::AwaitingReview]);

    $response = $this->actingAs($professional)->get("/clients/{$project->client_id}/projects/{$project->id}");

    $response->assertSee('Request revision');
    $response->assertSee('Approve');
    $response->assertDontSee('Complete revision');
    $response->assertDontSee('>Submit<', false);
});
