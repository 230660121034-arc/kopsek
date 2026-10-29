<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

// Rute Halaman Utama
Route::get('/', [LandingController::class, 'index'])->name('home');

// Rute Halaman About/Tentang (Opsional)
Route::get('/about', function () {
    return response()->json([
        'aplikasi' => 'Web Kopsek Laravel 11',
        'status' => 'Aktif'
    ]);
});