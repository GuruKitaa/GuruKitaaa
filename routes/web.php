<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;



// Tambahkan ini
Route::get('/gurus', [GuruController::class, 'index']);
Route::get('/', function () {
    return view('Landing.landingpage');
});
Route::get('/choose', function() {
    return view('Landing.choose');
});
