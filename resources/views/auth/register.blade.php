<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - OVENOMA</title>
</head>
<body>
    <h1>Daftar Akun OVENOMA</h1>
    <p>Buat akun untuk mulai berbelanja.</p>

    @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('register.process') }}" method="POST">
        @csrf

        <label>Nama Lengkap</label><br>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br><br>

        <label>Email</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br><br>

        <label>Nomor Telepon</label><br>
        <input type="text" name="phone" value="{{ old('phone') }}" required>
        <br><br>

        <label>Password</label><br>
        <input type="password" name="password" required>
        <br><br>

        <label>Konfirmasi Password</label><br>
        <input type="password" name="password_confirmation" required>
        <br><br>

        <button type="submit">Daftar</button>
    </form>

    <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>
</body>
</html>
