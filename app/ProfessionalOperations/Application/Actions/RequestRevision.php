<?php

namespace App\ProfessionalOperations\Application\Actions;

use App\ProfessionalOperations\Domain\Enums\DeliverableStatus;
use App\ProfessionalOperations\Domain\Models\Deliverable;

class RequestRevision
{
    public function handle(Deliverable $deliverable): Deliverable
    {
        $deliverable->transitionTo(DeliverableStatus::InRevision);

        return $deliverable;
    }
}
