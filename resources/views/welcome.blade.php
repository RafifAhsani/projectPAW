<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>OVEnoma - Artisan Bakery &amp; Pastry</title>
<!-- Fonts & Icons -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400;1,600&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "background": "#FAF6EF",
            "surface": "#FAF6EF",
            "surface-card": "#FFFFFF",
            "primary": "#493022",
            "primary-dark": "#311B0F",
            "secondary": "#A9784F",
            "secondary-light": "#F4EADB",
            "on-surface": "#29231F",
            "on-surface-muted": "#6E6259",
            "outline-soft": "#EADBCE",
          },
          fontFamily: {
            serif: ["Playfair Display", "serif"],
            sans: ["Plus Jakarta Sans", "sans-serif"],
          }
        }
      }
    }
  </script>
</head>
<body class="bg-background text-on-surface font-sans antialiased selection:bg-secondary-light selection:text-primary">
<!-- ==================== 1. NAVBAR ==================== -->
<header class="sticky top-0 z-50 bg-[#FAF6EF]/95 backdrop-blur-md border-b border-outline-soft">
<div class="max-w-[1440px] mx-auto px-6 sm:px-10 lg:px-16 h-20 flex items-center justify-between">
<!-- Brand Logo (Serif Monogram & Typography) -->
<div class="flex items-center">
<a class="group flex items-center gap-3" href="#">
<div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-[#FAF6EF] font-serif font-bold text-xl tracking-wider transition-transform duration-300 group-hover:scale-105">
            O
          </div>
<div class="flex flex-col">
<span class="font-serif font-bold text-2xl text-primary tracking-tight leading-none">OVEnoma</span>
<span class="text-[10px] uppercase tracking-[0.2em] text-secondary font-semibold mt-0.5">Artisan Bakehouse</span>
</div>
</a>
</div>
<!-- Navigation Menu -->
<nav class="hidden md:flex items-center gap-10">
<a class="relative py-2 font-serif text-lg font-semibold text-primary transition-colors after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-secondary" href="#">
          Home
        </a>
<a class="relative py-2 text-sm font-medium text-on-surface-muted hover:text-primary transition-colors" href="#about">
          About Us
        </a>
<a class="relative py-2 text-sm font-medium text-on-surface-muted hover:text-primary transition-colors" href="#katalog">
          Katalog Produk
        </a>
</nav>

<!-- Right Action Items (Cart & Account) -->
<div class="flex items-center gap-4">
    <!-- Cart Button -->
    <a aria-label="Keranjang Belanja"
        class="relative flex items-center justify-center w-11 h-11 rounded-full bg-surface-card border border-outline-soft text-primary hover:border-secondary transition-all shadow-sm group"
        href="#">
        <span class="material-symbols-outlined text-[22px] group-hover:text-secondary transition-colors">shopping_bag</span>
        <span class="absolute -top-1 -right-1 flex items-center justify-center min-w-[20px] h-5 px-1 rounded-full bg-secondary text-white text-[11px] font-bold">
            3
        </span>
    </a>

    <!-- User / Login Access -->
    <div class="flex items-center gap-2 pl-2">
        @auth
            <span class="text-xs font-semibold text-primary hidden sm:inline-block">
                Halo, {{ auth()->user()->name }}
            </span>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="px-4 py-2 rounded-full border border-outline-soft bg-surface-card text-xs font-semibold text-primary hover:bg-secondary-light/40 transition-colors">
                    Logout
                </button>
            </form>
        @else
            <a href="{{ route('login') }}"
                class="px-4 py-2 rounded-full border border-outline-soft bg-surface-card text-xs font-semibold text-primary hover:bg-secondary-light/40 transition-colors">
                Masuk
            </a>

            <a href="{{ route('register') }}"
                class="px-4 py-2 rounded-full bg-primary text-white text-xs font-semibold hover:bg-primary-dark transition-colors">
                Daftar
            </a>
        @endauth
    </div>
</div>
</div>
</header>

<main class="w-full">

<!-- ==================== 2. HERO SECTION / BANNER UTAMA ==================== -->
<section class="relative max-w-[1440px] mx-auto px-6 sm:px-10 lg:px-16 pt-10 pb-16 lg:py-20">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

        <!-- Text & Headline Column -->
        <div class="lg:col-span-6 space-y-6">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-secondary-light text-primary text-xs font-semibold uppercase tracking-wider">
                <span class="w-2 h-2 rounded-full bg-secondary"></span>
                Artisan Bakery &amp; Pastry
            </div>

            <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl text-primary font-bold leading-[1.15]">
                Kemurnian Rasa dari <br/>
                <span class="italic font-normal text-secondary">Tungku Tradisional.</span>
            </h1>

            <p class="text-base sm:text-lg text-on-surface-muted leading-relaxed max-w-xl">
                Setiap pagi dimulai dari fermentasi alami 48 jam, tepung gandum murni tanpa zat tambahan, dan mentega Prancis AOP. Dibuat hangat dan segar setiap hari untuk menyajikan kelezatan artisan sejati ke meja Anda.
            </p>

            <div class="pt-2">
                <a class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl bg-primary hover:bg-primary-dark text-white font-medium text-base tracking-wide transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5" href="#katalog">
                    <span>Jelajahi Produk</span>
                    <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                </a>
            </div>
        </div>

        <!-- Visual Banner Column -->

<!-- Visual Banner Column -->
<div class="lg:col-span-6">
<div class="relative rounded-2xl overflow-hidden shadow-2xl bg-surface-card border border-outline-soft">
<img alt="Artisan Croissant Emas dan Sourdough Segar OVEnoma" class="w-full h-[420px] sm:h-[480px] object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPFOQtapOGKarfOfjjYPK94iWD18cDANDyVTEKpVTtwIC8yalOixvOIaepkhUG0sfKxKr6C_RCschQvoDlVtZLVwNZL1qSUCP8yZz6owm-H-eLQMq_EhRIeRD_f3CHsgG9F2HGVCdkOJkrl8gE-fRdKVbeCc93OpTIrBAYzlckBp_He2iADnmAPRxtSS6rlRTZUXBQFxIYgSpCHpduupR7iHpMJAGNb4_6sJyaqZ0"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent flex items-end p-8">
<div class="text-white space-y-1">
<span class="text-xs uppercase tracking-widest text-[#FAF6EF]/90 font-medium">Bakehouse Senopati</span>
<p class="font-serif text-2xl sm:text-3xl font-bold">100% French AOP Butter &amp; Levain Alami</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- ==================== 3. SECTION PRODUK TERLARIS (BEST SELLER) ==================== -->
<section class="max-w-[1440px] mx-auto px-6 sm:px-10 lg:px-16 py-16">
<div class="space-y-2 mb-10">
<h2 class="font-serif text-3xl sm:text-4xl text-primary font-bold tracking-tight">Produk Terlaris</h2>
<p class="text-sm sm:text-base text-on-surface-muted">Koleksi roti dan viennoiserie favorit pelanggan kami setiap subuh.</p>
</div>
<!-- 4 Cards Grid (Strict Content: Foto, Nama, Harga) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
<!-- Card 1 -->
<a class="group bg-surface-card rounded-2xl overflow-hidden border border-outline-soft p-4 flex flex-col transition-all duration-300 hover:shadow-xl hover:border-secondary" href="#detail-almond-croissant">
<div class="aspect-[4/3] rounded-xl overflow-hidden bg-background mb-4">
<img alt="Almond Croissant de Paris" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAUMc1gk2aovxuSNbYsbaFjnHPAVgRj12-daN_mBEYkntccjjDCSG1uWAqo6DTr0hLGxi9XD5qTN_AL5y4P1Gh33q2kfLkZ-wqLDHjtHOwHAkLUrPbaZE27fskwe3wnkqqW7JtT0QCKMXTzTg8jCDIn850tHnkMXX3vayLJmCewO9tnJrV3rDpeiyyCiHHx9knmdD-reilMLE5EpsLsF3u1cW_75LC7KokNXYT15To"/>
</div>
<div class="flex flex-col flex-1 justify-between pt-1">
<h3 class="font-serif text-lg font-bold text-primary group-hover:text-secondary transition-colors">
              Almond Croissant de Paris
            </h3>
<p class="font-sans text-base font-semibold text-secondary mt-3">
              Rp 38.000
            </p>
</div>
</a>
<!-- Card 2 -->
<a class="group bg-surface-card rounded-2xl overflow-hidden border border-outline-soft p-4 flex flex-col transition-all duration-300 hover:shadow-xl hover:border-secondary" href="#detail-campagne-sourdough">
<div class="aspect-[4/3] rounded-xl overflow-hidden bg-background mb-4">
<img alt="Campagne Sourdough Loaf" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEaDk9VFvzItrPVlBdIV3WK3cLItr_58B0YkYu2uIkDsXmj2CtU4w0Sdau98Cq5Yn112W_IXUnIhT4CZ3QmLR7kVD9b3UOE7vEXaGwinS5dRDUYeEM3cqmTNK8y7NDnCDGrm8J6G21fknasXWbkrguSkj2zs6tapld2oItRGS8DicoQ3Md59AAhF-doT215nAERg1VKY3VGnls0vlg-MdwaV8qDfjeIoPa5TjWWbs"/>
</div>
<div class="flex flex-col flex-1 justify-between pt-1">
<h3 class="font-serif text-lg font-bold text-primary group-hover:text-secondary transition-colors">
              Campagne Sourdough Loaf
            </h3>
<p class="font-sans text-base font-semibold text-secondary mt-3">
              Rp 55.000
            </p>
</div>
</a>
<!-- Card 3 -->
<a class="group bg-surface-card rounded-2xl overflow-hidden border border-outline-soft p-4 flex flex-col transition-all duration-300 hover:shadow-xl hover:border-secondary" href="#detail-chocolate-babka">
<div class="aspect-[4/3] rounded-xl overflow-hidden bg-background mb-4">
<img alt="Valrhona Chocolate Babka" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBswH65lKELbEpqL169AXv9ewbfREb9IMcrlft8OmbIZcKCqAXZlhJCbgYK7Cqmk2xtGei1e-gUlJC8bX4aH8udZhqRFj-xM-2weytpMnGs9XYQVRZguT4QSXFCatfMeOJT428Xor2BlGFRBzjVeEmJ5fNSi2oizEQzT2PBPy_lMQpOvHOnWsFE8HPDntkFDDHMIxlXz38uyQwNIOVY6oUgylGvUvi-msyJrCRFBc8"/>
</div>
<div class="flex flex-col flex-1 justify-between pt-1">
<h3 class="font-serif text-lg font-bold text-primary group-hover:text-secondary transition-colors">
              Valrhona Chocolate Babka
            </h3>
<p class="font-sans text-base font-semibold text-secondary mt-3">
              Rp 62.000
            </p>
</div>
</a>
<!-- Card 4 -->
<a class="group bg-surface-card rounded-2xl overflow-hidden border border-outline-soft p-4 flex flex-col transition-all duration-300 hover:shadow-xl hover:border-secondary" href="#detail-canele">
<div class="aspect-[4/3] rounded-xl overflow-hidden bg-background mb-4">
<img alt="Canelé de Bordeaux" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXHVMPJJ6M5p1fxidFQboWquWXuAyaWxAygOaaF1eKXIiN96ECbySYq_gMIEkvz6VsnrMC13lf0APoq8wr83R7uFOsWfSpc6Sm8etaDhG-qzH0JTtivruh08DXtBaSQLyT5thzHGk4xs3wPC9PsawITz55QVWsxu19ustyHAhXdleVWceq_iAghlAk_f35nhThUeW8W9o7Tow6v32YIgbBslf32uIQ3pFbuthZhGo"/>
</div>
<div class="flex flex-col flex-1 justify-between pt-1">
<h3 class="font-serif text-lg font-bold text-primary group-hover:text-secondary transition-colors">
              Canelé de Bordeaux
            </h3>
<p class="font-sans text-base font-semibold text-secondary mt-3">
              Rp 38.000
            </p>
</div>
</a>
</div>
</section>
<!-- ==================== 4. SECTION PRODUK TERBARU ==================== -->
<section class="max-w-[1440px] mx-auto px-6 sm:px-10 lg:px-16 py-16">
<div class="space-y-2 mb-10">
<h2 class="font-serif text-3xl sm:text-4xl text-primary font-bold tracking-tight">Produk Terbaru</h2>
<p class="text-sm sm:text-base text-on-surface-muted">Kreasi terbaru baker kami dari oven musim ini.</p>
</div>
<!-- 4 Cards Grid (Strict Content: Foto, Nama, Harga) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
<!-- Card 1 -->
<a class="group bg-surface-card rounded-2xl overflow-hidden border border-outline-soft p-4 flex flex-col transition-all duration-300 hover:shadow-xl hover:border-secondary" href="#detail-pistachio-cruffin">
<div class="aspect-[4/3] rounded-xl overflow-hidden bg-background mb-4">
<img alt="Pistachio Cruffin" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEFKfY9ord75t_aw5X9bUNVkcUWjsZTlaM5BwJP6LdfTWTkUZxZLWHTMnaWnps22yE3KoT2psh8JSKSsCPDyoGyiKhXHw4_oYwK1sthwuddviVwXyvv50Iezu3u5_Q5Cq8zBZWxm7du8BWs-AlrQObJMAsjbc5h9peaNpp3flOfGV-QBXNqXDQyoTazxQu9ADlQBY-54m5RZsLJpeoi1MvHGUGrU7vSGMf4CSwqj8"/>
</div>
<div class="flex flex-col flex-1 justify-between pt-1">
<h3 class="font-serif text-lg font-bold text-primary group-hover:text-secondary transition-colors">
              Pistachio Cruffin
            </h3>
<p class="font-sans text-base font-semibold text-secondary mt-3">
              Rp 42.000
            </p>
</div>
</a>
<!-- Card 2 -->
<a class="group bg-surface-card rounded-2xl overflow-hidden border border-outline-soft p-4 flex flex-col transition-all duration-300 hover:shadow-xl hover:border-secondary" href="#detail-pain-au-chocolat">
<div class="aspect-[4/3] rounded-xl overflow-hidden bg-background mb-4">
<img alt="Pain au Chocolat Gianduja" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUlJMAB4c9TETGpKHok7EkkoxvsekMHhSXUG66vDnSrr0WfAU8TTCD65YKb8qQgQeUw_2obZ6tN8I8hmBZlPZSIlzHVfpZgvYGjEzCkuDzZaq6IzazCxBBmEXrOCf66uWJ7qxNIFnffnZRgbNOI_2z0DH-pyzDlGXcIso2rZagCwneeWxUMuRvfLuCdxR2BdEBhqilbaQm4kkqmDZ0nZzJh3Y--GT-Wl-1-QKvyak"/>
</div>
<div class="flex flex-col flex-1 justify-between pt-1">
<h3 class="font-serif text-lg font-bold text-primary group-hover:text-secondary transition-colors">
              Pain au Chocolat Gianduja
            </h3>
<p class="font-sans text-base font-semibold text-secondary mt-3">
              Rp 36.000
            </p>
</div>
</a>
<!-- Card 3 -->
<a class="group bg-surface-card rounded-2xl overflow-hidden border border-outline-soft p-4 flex flex-col transition-all duration-300 hover:shadow-xl hover:border-secondary" href="#detail-kouign-amann">
<div class="aspect-[4/3] rounded-xl overflow-hidden bg-background mb-4">
<img alt="Caramelized Kouign-Amann" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlAKoYZH-VBeidT9FzaOfMHofaSBUdtyxC-xppyBsoHQY-SUfkXiDtTZr1pFyeb6-Y9dlnOuepAA8FCwl_prEA49PjBJ13SdznCaR1VTiThuMRhUi9krEVGP4SN_m7hICOQu5E6cooAUCdkvh9W8MUtKr4MXJgqvv1mjWNRcNA8_3AJ9iHaF22yEU2L1_3UJQVNQdRIZ1H_GrFKDQFofisx-b8hkfnzY0MKA6bKxE"/>
</div>
<div class="flex flex-col flex-1 justify-between pt-1">
<h3 class="font-serif text-lg font-bold text-primary group-hover:text-secondary transition-colors">
              Caramelized Kouign-Amann
            </h3>
<p class="font-sans text-base font-semibold text-secondary mt-3">
              Rp 34.000
            </p>
</div>
</a>
<!-- Card 4 -->
<a class="group bg-surface-card rounded-2xl overflow-hidden border border-outline-soft p-4 flex flex-col transition-all duration-300 hover:shadow-xl hover:border-secondary" href="#detail-cheesecake">
<div class="aspect-[4/3] rounded-xl overflow-hidden bg-background mb-4">
<img alt="Burnt Basque Cheesecake Slice" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1NJxFZ2KCAzq1O4kjQp5k-GLmt8Qb2LOqTiBQ54apn6x7SuVgMyM8N5KFJQ97dvBEDdOb_SfzdZbX68MYmzONotS2sKIQQveWM_Xak0HDKfbwWjpExcovYeS5cjY6m41PogS0C_H3WgCZdSyc1tIphnPVpO1GGF6BDtPg80AKQrGEDJdk1D1wADJxuzrpklcZn183E8iWv9_3dNP59SWBFWOa-JsqltXYYM4LF20"/>
</div>
<div class="flex flex-col flex-1 justify-between pt-1">
<h3 class="font-serif text-lg font-bold text-primary group-hover:text-secondary transition-colors">
              Burnt Basque Cheesecake Slice
            </h3>
<p class="font-sans text-base font-semibold text-secondary mt-3">
              Rp 48.000
            </p>
</div>
</a>
</div>
</section>
<!-- ==================== 5. SECTION PROMO ==================== -->
<section class="max-w-[1440px] mx-auto px-6 sm:px-10 lg:px-16 py-12">
<div class="relative rounded-3xl bg-secondary text-white p-8 sm:p-12 lg:p-14 overflow-hidden shadow-lg">
<div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
<div class="space-y-4 max-w-2xl">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/20 backdrop-blur-sm text-xs font-semibold uppercase tracking-wider text-white">
<span class="material-symbols-outlined text-[16px]">local_offer</span>
              Promo Spesial
            </span>
<h2 class="font-serif text-2xl sm:text-3xl lg:text-4xl font-bold leading-snug">
              Diskon 15% untuk Paket Pagi Sourdough &amp; Croissant
            </h2>
<p class="text-[#FAF6EF]/90 text-sm sm:text-base leading-relaxed">
              Nikmati kehangatan sarapan artisan setiap pemesanan sebelum jam 10:00 WIB. Gunakan kode promo saat checkout atau tunjukkan saat datang ke Senopati Bakehouse.
            </p>
</div>
<div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 flex-shrink-0">
<div class="px-5 py-3 rounded-xl bg-white/15 border border-white/30 backdrop-blur-md">
<span class="text-[11px] block uppercase tracking-wider text-white/80">Kode Promo</span>
<span class="font-mono text-lg font-bold tracking-widest text-white">PAGIHANGAT15</span>
</div>
<a class="px-6 py-3.5 rounded-xl bg-primary hover:bg-primary-dark text-white font-medium text-sm transition-all shadow-md" href="#katalog">
              Lihat Detail Promo
            </a>
</div>
</div>
</div>
</section>
<!-- ==================== 6. SECTION ABOUT US ==================== -->
<section class="max-w-[1440px] mx-auto px-6 sm:px-10 lg:px-16 py-16 lg:py-24" id="about">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
<!-- Left: Bakery Photography -->
<div class="lg:col-span-6">
<div class="relative rounded-2xl overflow-hidden shadow-xl border border-outline-soft bg-surface-card aspect-[4/3]">
<img alt="Proses Pembuatan Roti Artisan OVEnoma" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCc9CROoi0newmhgqryH6ii9665eUq7OM6RfInFxrL7lQqabX2cmatdw3m1KJH9YZ3vZRY-nRkkM-0Gt10HIHUYdxnwchqai8FI6E5Wr9WYQyRT5LyfOTreBZpedPO_1epD7hqQwlTNF2OzDi8yyAJaQWWGkctCchTKblA399ZBDBjBR2k8egEEGfEZLdrYyXI0arl4-7sQOGW1sO_xXJYtU3AJEiu55yjpgjBMKbg"/>
</div>
</div>
<!-- Right: Story & Philosophy -->
<div class="lg:col-span-6 space-y-6">
<div class="space-y-2">
<span class="text-xs uppercase font-semibold tracking-wider text-secondary">Cerita Dapur Kami</span>
<h2 class="font-serif text-3xl sm:text-4xl text-primary font-bold">Tentang OVEnoma</h2>
</div>
<p class="text-base text-on-surface-muted leading-relaxed">
            Berawal dari kecintaan mendalam akan seni pembuatan roti klasik Eropa, OVEnoma hadir untuk menghidupkan kembali cita rasa roti autentik di tengah denyut Jakarta. Kami meyakini bahwa roti terbaik lahir dari kesabaran dan bahan baku yang tanpa kompromi.
          </p>
<p class="text-base text-on-surface-muted leading-relaxed">
            Setiap adonan dibuat secara cermat menggunakan <strong>100% French AOP butter</strong>, tepung gandum berkualitas tinggi, dan ragi alami (wild levain) yang difermentasi lambat selama 48 jam. Tanpa bahan pengawet sintetis, tanpa pemutih, dan selalu dipanggang segar di tungku kami setiap subuh.
          </p>
<div class="pt-2 border-t border-outline-soft flex items-center gap-8">
<div>
<p class="font-serif text-2xl font-bold text-primary">100%</p>
<p class="text-xs text-on-surface-muted">Bahan Alami Pilihan</p>
</div>
<div>
<p class="font-serif text-2xl font-bold text-primary">48 Jam</p>
<p class="text-xs text-on-surface-muted">Fermentasi Dingin</p>
</div>
<div>
<p class="font-serif text-2xl font-bold text-primary">05:00</p>
<p class="text-xs text-on-surface-muted">Dipanggang Segar Tiap Hari</p>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- ==================== 7. FOOTER ==================== -->
<footer class="border-t border-outline-soft bg-[#F5EDE1]/60 pt-16 pb-12">
<div class="max-w-[1440px] mx-auto px-6 sm:px-10 lg:px-16">
<div class="grid grid-cols-1 md:grid-cols-12 gap-10 pb-12 border-b border-outline-soft">
<!-- Info Ringkas Brand & Alamat -->
<div class="md:col-span-6 lg:col-span-5 space-y-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-[#FAF6EF] font-serif font-bold text-base">
              O
            </div>
<span class="font-serif font-bold text-xl text-primary tracking-tight">OVEnoma</span>
</div>
<p class="text-sm text-on-surface-muted leading-relaxed max-w-sm">
            Toko bakery &amp; patisserie artisan yang menyajikan roti sourdough fermentasi alami, pastry bermentega Prancis, dan kue klasik berkualitas tinggi.
          </p>
<div class="pt-1 text-sm text-on-surface-muted space-y-1">
<p><strong class="text-primary font-medium">Bakehouse Senopati:</strong> Jl. Senopati No. 42, Kebayoran Baru, Jakarta Selatan 12190</p>
<p><strong class="text-primary font-medium">Jam Operasional:</strong> Setiap Hari, 07:00 – 20:00 WIB</p>
</div>
</div>
<!-- Tautan Navigasi Dasar -->
<div class="md:col-span-3 lg:col-span-3 space-y-3">
<h4 class="font-serif text-base font-bold text-primary">Menu Navigasi</h4>
<ul class="space-y-2 text-sm text-on-surface-muted">
<li>
<a class="hover:text-primary transition-colors" href="#">Home</a>
</li>
<li>
<a class="hover:text-primary transition-colors" href="#about">About Us</a>
</li>
<li>
<a class="hover:text-primary transition-colors" href="#katalog">Katalog Produk</a>
</li>
</ul>
</div>
<!-- Kontak & Pemesanan -->
<div class="md:col-span-3 lg:col-span-4 space-y-3">
<h4 class="font-serif text-base font-bold text-primary">Layanan Pelanggan</h4>
<p class="text-sm text-on-surface-muted leading-relaxed">
            Menerima pesanan pre-order, catering acara, dan pengiriman kurir instan seluruh wilayah Jakarta &amp; Tangerang Selatan.
          </p>
<p class="text-sm font-medium text-primary pt-1">
            WhatsApp: +62 812-3456-7890
          </p>
</div>
</div>
<!-- Copyright Bar -->
<div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-on-surface-muted">
<p>© 2025 OVEnoma Artisan Bakery &amp; Pastry. Hak Cipta Dilindungi.</p>
<p class="text-[11px]">Dipanggang dengan cinta, fermentasi alami &amp; mentega Prancis murni.</p>
</div>
</div>
</footer>
</body></html>