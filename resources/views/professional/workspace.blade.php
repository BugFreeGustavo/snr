@extends('layouts.app')

@section('title', 'Workspace')

@section('content')
    <h1 class="text-2xl font-bold text-text-primary">{{ $greeting }}, {{ $professional->name }}</h1>

    <div class="mt-8 rounded-xl border border-border bg-surface p-6">
        <h2 class="text-sm font-semibold text-text-primary">Your work</h2>

        @if ($activeProjects->isEmpty())
            <p class="mt-2 text-sm text-text-muted">No active projects right now. Plan a project from any client to see it appear here.</p>
        @else
            <ul class="mt-4 divide-y divide-border">
                @foreach ($activeProjects as $project)
                    <li class="flex items-center justify-between py-3">
                        <div>
                            <a href="{{ route('clients.projects.show', [$project->client, $project]) }}" class="font-medium text-text-primary hover:text-accent">
                                {{ $project->name }}
                            </a>
                            <p class="text-sm text-text-secondary">{{ $project->client->name }}</p>
                        </div>
                        <x-project-status-badge :status="$project->status" />
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
