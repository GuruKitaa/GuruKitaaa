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

Route::get('/login-siswa', [SiswaController::class, 'index']);
Route::get('/register-siswa', [SiswaController::class, 'register']);
