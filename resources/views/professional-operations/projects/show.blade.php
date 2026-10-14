@extends('layouts.app')

@section('title', $project->name)

@section('content')
    <p class="text-sm text-text-secondary">
        <a href="{{ route('clients.show', $client) }}" class="hover:text-accent">{{ $client->name }}</a>
    </p>

    <div class="mt-1 flex items-center gap-3">
        <h1 class="text-2xl font-bold text-text-primary">{{ $project->name }}</h1>
        <x-project-status-badge :status="$project->status" />
    </div>

    @unless ($project->isArchived())
        <div class="mt-6 flex gap-3">
            @if ($project->status->value !== 'active')
                <form method="POST" action="{{ route('clients.projects.activate', [$client, $project]) }}">
                    @csrf
                    <button type="submit" class="cursor-pointer rounded-md border border-border bg-surface px-4 py-2 text-sm font-medium text-text-primary transition hover:border-accent hover:text-accent">
                        Activate
                    </button>
                </form>
            @endif

            @if ($project->status->value === 'active')
                <form method="POST" action="{{ route('clients.projects.hold', [$client, $project]) }}">
                    @csrf
                    <button type="submit" class="cursor-pointer rounded-md border border-border bg-surface px-4 py-2 text-sm font-medium text-text-primary transition hover:border-accent hover:text-accent">
                        Put on hold
                    </button>
                </form>
            @endif

            <form method="POST" action="{{ route('clients.projects.archive', [$client, $project]) }}">
                @csrf
                <button type="submit" class="cursor-pointer rounded-md border border-border bg-surface px-4 py-2 text-sm font-medium text-text-secondary transition hover:border-danger hover:text-danger">
                    Archive
                </button>
            </form>
        </div>
    @endunless

    <section class="mt-10">
        <div class="flex items-center justify-between">
            <h2 class="text-lg font-semibold text-text-primary">Deliverables</h2>

            @unless ($project->isArchived())
                <a href="{{ route('clients.projects.deliverables.create', [$client, $project]) }}"
                    class="rounded-md bg-accent px-4 py-2 text-sm font-semibold text-text-primary transition hover:bg-accent-hover">
                    Plan deliverable
                </a>
            @endunless
        </div>

        @error('deliverable')
            <p class="mt-4 rounded-lg border border-danger/30 bg-danger/10 px-4 py-3 text-sm text-danger">{{ $message }}</p>
        @enderror

        @if ($project->deliverables->isEmpty())
            <p class="mt-4 text-sm text-text-secondary">No deliverables planned yet.</p>
        @else
            <ul class="mt-4 divide-y divide-border rounded-xl border border-border bg-surface">
                @foreach ($project->deliverables as $deliverable)
                    <li class="flex items-center justify-between gap-4 px-4 py-3">
                        <div class="flex items-center gap-3">
                            <span class="text-sm font-medium text-text-primary">{{ $deliverable->name }}</span>
                            <x-deliverable-status-badge :status="$deliverable->status" />
                        </div>

                        @unless ($project->isArchived())
                            <div class="flex gap-2">
                                @php
                                    $events = match ($deliverable->status) {
                                        \App\ProfessionalOperations\Domain\Enums\DeliverableStatus::Planned => ['submit' => 'Submit'],
                                        \App\ProfessionalOperations\Domain\Enums\DeliverableStatus::AwaitingReview => ['request-revision' => 'Request revision', 'approve' => 'Approve'],
                                        \App\ProfessionalOperations\Domain\Enums\DeliverableStatus::InRevision => ['complete-revision' => 'Complete revision'],
                                        \App\ProfessionalOperations\Domain\Enums\DeliverableStatus::Approved => [],
                                    };
                                @endphp

                                @foreach ($events as $event => $label)
                                    <form method="POST" action="{{ route("clients.projects.deliverables.{$event}", [$client, $project, $deliverable]) }}">
                                        @csrf
                                        <button type="submit" class="cursor-pointer rounded-md border border-border bg-surface px-3 py-1.5 text-xs font-medium text-text-primary transition hover:border-accent hover:text-accent">{{ $label }}</button>
                                    </form>
                                @endforeach
                            </div>
                        @endunless
                    </li>
                @endforeach
            </ul>
        @endif
    </section>
@endsection
