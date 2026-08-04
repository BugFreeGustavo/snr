<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SNR — Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex h-full min-h-screen items-center justify-center bg-background font-sans text-text-primary antialiased">
    <div class="w-full max-w-sm">
        <p class="mb-8 text-center text-lg font-bold tracking-tight text-text-primary">SNR</p>

        <div class="rounded-xl border border-border bg-surface p-8">
            @if ($errors->any())
                <ul class="mb-6 rounded-lg border border-danger/30 bg-danger/10 px-4 py-3 text-sm text-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-text-primary">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="mt-1 w-full rounded-md border border-border bg-background px-3 py-2 text-sm text-text-primary focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/30">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-text-primary">Password</label>
                    <input id="password" type="password" name="password" required
                        class="mt-1 w-full rounded-md border border-border bg-background px-3 py-2 text-sm text-text-primary focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/30">
                </div>

                <label class="flex items-center gap-2 text-sm text-text-secondary">
                    <input type="checkbox" name="remember" class="rounded border-border text-accent focus:ring-accent/30">
                    Remember me
                </label>

                <button type="submit"
                    class="w-full cursor-pointer rounded-md bg-accent px-4 py-2 text-sm font-semibold text-text-primary transition hover:bg-accent-hover">
                    Log in
                </button>
            </form>
        </div>
    </div>
</body>
</html>
