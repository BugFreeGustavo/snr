<?php

namespace App\ProfessionalOperations\Application\Actions;

use App\ProfessionalOperations\Domain\Enums\DeliverableStatus;
use App\ProfessionalOperations\Domain\Exceptions\InvalidDeliverableTransition;
use App\ProfessionalOperations\Domain\Models\Deliverable;
use App\ProfessionalOperations\Domain\Models\Project;

class PlanDeliverable
{
    /**
     * @param  array{name: string}  $data
     *
     * @throws InvalidDeliverableTransition
     */
    public function handle(Project $project, array $data): Deliverable
    {
        if ($project->isArchived()) {
            throw InvalidDeliverableTransition::projectArchived();
        }

        return $project->deliverables()->create([
            'name' => $data['name'],
            'status' => DeliverableStatus::Planned,
        ]);
    }
}
