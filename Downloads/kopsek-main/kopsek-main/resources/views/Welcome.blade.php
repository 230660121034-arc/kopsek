@extends('layouts.app')

@section('content')
    <!-- Hero & Search Section -->
    <section class="bg-white border-b border-gray-200 py-8">
        <!-- Tempel bagian Hero dari kode HTML di sini -->
    </section>

    <!-- Kategori & Katalog Produk -->
    <section class="max-w-7xl mx-auto px-4 py-8">
        <!-- Tempel bagian Kategori & Grid Produk di sini -->
        <!-- Nanti bagian produk ini bisa di-looping menggunakan @foreach($products as $product) -->
    </section>
@endsection

@push('scripts')
<script>
    // Tempelkan logika JavaScript (filter kategori, modal, keranjang) di sini
</script>
@endpush