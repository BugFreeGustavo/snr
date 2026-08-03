<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SNR — Login</title>
</head>
<body>
    <h1>SNR</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>

        <label>
            <input type="checkbox" name="remember"> Remember me
        </label>

        <button type="submit">Log in</button>
    </form>
</body>
</html>
