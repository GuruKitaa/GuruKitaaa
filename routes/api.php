<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GuruController;
use App\Http\Controllers\Api\SiswaController;

Route::get('/gurus', [GuruController::class, 'index']);
// Route::get('/gurus', [GuruController::class, 'apiGuru']);
Route::get('/siswas', [SiswaController::class, 'index']);