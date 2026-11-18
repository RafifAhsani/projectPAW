<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - OVENOMA</title>
</head>
<body>
    <h1>Login OVENOMA</h1>
    <p>Selamat datang kembali!</p>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login.process') }}" method="POST">
        @csrf

        <label>Email</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br><br>

        <label>Password</label><br>
        <input type="password" name="password" required>
        <br><br>

        <label>
            <input type="checkbox" name="remember" value="1">
            Ingat saya
        </label>
        <br><br>

        <button type="submit">Masuk</button>
    </form>

    <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
</body>
</html>
