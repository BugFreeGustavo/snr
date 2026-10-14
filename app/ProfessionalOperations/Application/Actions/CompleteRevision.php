<?php

namespace App\ProfessionalOperations\Application\Actions;

use App\ProfessionalOperations\Domain\Enums\DeliverableStatus;
use App\ProfessionalOperations\Domain\Models\Deliverable;

class CompleteRevision
{
    public function handle(Deliverable $deliverable): Deliverable
    {
        $deliverable->transitionTo(DeliverableStatus::AwaitingReview);

        return $deliverable;
    }
}
