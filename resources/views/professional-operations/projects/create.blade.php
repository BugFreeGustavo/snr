@extends('layouts.app')

@section('title', 'Plan project')

@section('content')
    <p class="text-sm text-text-secondary">{{ $client->name }}</p>
    <h1 class="mt-1 text-2xl font-bold text-text-primary">Plan a new project</h1>

    @if ($errors->any())
        <ul class="mt-6 max-w-md rounded-lg border border-danger/30 bg-danger/10 px-4 py-3 text-sm text-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('clients.projects.store', $client) }}" class="mt-8 max-w-md space-y-6 rounded-xl border border-border bg-surface p-6">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium text-text-primary">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required
                class="mt-1 w-full rounded-md border border-border bg-background px-3 py-2 text-sm text-text-primary focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/30">
        </div>

        <button type="submit"
            class="cursor-pointer rounded-md bg-accent px-4 py-2 text-sm font-semibold text-text-primary transition hover:bg-accent-hover">
            Plan project
        </button>
    </form>
@endsection
