<?php

namespace App\ProfessionalOperations\Presentation\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ProfessionalOperations\Application\Actions\PlanDeliverable;
use App\ProfessionalOperations\Domain\Models\Client;
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
}
