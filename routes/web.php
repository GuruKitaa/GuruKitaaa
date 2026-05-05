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

Route::get('/detail-guru', function () {
    return view('Landing.landingdetailGuru');
});

Route::get('/cari-guru', function () {
    return view('Landing.landingSiswaCariGuru');
});

Route::get('/booking-les', function () {
    return view('Landing.bookingLes');
});

Route::get('/login-siswa        ', [SiswaController::class, 'index']);
Route::get('/register-siswa', [SiswaController::class, 'register']);
Route::get('/login-guru', [GuruController::class, 'index']);
Route::get('/register-guru', [GuruController::class, 'register']);
