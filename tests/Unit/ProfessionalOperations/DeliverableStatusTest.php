<?php

use App\ProfessionalOperations\Domain\Enums\DeliverableStatus;

it('allows only the moves produced by documented Deliverable events', function (DeliverableStatus $from, DeliverableStatus $to, bool $allowed) {
    expect($from->canBecome($to))->toBe($allowed);
})->with(function () {
    $documentedMoves = [
        ['planned', 'awaiting_review'],
        ['awaiting_review', 'in_revision'],
        ['awaiting_review', 'approved'],
        ['in_revision', 'awaiting_review'],
    ];

    foreach (DeliverableStatus::cases() as $from) {
        foreach (DeliverableStatus::cases() as $to) {
            yield "{$from->value} to {$to->value}" => [$from, $to, in_array([$from->value, $to->value], $documentedMoves, true)];
        }
    }
});

it('labels every status in the domain language', function () {
    expect(array_map(fn (DeliverableStatus $status) => $status->label(), DeliverableStatus::cases()))
        ->toBe(['Planned', 'Awaiting Review', 'In Revision', 'Approved']);
});
