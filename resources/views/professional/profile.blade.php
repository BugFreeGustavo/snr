@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <h1 class="font-display text-3xl text-foreground">Profile</h1>

    @if ($errors->any())
        <ul class="mt-6 max-w-md rounded-xl border border-destructive/30 bg-destructive/10 px-4 py-3 text-sm text-destructive">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('profile.update') }}" class="mt-8 max-w-md space-y-6 rounded-2xl border border-white/8 bg-elevated p-6">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-sm font-medium text-foreground">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name', $professional->name) }}" required
                class="mt-1 w-full rounded-xl border border-white/8 bg-base px-3 py-2 text-sm text-foreground placeholder:text-foreground-muted focus:border-accent focus:outline-none focus:ring-2 focus:ring-ring/40">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-foreground">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email', $professional->email) }}" required
                class="mt-1 w-full rounded-xl border border-white/8 bg-base px-3 py-2 text-sm text-foreground placeholder:text-foreground-muted focus:border-accent focus:outline-none focus:ring-2 focus:ring-ring/40">
        </div>

        <fieldset class="rounded-xl border border-white/8 p-4">
            <legend class="px-1 text-sm font-medium text-foreground">Change password (optional)</legend>

            <div class="space-y-4">
                <div>
                    <label for="current_password" class="block text-sm text-foreground-muted">Current password</label>
                    <input id="current_password" type="password" name="current_password"
                        class="mt-1 w-full rounded-xl border border-white/8 bg-base px-3 py-2 text-sm text-foreground focus:border-accent focus:outline-none focus:ring-2 focus:ring-ring/40">
                </div>

                <div>
                    <label for="password" class="block text-sm text-foreground-muted">New password</label>
                    <input id="password" type="password" name="password"
                        class="mt-1 w-full rounded-xl border border-white/8 bg-base px-3 py-2 text-sm text-foreground focus:border-accent focus:outline-none focus:ring-2 focus:ring-ring/40">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm text-foreground-muted">Confirm new password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                        class="mt-1 w-full rounded-xl border border-white/8 bg-base px-3 py-2 text-sm text-foreground focus:border-accent focus:outline-none focus:ring-2 focus:ring-ring/40">
                </div>
            </div>
        </fieldset>

        <button type="submit"
            class="cursor-pointer rounded-xl bg-accent px-4 py-2 text-sm font-semibold text-on-accent shadow-[0_0_24px_-6px_rgba(245,165,36,0.45)] transition hover:opacity-90">
            Save
        </button>
    </form>
@endsection
