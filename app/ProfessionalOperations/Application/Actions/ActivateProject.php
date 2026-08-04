<?php

namespace App\ProfessionalOperations\Application\Actions;

use App\ProfessionalOperations\Domain\Enums\ProjectStatus;
use App\ProfessionalOperations\Domain\Models\Project;

class ActivateProject
{
    public function handle(Project $project): Project
    {
        $project->update(['status' => ProjectStatus::Active]);

        return $project;
    }
}
