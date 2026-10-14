<?php

namespace App\ProfessionalOperations\Domain\Exceptions;

use App\ProfessionalOperations\Domain\Enums\DeliverableStatus;
use DomainException;

class InvalidDeliverableTransition extends DomainException
{
    public static function between(DeliverableStatus $from, DeliverableStatus $to): self
    {
        return new self("A Deliverable that is {$from->label()} cannot become {$to->label()}.");
    }

    public static function projectArchived(): self
    {
        return new self('Deliverables of an Archived Project can no longer be planned or progressed.');
    }
}
