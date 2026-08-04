<?php

namespace App\Professional\Presentation\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ProfessionalOperations\Domain\Enums\ProjectStatus;
use App\ProfessionalOperations\Domain\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class WorkspaceController extends Controller
{
    public function show(): View
    {
        return view('professional.workspace', [
            'professional' => Auth::user(),
            'greeting' => $this->greeting(),
            'activeProjects' => Project::query()
                ->where('status', ProjectStatus::Active)
                ->with('client')
                ->latest()
                ->get(),
        ]);
    }

    private function greeting(): string
    {
        $hour = (int) now()->format('G');

        return match (true) {
            $hour < 5 => 'Good evening',
            $hour < 12 => 'Good morning',
            $hour < 18 => 'Good afternoon',
            default => 'Good evening',
        };
    }
}
