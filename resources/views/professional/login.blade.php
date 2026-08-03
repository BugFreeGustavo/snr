<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SNR — Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="relative flex h-full min-h-screen items-center justify-center overflow-hidden bg-deep font-sans text-foreground antialiased">
    <div class="pointer-events-none absolute left-1/2 top-1/3 h-[500px] w-[700px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-accent/10 blur-[120px]"></div>

    <div class="relative w-full max-w-sm">
        <p class="mb-8 text-center font-display text-2xl tracking-tight text-foreground">SNR</p>

        <div class="rounded-2xl border border-white/8 bg-elevated p-8">
            @if ($errors->any())
                <ul class="mb-6 rounded-xl border border-destructive/30 bg-destructive/10 px-4 py-3 text-sm text-destructive">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-foreground">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="mt-1 w-full rounded-xl border border-white/8 bg-base px-3 py-2 text-sm text-foreground focus:border-accent focus:outline-none focus:ring-2 focus:ring-ring/40">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-foreground">Password</label>
                    <input id="password" type="password" name="password" required
                        class="mt-1 w-full rounded-xl border border-white/8 bg-base px-3 py-2 text-sm text-foreground focus:border-accent focus:outline-none focus:ring-2 focus:ring-ring/40">
                </div>

                <label class="flex items-center gap-2 text-sm text-foreground-muted">
                    <input type="checkbox" name="remember" class="rounded border-white/20 bg-base text-accent focus:ring-ring/40">
                    Remember me
                </label>

                <button type="submit"
                    class="w-full cursor-pointer rounded-xl bg-accent px-4 py-2 text-sm font-semibold text-on-accent shadow-[0_0_24px_-6px_rgba(245,165,36,0.45)] transition hover:opacity-90">
                    Log in
                </button>
            </form>
        </div>
    </div>
</body>
</html>
