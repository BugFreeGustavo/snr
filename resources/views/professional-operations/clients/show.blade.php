@extends('layouts.app')

@section('title', $client->name)

@section('content')
    <h1 class="text-2xl font-bold text-text-primary">{{ $client->name }}</h1>
    @if ($client->email)
        <p class="mt-1 text-sm text-text-secondary">{{ $client->email }}</p>
    @endif

    <div class="mt-8 rounded-xl border border-border bg-surface p-6">
        <h2 class="text-sm font-semibold text-text-primary">Notes</h2>
        @if ($client->notes)
            <p class="mt-2 text-sm text-text-secondary">{{ $client->notes }}</p>
        @else
            <p class="mt-2 text-sm text-text-muted">Nothing recorded yet.</p>
        @endif
    </div>

    <div class="mt-6 rounded-xl border border-border bg-surface p-6">
        <div class="flex items-center justify-between">
            <h2 class="text-sm font-semibold text-text-primary">Projects</h2>
            <a href="{{ route('clients.projects.create', $client) }}" class="text-sm font-medium text-accent hover:text-accent-hover">
                Plan project
            </a>
        </div>

        @if ($client->projects->isEmpty())
            <p class="mt-2 text-sm text-text-muted">No projects planned yet.</p>
        @else
            <ul class="mt-4 divide-y divide-border">
                @foreach ($client->projects as $project)
                    <li class="flex items-center justify-between py-3">
                        <a href="{{ route('clients.projects.show', [$client, $project]) }}" class="font-medium text-text-primary hover:text-accent">
                            {{ $project->name }}
                        </a>
                        <x-project-status-badge :status="$project->status" />
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
