<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GuruController;
use App\Http\Controllers\Api\SiswaController;
use App\Http\Controllers\Api\AuthController;

Route::get('/gurus', [GuruController::class, 'index']);
// Route::get('/gurus', [GuruController::class, 'apiGuru']);
Route::get('/siswas', [SiswaController::class, 'index']);
// API Detail-guru
Route::get('/gurus/{id}', [GuruController::class, 'show']);
// API Login
Route::post('/login', [AuthController::class, 'login']);
// API Register
Route::post('/register', [AuthController::class, 'register']);