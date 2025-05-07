<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'main.main')
    ->name('main');

Route::view('ruang', 'main.pemesanan')
    ->middleware(['auth', 'verified', 'user'])
    ->name('ruang');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('admin/dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin.dashboard');

require __DIR__.'/auth.php';
