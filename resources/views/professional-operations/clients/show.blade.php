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
        <h2 class="text-sm font-semibold text-text-primary">Projects</h2>
        <p class="mt-2 text-sm text-text-muted">Project history for this client will appear here in a future increment.</p>
    </div>
@endsection
