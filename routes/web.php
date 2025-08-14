<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==========================
// HALAMAN UTAMA
// ==========================
Route::get('/', function () {
    return view('welcome');
}) ->name('welcome');

// ==========================
// LOGIN ADMIN
// ==========================
Route::prefix('admin')->group(function () {
    // Form Login
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');

    // Proses Login
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');

    // Logout Admin
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    // ================================
    // HALAMAN YANG MEMBUTUHKAN LOGIN
    // ================================
    Route::middleware('auth:admin')->group(function () {
        // Dashboard Admin (berisi judul saja)
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        // Halaman Rekap Absen (berisi tabel dan statistik seperti sebelumnya)
        Route::get('/rekap-absen', [AdminController::class, 'rekapAbsen'])->name('admin.rekap');
    });
});

// ==========================
// FORM ABSENSI NON-ASN
// ==========================

// Form & Simpan Absen Masuk
Route::get('/absen/masuk', [AbsensiController::class, 'formMasuk'])->name('form.masuk');
Route::post('/absen/masuk', [AbsensiController::class, 'storeMasuk'])->name('form.masuk.store');

// Form & Simpan Absen Pulang
Route::get('/absen/pulang', [AbsensiController::class, 'formPulang'])->name('form.pulang');
Route::post('/absen/pulang', [AbsensiController::class, 'storePulang'])->name('form.pulang.store');
