
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - OVEnoma</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: 'Plus Jakarta Sans', sans-serif; background: #FAF6EF; color: #493426; }
        .page { min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 30px 20px; }
        .card { width: 100%; max-width: 950px; min-height: 570px; display: grid; grid-template-columns: 1fr 1fr; background: white; border-radius: 18px; overflow: hidden; box-shadow: 0 15px 45px #49342618; }
        .visual { background: #493426; color: white; padding: 55px 45px; display: flex; flex-direction: column; justify-content: center; }
        .logo { font-family: 'Playfair Display', serif; font-size: 34px; font-weight: bold; }
        .visual h2 { font-family: 'Playfair Display', serif; font-size: 38px; line-height: 1.3; margin: 55px 0 15px; }
        .visual p { color: #e5d6c5; line-height: 1.8; font-size: 14px; }
        .form-area { padding: 65px 50px; display: flex; flex-direction: column; justify-content: center; }
        h1 { font-family: 'Playfair Display', serif; font-size: 32px; margin: 0 0 10px; }
        .subtitle { color: #88796c; font-size: 13px; margin-bottom: 30px; }
        label { display: block; font-size: 13px; font-weight: 600; margin: 17px 0 8px; }
        input { width: 100%; padding: 14px; border: 1px solid #e5ddd3; border-radius: 8px; outline: none; font: inherit; font-size: 13px; }
        input:focus { border-color: #a47d56; }
        button { width: 100%; border: 0; background: #493426; color: white; padding: 15px; border-radius: 8px; font: inherit; font-weight: 600; cursor: pointer; margin-top: 25px; }
        button:hover { background: #76543b; }
        .bottom { text-align: center; font-size: 13px; color: #88796c; margin-top: 22px; }
        a { color: #9b744e; font-weight: 600; text-decoration: none; }
        .error { color: #b42318; font-size: 12px; margin-top: 5px; }
        .success { color: #287447; font-size: 13px; margin-bottom: 12px; }
        @media(max-width: 700px) { .card { grid-template-columns: 1fr; } .visual { padding: 30px; } .visual h2 { margin: 25px 0 10px; font-size: 28px; } .form-area { padding: 35px 25px; } }
    </style>
</head>
<body>
<div class="page">
    <div class="card">
        <div class="visual">
            <div class="logo">OVEnoma.</div>
            <h2>Selamat Datang Kembali.</h2>
            <p>Nikmati kembali kehangatan roti artisan dan pastry pilihan yang dibuat segar setiap hari.</p>
        </div>

        <div class="form-area">
            <h1>Masuk ke Akun</h1>
            <p class="subtitle">Silakan masuk untuk melanjutkan pengalaman berbelanja.</p>

            @if (session('success'))
                <p class="success">{{ session('success') }}</p>
            @endif

            @if ($errors->any())
                <div class="error">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('login.process') }}" method="POST">
                @csrf
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email kamu" required>

                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required>

                <label style="font-weight:400;">
                    <input type="checkbox" name="remember" value="1" style="width:auto; margin-right:6px;">
                    Ingat saya
                </label>

                <button type="submit">Masuk</button>
            </form>

            <div class="bottom">
                Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a>
                <p><a href="{{ route('home') }}">← Kembali ke Homepage</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
