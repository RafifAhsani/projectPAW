<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - OVENOMA</title>
</head>
<body>
    <h1>Selamat Datang di OVENOMA!</h1>

    @auth
        <p>Halo, {{ Auth::user()->name }}!</p>
        <p>Kamu berhasil login sebagai {{ Auth::user()->role }}.</p>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <p>Silakan login atau daftar untuk mulai berbelanja.</p>
        <a href="{{ route('login') }}">Login</a>
        |
        <a href="{{ route('register') }}">Register</a>
    @endauth

</body>
</html>
