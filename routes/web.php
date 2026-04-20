<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;

Route::get('/', function () {
    return view('welcome');
});

// Tambahkan ini
Route::get('/gurus', [GuruController::class, 'index']);
