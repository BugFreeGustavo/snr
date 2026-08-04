@extends('layouts.app')

@section('title', 'Onboard client')

@section('content')
    <h1 class="text-2xl font-bold text-text-primary">Onboard client</h1>
    <p class="mt-2 text-sm text-text-secondary">Only the name is required — you can add context as you learn it.</p>

    @if ($errors->any())
        <ul class="mt-6 max-w-md rounded-lg border border-danger/30 bg-danger/10 px-4 py-3 text-sm text-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('clients.store') }}" class="mt-8 max-w-md space-y-6 rounded-xl border border-border bg-surface p-6">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium text-text-primary">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required
                class="mt-1 w-full rounded-md border border-border bg-background px-3 py-2 text-sm text-text-primary focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/30">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-text-primary">Email <span class="font-normal text-text-muted">(optional)</span></label>
            <input id="email" type="email" name="email" value="{{ old('email') }}"
                class="mt-1 w-full rounded-md border border-border bg-background px-3 py-2 text-sm text-text-primary focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/30">
        </div>

        <div>
            <label for="notes" class="block text-sm font-medium text-text-primary">Notes <span class="font-normal text-text-muted">(optional)</span></label>
            <textarea id="notes" name="notes" rows="4"
                class="mt-1 w-full rounded-md border border-border bg-background px-3 py-2 text-sm text-text-primary focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/30">{{ old('notes') }}</textarea>
        </div>

        <button type="submit"
            class="cursor-pointer rounded-md bg-accent px-4 py-2 text-sm font-semibold text-text-primary transition hover:bg-accent-hover">
            Onboard client
        </button>
    </form>
@endsection
