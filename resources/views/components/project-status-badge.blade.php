@props(['status'])

@php
    $styles = match ($status) {
        \App\ProfessionalOperations\Domain\Enums\ProjectStatus::Planned => 'bg-info/10 text-info',
        \App\ProfessionalOperations\Domain\Enums\ProjectStatus::Active => 'bg-success/10 text-success',
        \App\ProfessionalOperations\Domain\Enums\ProjectStatus::OnHold => 'bg-warning/10 text-warning',
        \App\ProfessionalOperations\Domain\Enums\ProjectStatus::Archived => 'bg-text-muted/10 text-text-muted',
    };
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium $styles"]) }}>
    {{ $status->label() }}
</span>
