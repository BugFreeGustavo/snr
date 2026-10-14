<?php

namespace App\ProfessionalOperations\Application\Actions;

use App\ProfessionalOperations\Domain\Enums\DeliverableStatus;
use App\ProfessionalOperations\Domain\Models\Deliverable;

class ApproveDeliverable
{
    public function handle(Deliverable $deliverable): Deliverable
    {
        $deliverable->transitionTo(DeliverableStatus::Approved);

        return $deliverable;
    }
}
