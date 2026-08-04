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

    @unless ($project->status === \App\ProfessionalOperations\Domain\Enums\ProjectStatus::Archived)
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
@endsection
