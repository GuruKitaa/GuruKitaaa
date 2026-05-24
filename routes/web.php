<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AuthController;

// Authentication Routes
Route::post('/login', [AuthController::class, 'loginProcess'])->name('login');
Route::post('/register/siswa', [AuthController::class, 'registerSiswaProcess'])->name('register.siswa');
Route::post('/register/guru', [AuthController::class, 'registerGuruProcess'])->name('register.guru');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Tambahkan ini
Route::get('/gurus', [GuruController::class, 'index']);

Route::get('/', function () {
    return view('Landing.landingpage');
});
Route::get('/choose', function() {
    return view('Landing.choose');
});

// Route::get('/guru', function() {
//     return view('Landing.landingGuru');
// });

// Route::get('/siswa', function() {
//     return view('Landing.landingSiswa');
// });

// Route::get('/detail-guru', function () {
//     return view('Landing.landingdetailGuru');
// });

// Route::get('/cari-guru', function () {
//     return view('Landing.landingSiswaCariGuru');
// });

// FLOW BOOKING > CHECKOUT

Route::get(
    '/checkout-pembayaran/{id}',
    [SiswaController::class, 'checkoutPembayaran']
)->middleware('role:siswa');

// FLOW CHECKOUT > SELESAI

Route::get(
    '/selesai-pembayaran/{id}',
    [SiswaController::class, 'selesaiPembayaran']
)->middleware('role:siswa');

// ================================================

Route::get('/daftar-kelas', function () {
    return view('Landing.daftarKelas');
});

Route::get('/detail-kelas', function () {
    return view('Landing.detailKelas');
});

Route::get('/artikel', function () {
    return view('Landing.artikel');
});

Route::get('/detail-artikel', function () {
    return view('Landing.detailArtikel');
});

Route::get('/lomba', function () {
    return view('Landing.lomba');
});

Route::get('/detail-lomba', function () {
    return view('Landing.detailLomba');
});

Route::get('/pelatihan', function () {
    return view('Landing.pelatihan');
});

Route::get('/detail-pelatihan', function () {
    return view('Landing.detailPelatihan');
});

Route::get('/chat', function () {
    return view('Landing.chat');
});

Route::get('/materi-tugas', function () {
    return view('Landing.materiTugas');
});

Route::get('/detail-murid', function () {
    return view('Landing.detailMurid');
});

Route::get('/tarik-saldo', function () {
    return view('Landing.tarikSaldo');
});

Route::get('/notifikasi', function () {
    return view('Landing.notifikasi');
});

Route::get(
    '/pengaturan-guru',
    [GuruController::class, 'settingsGuru']
)->middleware('role:guru');

Route::post(
    '/pengaturan-guru',
    [GuruController::class, 'updateSettingsGuru']
)->middleware('role:guru');

Route::get('/login-siswa', [SiswaController::class, 'index']);
Route::get('/register-siswa', [SiswaController::class, 'register']);
Route::post('/register-siswa', [SiswaController::class, 'store']);

// ==============================
// LOGIN GURU
// ==============================
Route::get('/login-guru', [GuruController::class, 'index']);
Route::post('/login-guru', [GuruController::class, 'login']);

// ==============================
// REGISTER GURU
// ==============================
Route::get('/register-guru', [GuruController::class, 'register']);
Route::post('/register-guru', [GuruController::class, 'store']);

// ==============================
// LOGIN SISWA
// ==============================
Route::get('/login-siswa', [SiswaController::class, 'index']);
Route::post('/login-siswa', [SiswaController::class, 'login']);

// ==============================
// REGISTER SISWA
// ==============================
Route::get('/register-siswa', [SiswaController::class, 'register']);
Route::post('/register-siswa', [SiswaController::class, 'store']);

Route::get('/cari-guru', [GuruController::class, 'cariGuru']);

// Landing detail-guru Dynamic
Route::get(
    '/detail-guru/{id}',
    [GuruController::class, 'detailGuru']
);

// MiddleWare
Route::get(
    '/dashboard-guru',
    [GuruController::class, 'dashboardGuru']
)->middleware('role:guru');


Route::get(
    '/dashboard-siswa',
    [SiswaController::class, 'dashboardSiswa']
)->middleware('role:siswa');

// detail-guru to booking-les
Route::get('/booking-les/{id}', [GuruController::class, 'bookingLes']);