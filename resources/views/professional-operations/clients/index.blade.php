@extends('layouts.app')

@section('title', 'Clients')

@section('content')
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold text-text-primary">Clients</h1>
        <a href="{{ route('clients.create') }}"
            class="cursor-pointer rounded-md bg-accent px-4 py-2 text-sm font-semibold text-text-primary transition hover:bg-accent-hover">
            Onboard client
        </a>
    </div>

    @if ($clients->isEmpty())
        <div class="mt-8 rounded-xl border border-border bg-surface p-8 text-center">
            <p class="font-medium text-text-primary">You haven't onboarded any clients yet.</p>
            <p class="mx-auto mt-2 max-w-md text-sm text-text-secondary">
                Client relationships are where SNR starts building your operational history — pricing, preferences, and everything worth remembering for next time.
            </p>
        </div>
    @else
        <ul class="mt-8 divide-y divide-border rounded-xl border border-border bg-surface">
            @foreach ($clients as $client)
                <li class="px-6 py-4">
                    <a href="{{ route('clients.show', $client) }}" class="font-medium text-text-primary hover:text-accent">{{ $client->name }}</a>
                    @if ($client->email)
                        <p class="text-sm text-text-secondary">{{ $client->email }}</p>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
@endsection
