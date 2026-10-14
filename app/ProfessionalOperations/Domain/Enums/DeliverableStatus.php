<?php

namespace App\ProfessionalOperations\Domain\Enums;

enum DeliverableStatus: string
{
    case Planned = 'planned';
    case AwaitingReview = 'awaiting_review';
    case InRevision = 'in_revision';
    case Approved = 'approved';

    public function label(): string
    {
        return match ($this) {
            self::Planned => 'Planned',
            self::AwaitingReview => 'Awaiting Review',
            self::InRevision => 'In Revision',
            self::Approved => 'Approved',
        };
    }

    /**
     * Only the moves produced by documented Deliverable Business Events are legal (Discovery 005).
     */
    public function canBecome(self $next): bool
    {
        return match ($this) {
            self::Planned => $next === self::AwaitingReview,
            self::AwaitingReview => in_array($next, [self::InRevision, self::Approved], true),
            self::InRevision => $next === self::AwaitingReview,
            self::Approved => false,
        };
    }
}
