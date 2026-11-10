<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman Login
Route::get('/', [PageController::class, 'login']);
Route::post('/login', [PageController::class, 'prosesLogin']);

// Halaman Utama
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);
Route::get('/profile', [PageController::class, 'profile']);

// Logout
Route::get('/logout', [PageController::class, 'logout']);