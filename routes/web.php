<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar_penyakit', function () {
    return view('daftar_penyakit');
});

Route::get('/info_penyakit', function () {
    return view('info_penyakit');
})->middleware(['auth', 'verified'])->name('info_penyakit');

Route::get('/konsultasi', function () {
    return view('konsultasi');
})->middleware(['auth', 'verified'])->name('konsultasi');

Route::get('/pertolongan', function () {
    return view('pertolongan');
})->middleware(['auth', 'verified'])->name('pertolongan');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
