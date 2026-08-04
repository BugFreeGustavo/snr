<?php

namespace App\ProfessionalOperations\Presentation\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ProfessionalOperations\Application\Actions\ActivateProject;
use App\ProfessionalOperations\Application\Actions\ArchiveProject;
use App\ProfessionalOperations\Application\Actions\PlanProject;
use App\ProfessionalOperations\Application\Actions\PutProjectOnHold;
use App\ProfessionalOperations\Domain\Models\Client;
use App\ProfessionalOperations\Domain\Models\Project;
use App\ProfessionalOperations\Presentation\Http\Requests\PlanProjectRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function create(Client $client): View
    {
        return view('professional-operations.projects.create', ['client' => $client]);
    }

    public function store(PlanProjectRequest $request, Client $client, PlanProject $planProject): RedirectResponse
    {
        $planProject->handle($client, $request->validated());

        return redirect()->route('clients.show', $client);
    }

    public function show(Client $client, Project $project): View
    {
        return view('professional-operations.projects.show', [
            'client' => $client,
            'project' => $project,
        ]);
    }

    public function activate(Client $client, Project $project, ActivateProject $activateProject): RedirectResponse
    {
        $activateProject->handle($project);

        return redirect()->route('clients.projects.show', [$client, $project]);
    }

    public function hold(Client $client, Project $project, PutProjectOnHold $putProjectOnHold): RedirectResponse
    {
        $putProjectOnHold->handle($project);

        return redirect()->route('clients.projects.show', [$client, $project]);
    }

    public function archive(Client $client, Project $project, ArchiveProject $archiveProject): RedirectResponse
    {
        $archiveProject->handle($project);

        return redirect()->route('clients.projects.show', [$client, $project]);
    }
}
