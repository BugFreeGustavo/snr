<?php

namespace App\ProfessionalOperations\Presentation\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ProfessionalOperations\Application\Actions\ApproveDeliverable;
use App\ProfessionalOperations\Application\Actions\CompleteRevision;
use App\ProfessionalOperations\Application\Actions\PlanDeliverable;
use App\ProfessionalOperations\Application\Actions\RequestRevision;
use App\ProfessionalOperations\Application\Actions\SubmitDeliverable;
use App\ProfessionalOperations\Domain\Models\Client;
use App\ProfessionalOperations\Domain\Models\Deliverable;
use App\ProfessionalOperations\Domain\Models\Project;
use App\ProfessionalOperations\Presentation\Http\Requests\PlanDeliverableRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DeliverableController extends Controller
{
    public function create(Client $client, Project $project): View
    {
        return view('professional-operations.deliverables.create', [
            'client' => $client,
            'project' => $project,
        ]);
    }

    public function store(PlanDeliverableRequest $request, Client $client, Project $project, PlanDeliverable $planDeliverable): RedirectResponse
    {
        $planDeliverable->handle($project, $request->validated());

        return redirect()->route('clients.projects.show', [$client, $project]);
    }

    public function submit(Client $client, Project $project, Deliverable $deliverable, SubmitDeliverable $submitDeliverable): RedirectResponse
    {
        $submitDeliverable->handle($deliverable);

        return redirect()->route('clients.projects.show', [$client, $project]);
    }

    public function requestRevision(Client $client, Project $project, Deliverable $deliverable, RequestRevision $requestRevision): RedirectResponse
    {
        $requestRevision->handle($deliverable);

        return redirect()->route('clients.projects.show', [$client, $project]);
    }

    public function completeRevision(Client $client, Project $project, Deliverable $deliverable, CompleteRevision $completeRevision): RedirectResponse
    {
        $completeRevision->handle($deliverable);

        return redirect()->route('clients.projects.show', [$client, $project]);
    }

    public function approve(Client $client, Project $project, Deliverable $deliverable, ApproveDeliverable $approveDeliverable): RedirectResponse
    {
        $approveDeliverable->handle($deliverable);

        return redirect()->route('clients.projects.show', [$client, $project]);
    }
}
