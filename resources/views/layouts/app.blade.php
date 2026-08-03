<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SNR — @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-deep font-sans text-foreground antialiased">
    <div class="flex min-h-screen">
        <aside class="relative flex w-64 shrink-0 flex-col overflow-hidden border-r border-white/8 bg-base px-4 py-6">
            <div class="pointer-events-none absolute -top-24 left-1/2 h-64 w-64 -translate-x-1/2 rounded-full bg-accent/10 blur-[100px]"></div>

            <div class="relative mb-8 px-2">
                <span class="font-display text-xl tracking-tight text-foreground">SNR</span>
            </div>

            <nav class="relative flex-1 space-y-1">
                <a href="{{ route('workspace') }}" title="Workspace"
                    class="flex items-center gap-3 rounded-r-lg border-l-2 px-3 py-2 text-sm font-medium transition {{ request()->routeIs('workspace') ? 'border-accent bg-accent/10 text-accent' : 'border-transparent text-foreground-muted hover:bg-white/5 hover:text-foreground' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 shrink-0">
                        <title>Workspace</title>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    Workspace
                </a>

                <a href="{{ route('profile.edit') }}" title="Profile"
                    class="flex items-center gap-3 rounded-r-lg border-l-2 px-3 py-2 text-sm font-medium transition {{ request()->routeIs('profile.*') ? 'border-accent bg-accent/10 text-accent' : 'border-transparent text-foreground-muted hover:bg-white/5 hover:text-foreground' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 shrink-0">
                        <title>Profile</title>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Profile
                </a>
            </nav>

            <div class="mt-auto flex items-center justify-between border-t border-white/8 px-2 pt-4">
                <span class="truncate text-sm text-foreground-muted">{{ auth()->user()->name }}</span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" title="Log out"
                        class="cursor-pointer rounded-lg p-2 text-foreground-muted transition hover:bg-white/5 hover:text-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                            <title>Log out</title>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l3 3m0 0l-3 3m3-3H2.25" />
                        </svg>
                    </button>
                </form>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto px-10 py-10">
            @yield('content')
        </main>
    </div>
</body>
</html>
