<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;

// Tambahkan ini
Route::get('/gurus', [GuruController::class, 'index']);

Route::get('/', function () {
    return view('Landing.landingpage');
});
Route::get('/choose', function() {
    return view('Landing.choose');
});

Route::get('/guru', function() {
    return view('Landing.landingGuru');
});

Route::get('/siswa', function() {
    return view('Landing.landingSiswa');
});

// Route::get('/detail-guru', function () {
//     return view('Landing.landingdetailGuru');
// });

// Route::get('/cari-guru', function () {
//     return view('Landing.landingSiswaCariGuru');
// });

Route::get('/booking-les', function () {
    return view('Landing.bookingLes');
});

Route::get('/checkout-pembayaran', function () {
    return view('Landing.checkoutPembayaran');
});

Route::get('/selesai-pembayaran', function () {
    return view('Landing.selesaiPembayaran');
});

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

Route::get('/cari-guru', [GuruController::class, 'cariGuru']);

// Landing detail-guru Dynamic
Route::get(
    '/detail-guru/{id}',
    [GuruController::class, 'detailGuru']
);

// MiddleWare
Route::get('/dashboard-guru', function () {

    return view('Landing.landingGuru');

})->middleware('role:guru');


Route::get('/dashboard-siswa', function () {

    return view('Landing.landingSiswa');

})->middleware('role:siswa');