<!DOCTYPE html>
<html lang="id" class="light scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kantin & Koperasi Digital SMK Bani Ma'sum</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        // 60% Dominan (Latar & Space)
                        bgLight: '#FAFAFA',
                        bgWhite: '#FFFFFF',
                        // 30% Sekunder (Struktur, Teks & Card)
                        charcoal: '#2B2D42',
                        charcoalLight: '#3D405B',
                        cardBg: '#FFFFFF',
                        borderLight: '#E2E8F0',
                        textMuted: '#64748B',
                        // 10% Aksen / CTA Utama (Merah Tomat)
                        accentRed: '#E63946',
                        accentRedHover: '#D62828',
                        accentRedLight: '#FFE5E7'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #FAFAFA;
            color: #2B2D42;
        }
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #FAFAFA;
        }
        ::-webkit-scrollbar-thumb {
            background: #CBD5E1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94A3B8;
        }
    </style>
</head>
<body class="bg-bgLight text-charcoal min-h-screen flex flex-col justify-between antialiased">

    <!-- TOP NAVIGATION BAR (30% Warna Sekunder Struktur) -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-borderLight px-4 lg:px-8 py-3 shadow-sm">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-4">
            
            <!-- Logo & School Info -->
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-xl bg-accentRed flex items-center justify-center font-extrabold text-white text-lg shadow-md shadow-accentRed/30">
                    <i class="fa-solid font-bold fa-school"></i>
                </div>
                <div>
                    <h1 class="font-extrabold text-charcoal text-base leading-tight tracking-wide">SMK BANI MA'SUM</h1>
                    <p class="text-[10px] text-accentRed tracking-wider uppercase font-bold">Cerdas • Berkarakter • Terampil</p>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="hidden xl:flex items-center space-x-1 text-xs font-semibold text-charcoal">
                <a href="#katalog" class="px-3 py-1.5 rounded-lg hover:text-accentRed hover:bg-slate-100 transition">Katalog</a>
                <a href="#katalog" onclick="filterCategory('makanan')" class="px-3 py-1.5 rounded-lg hover:text-accentRed hover:bg-slate-100 transition">Kantin</a>
                <a href="#katalog" onclick="filterCategory('atk')" class="px-3 py-1.5 rounded-lg hover:text-accentRed hover:bg-slate-100 transition">Koperasi</a>
                <a href="#" onclick="openModal('Riwayat Transaksi', 'Daftar riwayat transaksi terakhir Anda siap ditinjau.')" class="px-3 py-1.5 rounded-lg hover:text-accentRed hover:bg-slate-100 transition">Riwayat Transaksi</a>
                <a href="#" onclick="openModal('Mutasi Saldo', 'Saldo Tabungan / E-Kantin Anda: Rp 125.000')" class="px-3 py-1.5 rounded-lg hover:text-accentRed hover:bg-slate-100 transition">Mutasi Saldo</a>
                <a href="#" class="px-3 py-1.5 rounded-lg bg-accentRedLight text-accentRed font-bold">E-Kantin & Koperasi</a>
            </nav>

            <!-- Action Buttons -->
            <div class="flex items-center space-x-2">
                <button onclick="openModal('Notifikasi', 'Tidak ada notifikasi baru.')" class="p-2 text-charcoal hover:text-accentRed bg-white hover:bg-slate-100 rounded-lg border border-borderLight transition relative shadow-sm">
                    <i class="fa-regular fa-bell text-sm"></i>
                    <span class="absolute top-1 right-1 w-2 h-2 bg-accentRed rounded-full"></span>
                </button>
                <button onclick="openModal('Scan Kartu Siswa', 'Dekatkan Kartu Pelajar RFID/QR Code ke scanner device.')" class="hidden sm:flex items-center space-x-1.5 px-3 py-2 bg-white hover:bg-slate-100 border border-borderLight text-xs font-medium text-charcoal rounded-lg transition shadow-sm">
                    <i class="fa-solid fa-qrcode text-accentRed"></i>
                    <span>Scan Kartu</span>
                </button>
                <button onclick="openModal('Kasir Mode', 'Mode Buka Kasir membutuhkan PIN Otorisasi Petugas.')" class="flex items-center space-x-2 px-4 py-2 bg-charcoal hover:bg-charcoalLight text-white text-xs font-semibold rounded-lg shadow-md transition">
                    <i class="fa-solid fa-cash-register"></i>
                    <span>Buka Kasir</span>
                </button>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 lg:px-8 py-6 space-y-6 flex-grow">

        <!-- HERO SECTION -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
            
            <!-- Left Hero Content -->
            <div class="lg:col-span-7 bg-white border border-borderLight rounded-2xl p-6 lg:p-8 flex flex-col justify-between relative overflow-hidden shadow-sm group">
                <div class="absolute -right-16 -top-16 w-64 h-64 bg-accentRed/5 rounded-full blur-3xl group-hover:bg-accentRed/10 transition duration-700"></div>
                
                <div>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-bold bg-accentRedLight text-accentRed border border-accentRed/20 mb-4 tracking-wide uppercase">
                        <span class="w-1.5 h-1.5 rounded-full bg-accentRed animate-pulse"></span>
                        PORTAL KOPERASI & KANTIN RESMI SISWA
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-charcoal leading-tight mb-3">
                        E-Kantin & Koperasi Digital <br>
                        <span class="text-accentRed">SMK Bani Ma'sum</span>
                    </h2>
                    <p class="text-textMuted text-xs sm:text-sm leading-relaxed mb-6">
                        Layanan pemesanan makanan kantin sehat, minuman segar, alat tulis (ATK), seragam praktik, hingga atribut sekolah bagi Siswa dan Orang Tua Siswa SMK Bani Ma'sum secara praktis tanpa antre.
                    </p>
                </div>

                <!-- Search & Cart Action Bar -->
                <div class="flex flex-col sm:flex-row items-center gap-3">
                    <div class="relative w-full flex-1">
                        <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-1/2 -translate-y-1/2 text-textMuted text-sm"></i>
                        <input id="searchInput" oninput="searchProducts()" type="text" placeholder="Cari nasi ayam, es cokelat, wearpack RPL, seragam..." class="w-full bg-bgLight border border-borderLight text-xs text-charcoal placeholder-textMuted rounded-xl pl-10 pr-16 py-3 focus:outline-none focus:border-accentRed transition">
                        <button onclick="resetSearch()" class="absolute right-2 top-1/2 -translate-y-1/2 px-2.5 py-1 text-[11px] bg-white border border-borderLight hover:bg-slate-100 text-charcoal rounded-md transition font-medium">Reset</button>
                    </div>
                    <!-- 10% CTA Red Button -->
                    <button onclick="openCartModal()" class="w-full sm:w-auto flex items-center justify-center space-x-2 px-5 py-3 bg-accentRed hover:bg-accentRedHover text-white text-xs font-bold rounded-xl shadow-lg shadow-accentRed/30 transition whitespace-nowrap">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Keranjang (<span id="cartCount">3</span>)</span>
                    </button>
                </div>
            </div>

            <!-- Right Hero Card: Order Status Tracking -->
            <div class="lg:col-span-5 bg-white border border-borderLight rounded-2xl p-6 flex flex-col justify-between shadow-sm">
                <div>
                    <div class="flex items-center space-x-2 text-accentRed mb-2">
                        <i class="fa-solid fa-circle-check text-sm"></i>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-textMuted">LAYANAN SISWA & ORANG TUA</span>
                    </div>
                    <h3 class="text-base font-bold text-charcoal mb-4">Cek Status Pesanan & Jam Layanan</h3>
                    
                    <!-- Track Input -->
                    <div class="space-y-3">
                        <label class="text-xs text-textMuted font-medium">Lacak Pesanan Mandiri</label>
                        <div class="flex space-x-2">
                            <input type="text" id="trackCode" value="EK-20261026-001" class="bg-bgLight border border-borderLight text-xs font-mono text-charcoal rounded-xl px-3 py-2.5 flex-1 focus:outline-none focus:border-accentRed font-semibold">
                            <button onclick="trackOrder()" class="bg-charcoal hover:bg-charcoalLight text-white px-4 py-2.5 rounded-xl text-xs font-bold transition">Cek Pesanan</button>
                        </div>
                    </div>
                </div>

                <!-- Info Grid -->
                <div class="grid grid-cols-2 gap-3 mt-6 pt-4 border-t border-borderLight">
                    <div class="flex items-start space-x-2.5">
                        <div class="p-2 bg-accentRedLight text-accentRed rounded-lg text-xs mt-0.5"><i class="fa-regular fa-clock"></i></div>
                        <div>
                            <p class="text-[11px] font-bold text-charcoal">Jam Layanan</p>
                            <p class="text-[10px] text-textMuted">07.00 - 15.30 WIB (Senin - Sabtu)</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-2.5">
                        <div class="p-2 bg-accentRedLight text-accentRed rounded-lg text-xs mt-0.5"><i class="fa-solid fa-store"></i></div>
                        <div>
                            <p class="text-[11px] font-bold text-charcoal">Pengambilan</p>
                            <p class="text-[10px] text-textMuted">Loket / Kelas (Praktis & Cepat)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LIVE ORDER STATUS BANNER -->
        <section class="bg-white border border-borderLight rounded-xl p-4 flex flex-col md:flex-row items-center justify-between gap-4 shadow-sm">
            <div class="flex items-center space-x-3 text-xs">
                <span class="relative flex h-3 w-3">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                </span>
                <div>
                    <span class="font-bold text-emerald-600 uppercase tracking-wider text-[11px]">STATUS PESANAN TERKINI ANDA</span>
                    <span class="text-slate-300 mx-2">|</span>
                    <span class="text-textMuted font-medium">Nomor: EK-20261026-001</span>
                    <div class="text-charcoal font-semibold mt-0.5">
                        Ahmad Fauzi (XII RPL 1) — <span class="text-emerald-600 font-bold">Siap Diambil di Loket Kantin Sehat</span>
                    </div>
                </div>
            </div>
            <button onclick="openModal('Bukti Transaksi EK-20261026-001', 'Atas nama: Ahmad Fauzi (XII RPL 1)<br>Total: Rp 33.000<br>Status: Siap Diambil di Loket Kantin Sehat.')" class="w-full md:w-auto px-4 py-2 bg-bgLight hover:bg-slate-200 text-charcoal text-xs font-semibold rounded-lg border border-borderLight transition whitespace-nowrap">
                <i class="fa-solid fa-receipt mr-1.5 text-accentRed"></i> Lihat Bukti EK-20261026-001
            </button>
        </section>

        <!-- CATEGORY FILTERS -->
        <section>
            <div class="flex items-center justify-between mb-3">
                <h3 class="text-base font-bold text-charcoal">Kategori Katalog E-Kantin & Koperasi</h3>
                <span class="text-xs text-textMuted">6 Kategori Tersedia</span>
            </div>
            
            <div id="categoryGrid" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
                <!-- Category 1 (Active Accent Red) -->
                <button onclick="filterCategory('all')" data-cat="all" class="cat-btn active flex flex-col items-start p-3.5 rounded-xl bg-accentRed text-white border border-accentRed shadow-md shadow-accentRed/20 transition text-left">
                    <i class="fa-solid fa-border-all text-base mb-2"></i>
                    <span class="text-xs font-bold block">Semua Produk</span>
                    <span class="text-[10px] opacity-90">Katalog Lengkap</span>
                </button>
                <!-- Category 2 -->
                <button onclick="filterCategory('makanan')" data-cat="makanan" class="cat-btn flex flex-col items-start p-3.5 rounded-xl bg-white hover:bg-slate-50 text-charcoal border border-borderLight shadow-sm transition text-left">
                    <i class="fa-solid fa-utensils text-base mb-2 text-accentRed"></i>
                    <span class="text-xs font-bold text-charcoal block">Makanan & Snack</span>
                    <span class="text-[10px] text-textMuted">Kantin Sehat</span>
                </button>
                <!-- Category 3 -->
                <button onclick="filterCategory('minuman')" data-cat="minuman" class="cat-btn flex flex-col items-start p-3.5 rounded-xl bg-white hover:bg-slate-50 text-charcoal border border-borderLight shadow-sm transition text-left">
                    <i class="fa-solid fa-mug-hot text-base mb-2 text-accentRed"></i>
                    <span class="text-xs font-bold text-charcoal block">Minuman Segar</span>
                    <span class="text-[10px] text-textMuted">Dingin & Hangat</span>
                </button>
                <!-- Category 4 -->
                <button onclick="filterCategory('atk')" data-cat="atk" class="cat-btn flex flex-col items-start p-3.5 rounded-xl bg-white hover:bg-slate-50 text-charcoal border border-borderLight shadow-sm transition text-left">
                    <i class="fa-solid fa-pen-ruler text-base mb-2 text-accentRed"></i>
                    <span class="text-xs font-bold text-charcoal block">Alat Tulis (ATK)</span>
                    <span class="text-[10px] text-textMuted">Kebutuhan Kelas</span>
                </button>
                <!-- Category 5 -->
                <button onclick="filterCategory('seragam')" data-cat="seragam" class="cat-btn flex flex-col items-start p-3.5 rounded-xl bg-white hover:bg-slate-50 text-charcoal border border-borderLight shadow-sm transition text-left">
                    <i class="fa-solid fa-shirt text-base mb-2 text-accentRed"></i>
                    <span class="text-xs font-bold text-charcoal block">Seragam & Praktik</span>
                    <span class="text-[10px] text-textMuted">RPL & TBSM</span>
                </button>
                <!-- Category 6 -->
                <button onclick="filterCategory('atribut')" data-cat="atribut" class="cat-btn flex flex-col items-start p-3.5 rounded-xl bg-white hover:bg-slate-50 text-charcoal border border-borderLight shadow-sm transition text-left">
                    <i class="fa-solid fa-id-badge text-base mb-2 text-accentRed"></i>
                    <span class="text-xs font-bold text-charcoal block">Atribut Sekolah</span>
                    <span class="text-[10px] text-textMuted">Dasi, Topi, Bet</span>
                </button>
            </div>
        </section>

        <!-- CATALOG / PRODUCT GRID SECTION -->
        <section class="space-y-4">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                <div>
                    <h3 class="text-lg font-bold text-charcoal">Daftar Produk Populer & Esensial</h3>
                    <p class="text-xs text-textMuted">Pemesanan online langsung terhubung ke kasir koperasi & dapur kantin</p>
                </div>
                <div class="flex items-center space-x-2 text-xs">
                    <span class="text-textMuted font-medium">Urutkan:</span>
                    <select id="sortSelect" onchange="sortProducts()" class="bg-white border border-borderLight text-charcoal text-xs rounded-lg px-3 py-1.5 focus:outline-none focus:border-accentRed shadow-sm">
                        <option value="relevan">Paling Relevan</option>
                        <option value="termurah">Harga Termurah</option>
                        <option value="termahal">Harga Termahal</option>
                    </select>
                </div>
            </div>

            <!-- Products Grid Container -->
            <div id="productsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Dynamic products rendered via JS -->
            </div>
        </section>

    </main>

    <!-- COMPREHENSIVE FOOTER / ABOUT US (Light Charcoal Theme 30%) -->
    <footer class="bg-charcoal border-t border-charcoalLight mt-12 text-gray-300 text-xs">
        
        <!-- Official Sponsors / Partners Banner -->
        <div class="bg-black/20 border-b border-gray-700/60 py-5 px-4">
            <div class="max-w-7xl mx-auto flex flex-col items-center">
                <p class="text-[10px] font-semibold text-gray-400 uppercase tracking-widest mb-3">Mitra & Pendukung Resmi Unit Produksi Digital</p>
                <div class="flex flex-wrap items-center justify-center gap-6 md:gap-10 opacity-80">
                    <span class="font-bold text-white text-sm flex items-center gap-1.5"><i class="fa-solid fa-graduation-cap text-accentRed"></i> KEMENDIKBUD</span>
                    <span class="font-bold text-white text-sm flex items-center gap-1.5"><i class="fa-solid fa-building-columns text-cyan-400"></i> DINAS PENDIDIKAN</span>
                    <span class="font-bold text-white text-sm flex items-center gap-1.5"><i class="fa-solid fa-store text-emerald-400"></i> KOPERASI SISWA</span>
                    <span class="font-bold text-white text-sm flex items-center gap-1.5"><i class="fa-solid fa-laptop-code text-indigo-400"></i> UP-RPL TECH</span>
                    <span class="font-bold text-white text-sm flex items-center gap-1.5"><i class="fa-solid fa-wrench text-amber-400"></i> BANI MA'SUM AUTO</span>
                </div>
            </div>
        </div>

        <!-- Main Footer Links Grid -->
        <div class="max-w-7xl mx-auto px-4 lg:px-8 py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8">
                
                <!-- School Brand Column -->
                <div class="lg:col-span-4 space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-xl bg-accentRed flex items-center justify-center font-extrabold text-white text-lg shadow-md">
                            <i class="fa-solid fa-school"></i>
                        </div>
                        <div>
                            <h2 class="font-extrabold text-white text-base">SMK BANI MA'SUM</h2>
                            <p class="text-[10px] text-accentRed uppercase font-bold">Sistem Informasi E-Kantin & Koperasi</p>
                        </div>
                    </div>
                    <p class="text-xs text-gray-300 leading-relaxed">
                        Platform digital resmi SMK Bani Ma'sum yang mengintegrasikan layanan kantin sehat, penjualan atribut, bahan praktik jurusan RPL & TBSM, serta pembayaran praktis berbasis e-money siswa.
                    </p>
                    <div class="pt-2 text-[11px] text-gray-300 space-y-1">
                        <p><i class="fa-solid fa-location-dot text-accentRed mr-2"></i>Jl. Raya Bani Ma'sum, Kab. Bandung, Jawa Barat</p>
                        <p><i class="fa-solid fa-envelope text-accentRed mr-2"></i>info@smkbanimasum.sch.id</p>
                    </div>
                </div>

                <!-- Explore Links -->
                <div class="lg:col-span-3 space-y-3">
                    <h4 class="text-white font-bold uppercase tracking-wider text-xs border-b border-gray-700 pb-2">JELAJAHI / EXPLORE</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#katalog" class="hover:text-accentRed transition">Katalog Produk Terlengkap</a></li>
                        <li><a href="#katalog" onclick="filterCategory('makanan')" class="hover:text-accentRed transition">Kantin Sehat & Menu Makan</a></li>
                        <li><a href="#katalog" onclick="filterCategory('atk')" class="hover:text-accentRed transition">Koperasi & Perlengkapan ATK</a></li>
                        <li><a href="#" onclick="openModal('Status Pesanan', 'Masukkan kode transaksi Anda untuk melacak.')" class="hover:text-accentRed transition">Lacak Status Pesanan Mandiri</a></li>
                        <li><a href="#" onclick="openModal('Scan Kartu Siswa', 'Dekatkan Kartu Pelajar ke sensor.')" class="hover:text-accentRed transition">Scan Kartu Pelajar / Smartcard</a></li>
                    </ul>
                </div>

                <!-- About & Policies Links -->
                <div class="lg:col-span-3 space-y-3">
                    <h4 class="text-white font-bold uppercase tracking-wider text-xs border-b border-gray-700 pb-2">TENTANG / ABOUT US</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" onclick="openAboutModal()" class="hover:text-accentRed transition font-semibold text-accentRed">Profil & Visi Misi Sekolah</a></li>
                        <li><a href="#" onclick="openModal('Unit Produksi', 'Unit Produksi RPL dan TBSM mengelola barang praktik dan merchandise.')" class="hover:text-accentRed transition">Unit Produksi RPL & TBSM</a></li>
                        <li><a href="#" onclick="openModal('Kebijakan Privasi', 'Data transaksi siswa tersimpan aman secara terenkripsi.')" class="hover:text-accentRed transition">Kebijakan Privasi</a></li>
                        <li><a href="#" onclick="openModal('Syarat & Ketentuan', 'Pembelian barang koperasi dan e-kantin tunduk pada aturan sekolah.')" class="hover:text-accentRed transition">Syarat & Ketentuan Service</a></li>
                        <li><a href="#" onclick="openModal('Bantuan Kasir', 'Hubungi piket kantin atau kasir jika terdapat kendala saldo.')" class="hover:text-accentRed transition">Bantuan Kasir & Top Up Saldo</a></li>
                    </ul>
                </div>

                <!-- Socials & App Links (UEFA Style Layout) -->
                <div class="lg:col-span-2 space-y-4">
                    <h4 class="text-white font-bold uppercase tracking-wider text-xs border-b border-gray-700 pb-2">IKUTI KAMI</h4>
                    <div class="flex items-center space-x-2">
                        <a href="https://www.tiktok.com/@aldiss2.5?is_from_webapp=1&sender_device=pc" class="w-8 h-8 rounded-lg bg-charcoalLight hover:bg-accentRed text-gray-200 hover:text-white flex items-center justify-center transition"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#" class="w-8 h-8 rounded-lg bg-charcoalLight hover:bg-accentRed text-gray-200 hover:text-white flex items-center justify-center transition"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="w-8 h-8 rounded-lg bg-charcoalLight hover:bg-accentRed text-gray-200 hover:text-white flex items-center justify-center transition"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#" class="w-8 h-8 rounded-lg bg-charcoalLight hover:bg-accentRed text-gray-200 hover:text-white flex items-center justify-center transition"><i class="fa-brands fa-instagram"></i></a>
                    </div>

                    <p class="text-[11px] font-semibold text-white pt-2">Aplikasi Mobile E-Kantin</p>
                    <div class="space-y-1.5">
                        <button onclick="openModal('App Store', 'Aplikasi iOS SMK Bani Ma\'sum segera hadir.')" class="w-full py-2 px-3 bg-charcoalLight hover:bg-slate-700 border border-gray-600 rounded-lg flex items-center space-x-2 transition">
                            <i class="fa-brands fa-apple text-base text-white"></i>
                            <div class="text-left">
                                <p class="text-[9px] uppercase text-gray-400 leading-none">Unduh di</p>
                                <p class="text-[11px] font-bold text-white leading-none mt-0.5">App Store</p>
                            </div>
                        </button>
                        <button onclick="openModal('Google Play', 'Aplikasi Android APK dapat diunduh via portal sekolah.')" class="w-full py-2 px-3 bg-charcoalLight hover:bg-slate-700 border border-gray-600 rounded-lg flex items-center space-x-2 transition">
                            <i class="fa-brands fa-google-play text-base text-emerald-400"></i>
                            <div class="text-left">
                                <p class="text-[9px] uppercase text-gray-400 leading-none">Temukan di</p>
                                <p class="text-[11px] font-bold text-white leading-none mt-0.5">Google Play</p>
                            </div>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- UEFA-style Sub-footer Banner -->
        <div class="relative bg-black/40 pt-8 pb-6 border-t border-gray-700/60">
            <div class="max-w-7xl mx-auto px-4 lg:px-8 flex flex-col md:flex-row items-center justify-between text-[11px] text-gray-400 gap-4">
                <div class="flex flex-wrap items-center justify-center md:justify-start gap-4">
                    <a href="#" onclick="openModal('Privasi', 'Kebijakan Privasi berlaku penuh.')" class="hover:text-white transition">Privacy Policy</a>
                    <span>•</span>
                    <a href="#" onclick="openModal('Aturan', 'Aturan penggunaan E-Kantin.')" class="hover:text-white transition">Terms and Conditions</a>
                    <span>•</span>
                    <a href="#" onclick="openModal('Cookie', 'Penggunaan cookie untuk efisiensi sesi.')" class="hover:text-white transition">Cookie Policy</a>
                    <span>•</span>
                    <a href="#" onclick="openModal('Pengaturan', 'Pengaturan akun dan preferensi.')" class="hover:text-white transition">Privacy Settings</a>
                </div>

                <p class="text-center md:text-right text-gray-300">
                    © 1998-2026 Portal Resmi E-Kantin & Koperasi Siswa <span class="text-accentRed font-bold">SMK Bani Ma'sum</span>. Seluruh hak cipta dilindungi.
                </p>

                <a href="#" class="w-8 h-8 rounded-full bg-accentRed hover:bg-accentRedHover text-white flex items-center justify-center shadow-lg transition">
                    <i class="fa-solid fa-arrow-up text-xs"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- GENERIC MODAL / NOTIFICATION -->
    <div id="infoModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center hidden p-4">
        <div class="bg-white border border-borderLight rounded-2xl max-w-md w-full p-6 space-y-4 shadow-2xl relative">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-textMuted hover:text-charcoal">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
            <h3 id="modalTitle" class="text-lg font-bold text-charcoal pr-6">Informasi</h3>
            <div id="modalContent" class="text-xs text-textMuted leading-relaxed">
                Detail info...
            </div>
            <div class="pt-2 text-right">
                <button onclick="closeModal()" class="px-4 py-2 bg-accentRed hover:bg-accentRedHover text-white text-xs font-bold rounded-lg transition shadow-md">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- CARTS MODAL -->
    <div id="cartModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center hidden p-4">
        <div class="bg-white border border-borderLight rounded-2xl max-w-lg w-full p-6 space-y-4 shadow-2xl relative">
            <button onclick="closeCartModal()" class="absolute top-4 right-4 text-textMuted hover:text-charcoal">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
            <div class="flex items-center space-x-2">
                <i class="fa-solid fa-cart-shopping text-accentRed text-base"></i>
                <h3 class="text-lg font-bold text-charcoal">Keranjang Belanja Siswa</h3>
            </div>
            
            <div id="cartItemsContainer" class="space-y-3 max-h-60 overflow-y-auto pr-1 text-xs">
                <!-- Cart Items Rendered via JS -->
            </div>

            <div class="border-t border-borderLight pt-3 flex items-center justify-between">
                <span class="text-xs text-textMuted font-medium">Total Pembayaran:</span>
                <span id="cartTotal" class="text-base font-extrabold text-accentRed">Rp 188.000</span>
            </div>

            <div class="flex items-center justify-end space-x-2 pt-2">
                <button onclick="closeCartModal()" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-charcoal text-xs font-semibold rounded-lg">Lanjut Belanja</button>
                <button onclick="checkoutCart()" class="px-5 py-2 bg-accentRed hover:bg-accentRedHover text-white text-xs font-bold rounded-lg shadow-lg shadow-accentRed/20 transition">Bayar / Checkout</button>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        // Sample Product Data directly from Images 1 - 3
        const products = [
            {
                id: 1,
                category: 'seragam',
                badge: 'Wajib Praktik',
                badgeColor: 'bg-emerald-100 text-emerald-800 border-emerald-300',
                title: 'Seragam Wearpack Praktik RPL & TBSM',
                unit: 'Unit Produksi & Koperasi SMK',
                location: 'Loket Koperasi',
                time: 'Siap 5 Menit',
                stock: 25,
                price: 165000,
                originalPrice: 185000,
                image: 'https://images.unsplash.com/photo-1578632767115-351597cf2477?auto=format&fit=crop&w=500&q=80'
            },
            {
                id: 2,
                category: 'makanan',
                badge: 'Best Seller',
                badgeColor: 'bg-amber-100 text-amber-800 border-amber-300',
                title: 'Paket Nasi Ayam Bakar / Geprek Koperasi',
                unit: 'Kantin Sehat Bani Ma\'sum',
                location: 'Dapur Kantin',
                time: 'Siap 10 Menit',
                stock: 40,
                price: 15000,
                originalPrice: 18000,
                image: 'https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?auto=format&fit=crop&w=500&q=80'
            },
            {
                id: 3,
                category: 'atk',
                badge: 'Hemat 20%',
                badgeColor: 'bg-accentRedLight text-accentRed border-accentRed/30',
                title: 'Paket Alat Tulis & Buku Catatan Ujian',
                unit: 'Koperasi Siswa',
                location: 'Loket Koperasi',
                time: 'Siap 5 Menit',
                stock: 50,
                price: 28000,
                originalPrice: 35000,
                image: 'https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=500&q=80'
            },
            {
                id: 4,
                category: 'minuman',
                badge: 'Favorit Istirahat',
                badgeColor: 'bg-blue-100 text-blue-800 border-blue-300',
                title: 'Es Susu Cokelat & Matcha Segar Cup',
                unit: 'Booth Minuman Koperasi',
                location: 'Kantin Depan',
                time: 'Siap 5 Menit',
                stock: 60,
                price: 8000,
                originalPrice: 10000,
                image: 'https://images.unsplash.com/photo-1572490122747-3968b75cc699?auto=format&fit=crop&w=500&q=80'
            },
            {
                id: 5,
                category: 'atribut',
                badge: 'Atribut Resmi',
                badgeColor: 'bg-emerald-100 text-emerald-800 border-emerald-300',
                title: 'Set Dasi, Topi, Sabuk & Bet Lokasi SMK',
                unit: 'Unit Produksi & Koperasi SMK',
                location: 'Loket Koperasi',
                time: 'Tersedia',
                stock: 35,
                price: 45000,
                originalPrice: 55000,
                image: 'https://images.unsplash.com/photo-1617038260897-41a1f14a8ca0?auto=format&fit=crop&w=500&q=80'
            },
            {
                id: 6,
                category: 'makanan',
                badge: 'Hangat',
                badgeColor: 'bg-amber-100 text-amber-800 border-amber-300',
                title: 'Roti Bakar Lumer & Risoles Mayo Hangat',
                unit: 'Kantin Sehat Bani Ma\'sum',
                location: 'Dapur Kantin',
                time: 'Siap 7 Menit',
                stock: 30,
                price: 10000,
                originalPrice: 12000,
                image: 'https://images.unsplash.com/photo-1528735602780-2552fd46c7af?auto=format&fit=crop&w=500&q=80'
            },
            {
                id: 7,
                category: 'seragam',
                badge: 'Seragam Rabu-Kamis',
                badgeColor: 'bg-indigo-100 text-indigo-800 border-indigo-300',
                title: 'Kemeja Batik Identitas SMK Bani Ma\'sum',
                unit: 'Unit Produksi & Koperasi SMK',
                location: 'Loket Koperasi',
                time: 'Tersedia',
                stock: 20,
                price: 125000,
                originalPrice: 140000,
                image: 'https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?auto=format&fit=crop&w=500&q=80'
            },
            {
                id: 8,
                category: 'atk',
                badge: 'Rekomendasi RPL',
                badgeColor: 'bg-purple-100 text-purple-800 border-purple-300',
                title: 'Flashdisk 32GB USB 3.2 + Lanyard ID Card',
                unit: 'Koperasi Tekno RPL',
                location: 'Loket Koperasi',
                time: 'Tersedia',
                stock: 18,
                price: 65000,
                originalPrice: 75000,
                image: 'https://images.unsplash.com/photo-1597872200969-2b65d56bd16b?auto=format&fit=crop&w=500&q=80'
            }
        ];

        // Initial Cart State
        let cart = [
            { id: 1, name: 'Seragam Wearpack Praktik RPL & TBSM', price: 165000, qty: 1 },
            { id: 4, name: 'Es Susu Cokelat & Matcha Segar Cup', price: 8000, qty: 1 },
            { id: 6, name: 'Roti Bakar Lumer & Risoles Mayo Hangat', price: 10000, qty: 1 }
        ];

        let currentCategory = 'all';

        // Render Products with Light Theme Cards (Bright photo contrasts)
        function renderProducts(items) {
            const grid = document.getElementById('productsGrid');
            grid.innerHTML = '';

            if(items.length === 0) {
                grid.innerHTML = `
                    <div class="col-span-full py-12 text-center text-textMuted">
                        <i class="fa-solid fa-box-open text-3xl mb-2"></i>
                        <p class="text-xs">Tidak ada produk ditemukan.</p>
                    </div>
                `;
                return;
            }

            items.forEach(product => {
                const card = document.createElement('div');
                card.className = "bg-white hover:shadow-lg border border-borderLight rounded-2xl overflow-hidden flex flex-col justify-between transition duration-300 group";
                
                card.innerHTML = `
                    <div>
                        <!-- Image Container -->
                        <div class="relative h-44 w-full overflow-hidden bg-slate-100">
                            <img src="${product.image}" alt="${product.title}" onerror="this.src='https://placehold.co/400x250/FAFAFA/2B2D42?text=SMK+Bani+Ma%27sum'" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-black/20"></div>
                            
                            <!-- Top Badge & Wishlist -->
                            <div class="absolute top-2.5 left-2.5 right-2.5 flex items-center justify-between">
                                <span class="text-[10px] font-bold px-2.5 py-1 rounded-full border shadow-sm ${product.badgeColor}">
                                    ${product.badge}
                                </span>
                                <button onclick="toggleWishlist(this)" class="w-7 h-7 rounded-full bg-white/80 hover:bg-white text-charcoal hover:text-accentRed flex items-center justify-center transition text-xs shadow-sm">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>

                            <!-- Bottom Meta Over Image -->
                            <div class="absolute bottom-2 left-2.5 right-2.5 flex items-center justify-between text-[10px] font-medium text-white">
                                <span class="bg-charcoal/80 backdrop-blur-sm px-2 py-0.5 rounded">${product.location}</span>
                                <span class="bg-black/60 backdrop-blur-sm px-2 py-0.5 rounded">${product.time} • Stok: ${product.stock}</span>
                            </div>
                        </div>

                        <!-- Content Area -->
                        <div class="p-4 space-y-1.5">
                            <p class="text-[10px] font-bold text-accentRed uppercase tracking-wider">${product.unit}</p>
                            <h4 class="text-xs font-bold text-charcoal line-clamp-2 leading-snug group-hover:text-accentRed transition">
                                ${product.title}
                            </h4>
                        </div>
                    </div>

                    <!-- Price & Actions (10% CTA Red Buttons) -->
                    <div class="p-4 pt-0 space-y-3">
                        <div class="flex items-baseline space-x-2">
                            <span class="text-sm font-extrabold text-charcoal">Rp ${product.price.toLocaleString('id-ID')}</span>
                            ${product.originalPrice ? `<span class="text-[10px] text-textMuted line-through">Rp ${product.originalPrice.toLocaleString('id-ID')}</span>` : ''}
                        </div>

                        <div class="grid grid-cols-3 gap-1.5">
                            <button onclick="openModal('${product.title}', 'Harga: Rp ${product.price.toLocaleString('id-ID')}<br>Unit: ${product.unit}<br>Lokasi Pengambilan: ${product.location}<br>Estimasi: ${product.time}')" class="col-span-1 px-2 py-2 bg-slate-100 hover:bg-slate-200 text-charcoal text-[11px] font-semibold rounded-lg border border-borderLight transition">
                                Detail
                            </button>
                            <button onclick="addToCart(${product.id})" class="col-span-2 px-3 py-2 bg-accentRed hover:bg-accentRedHover text-white text-[11px] font-bold rounded-lg shadow-md shadow-accentRed/20 transition flex items-center justify-center space-x-1">
                                <i class="fa-solid fa-plus text-[10px]"></i>
                                <span>+ Keranjang</span>
                            </button>
                        </div>
                    </div>
                `;
                grid.appendChild(card);
            });
        }

        // Category Filter logic
        function filterCategory(cat) {
            currentCategory = cat;
            
            // Highlight button
            document.querySelectorAll('.cat-btn').forEach(btn => {
                if(btn.getAttribute('data-cat') === cat) {
                    btn.classList.add('bg-accentRed', 'text-white', 'border-accentRed', 'shadow-md');
                    btn.classList.remove('bg-white', 'hover:bg-slate-50', 'text-charcoal');
                } else {
                    btn.classList.remove('bg-accentRed', 'text-white', 'border-accentRed', 'shadow-md');
                    btn.classList.add('bg-white', 'hover:bg-slate-50', 'text-charcoal');
                }
            });

            if(cat === 'all') {
                renderProducts(products);
            } else {
                const filtered = products.filter(p => p.category === cat);
                renderProducts(filtered);
            }
        }

        // Search logic
        function searchProducts() {
            const query = document.getElementById('searchInput').value.toLowerCase();
            const filtered = products.filter(p => 
                p.title.toLowerCase().includes(query) || 
                p.unit.toLowerCase().includes(query)
            );
            renderProducts(filtered);
        }

        function resetSearch() {
            document.getElementById('searchInput').value = '';
            filterCategory('all');
        }

        // Sort products
        function sortProducts() {
            const val = document.getElementById('sortSelect').value;
            let sorted = [...products];
            if(val === 'termurah') {
                sorted.sort((a,b) => a.price - b.price);
            } else if(val === 'termahal') {
                sorted.sort((a,b) => b.price - a.price);
            }
            renderProducts(sorted);
        }

        // Add item to cart
        function addToCart(productId) {
            const item = products.find(p => p.id === productId);
            if(!item) return;

            const existing = cart.find(c => c.id === productId);
            if(existing) {
                existing.qty++;
            } else {
                cart.push({ id: item.id, name: item.title, price: item.price, qty: 1 });
            }
            updateCartUI();
            openModal('Ditambahkan ke Keranjang', `Berhasil menambahkan <b>${item.title}</b> ke keranjang belanja Anda.`);
        }

        function updateCartUI() {
            const totalQty = cart.reduce((acc, curr) => acc + curr.qty, 0);
            document.getElementById('cartCount').innerText = totalQty;
        }

        // Cart Modal Render
        function openCartModal() {
            const container = document.getElementById('cartItemsContainer');
            container.innerHTML = '';
            let grandTotal = 0;

            if(cart.length === 0) {
                container.innerHTML = `<p class="text-center text-textMuted py-6">Keranjang Anda masih kosong.</p>`;
            } else {
                cart.forEach((item, idx) => {
                    const itemTotal = item.price * item.qty;
                    grandTotal += itemTotal;

                    const row = document.createElement('div');
                    row.className = "flex items-center justify-between p-3 bg-bgLight border border-borderLight rounded-xl";
                    row.innerHTML = `
                        <div class="flex-1 pr-3">
                            <p class="font-bold text-charcoal leading-tight">${item.name}</p>
                            <p class="text-[10px] text-textMuted mt-0.5">Rp ${item.price.toLocaleString('id-ID')} x ${item.qty}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="font-extrabold text-accentRed text-xs">Rp ${itemTotal.toLocaleString('id-ID')}</span>
                            <button onclick="removeFromCart(${idx})" class="text-textMuted hover:text-accentRed p-1"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    `;
                    container.appendChild(row);
                });
            }

            document.getElementById('cartTotal').innerText = `Rp ${grandTotal.toLocaleString('id-ID')}`;
            document.getElementById('cartModal').classList.remove('hidden');
        }

        function removeFromCart(index) {
            cart.splice(index, 1);
            updateCartUI();
            openCartModal();
        }

        function closeCartModal() {
            document.getElementById('cartModal').classList.add('hidden');
        }

        function checkoutCart() {
            if(cart.length === 0) return;
            closeCartModal();
            openModal('Pesanan Berhasil Disimpan', 'Kode Transaksi: <b>EK-20261026-009</b><br>Silakan selesaikan pembayaran melalui e-money kartu siswa atau kasir loket sekolah.');
            cart = [];
            updateCartUI();
        }

        // Order Track function
        function trackOrder() {
            const code = document.getElementById('trackCode').value;
            openModal('Hasil Pelacakan Pesanan', `Nomor Transaksi: <b>${code}</b><br>Status: <span class="text-emerald-600 font-bold">Siap Diambil di Loket Kantin Sehat</span><br>Pemilik: Ahmad Fauzi (XII RPL 1)`);
        }

        // Toggle Wishlist Heart
        function toggleWishlist(btn) {
            const icon = btn.querySelector('i');
            if(icon.classList.contains('fa-regular')) {
                icon.classList.remove('fa-regular');
                icon.classList.add('fa-solid', 'text-accentRed');
            } else {
                icon.classList.remove('fa-solid', 'text-accentRed');
                icon.classList.add('fa-regular');
            }
        }

        // Modal Helpers
        function openModal(title, content) {
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalContent').innerHTML = content;
            document.getElementById('infoModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('infoModal').classList.add('hidden');
        }

        function openAboutModal() {
            openModal(
                'Tentang SMK Bani Ma\'sum', 
                `<b>SMK Bani Ma'sum</b> adalah lembaga pendidikan kejuruan berstandar modern yang membina generasi Cerdas, Berkarakter, dan Terampil.<br><br>` +
                `<b>Visi & Misi Unit Digital:</b><br>` +
                `• Mewujudkan efisiensi transaksi non-tunai berbasis smart card siswa.<br>` +
                `• Menyediakan bahan praktek RPL & TBSM berkualitas tinggi.<br>` +
                `• Menjamin nutrisi kantin sehat secara higienis dan terjangkau.`
            );
        }

        // On Page Load Initialization
        window.onload = function() {
            renderProducts(products);
            updateCartUI();
        };
    </script>
</body>
</html>