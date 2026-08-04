@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <h1 class="text-2xl font-bold text-text-primary">Profile</h1>

    @if ($errors->any())
        <ul class="mt-6 max-w-md rounded-lg border border-danger/30 bg-danger/10 px-4 py-3 text-sm text-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('profile.update') }}" class="mt-8 max-w-md space-y-6 rounded-xl border border-border bg-surface p-6">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-sm font-medium text-text-primary">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name', $professional->name) }}" required
                class="mt-1 w-full rounded-md border border-border bg-background px-3 py-2 text-sm text-text-primary placeholder:text-text-muted focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/30">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-text-primary">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email', $professional->email) }}" required
                class="mt-1 w-full rounded-md border border-border bg-background px-3 py-2 text-sm text-text-primary placeholder:text-text-muted focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/30">
        </div>

        <fieldset class="rounded-md border border-border p-4">
            <legend class="px-1 text-sm font-medium text-text-primary">Change password (optional)</legend>

            <div class="space-y-4">
                <div>
                    <label for="current_password" class="block text-sm text-text-secondary">Current password</label>
                    <input id="current_password" type="password" name="current_password"
                        class="mt-1 w-full rounded-md border border-border bg-background px-3 py-2 text-sm text-text-primary focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/30">
                </div>

                <div>
                    <label for="password" class="block text-sm text-text-secondary">New password</label>
                    <input id="password" type="password" name="password"
                        class="mt-1 w-full rounded-md border border-border bg-background px-3 py-2 text-sm text-text-primary focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/30">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm text-text-secondary">Confirm new password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                        class="mt-1 w-full rounded-md border border-border bg-background px-3 py-2 text-sm text-text-primary focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/30">
                </div>
            </div>
        </fieldset>

        <div>
            <button type="submit"
                class="cursor-pointer rounded-md bg-accent px-4 py-2 text-sm font-semibold text-text-primary transition hover:bg-accent-hover">
                Save
            </button>
        </div>
    </form>
@endsection
