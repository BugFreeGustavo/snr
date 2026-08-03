<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SNR — Dashboard</title>
</head>
<body>
    <h1>Welcome, {{ $professional->name }}</h1>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Log out</button>
    </form>
</body>
</html>
