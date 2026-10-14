@props(['status'])

@php
    $styles = match ($status) {
        \App\ProfessionalOperations\Domain\Enums\DeliverableStatus::Planned => 'bg-info/10 text-info',
        \App\ProfessionalOperations\Domain\Enums\DeliverableStatus::AwaitingReview => 'bg-warning/10 text-warning',
        \App\ProfessionalOperations\Domain\Enums\DeliverableStatus::InRevision => 'bg-accent/10 text-accent',
        \App\ProfessionalOperations\Domain\Enums\DeliverableStatus::Approved => 'bg-success/10 text-success',
    };
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium $styles"]) }}>
    {{ $status->label() }}
</span>
