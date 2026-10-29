<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kantin & Koperasi Digital - SMK Bani Ma'sum</title>

    <!-- Tailwind CSS CDN / Vite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    @stack('styles')
</head>
<body class="bg-[#FAFAFA] text-[#2B2D42] font-sans antialiased min-h-screen flex flex-col justify-between">

    <!-- Header / Navbar -->
    @include('layouts.partials.header')

    <!-- Konten Utama Halaman -->
    <main>
        @yield('content')
    </main>

    <!-- Footer & About Section -->
    @include('layouts.partials.footer')

    @stack('scripts')
</body>
</html>