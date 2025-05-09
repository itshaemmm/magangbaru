<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuangsicController;

Route::get('/', function () {
    return view('pages.main');
});

Route::view('main', 'pages.main')
    ->middleware(['auth', 'verified', 'user'])
    ->name('main');

Route::view('ruang', 'pages.ruangan')
    ->middleware(['auth', 'verified', 'user'])
    ->name('ruang');

Route::post('/peminjaman', [RuangsicController::class, 'store'])->name('ruang.store');

Route::get('/peminjaman', [RuangsicController::class, 'create'])->name('ruang.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
