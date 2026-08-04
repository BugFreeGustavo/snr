<?php

namespace App\ProfessionalOperations\Presentation\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ProfessionalOperations\Application\Actions\OnboardClient;
use App\ProfessionalOperations\Domain\Models\Client;
use App\ProfessionalOperations\Presentation\Http\Requests\OnboardClientRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index(): View
    {
        return view('professional-operations.clients.index', [
            'clients' => Client::query()->orderBy('name')->get(),
        ]);
    }

    public function create(): View
    {
        return view('professional-operations.clients.create');
    }

    public function store(OnboardClientRequest $request, OnboardClient $onboardClient): RedirectResponse
    {
        $onboardClient->handle($request->validated());

        return redirect()->route('clients.index');
    }

    public function show(Client $client): View
    {
        return view('professional-operations.clients.show', ['client' => $client]);
    }
}
