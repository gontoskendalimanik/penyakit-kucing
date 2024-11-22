<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('daftar_penyakit');

})->name('daftar_penyakit');

Route::get('/konsultasi', function () {
    return view('konsultasi');
})->name('konsultasi');

Route::get('/pertolongan', function () {
    return view('pertolongan');
})->name('pertolongan');

Route::get('/diagnosa_penyakit', function () {
    return view('diagnosa_penyakit');
})->middleware(['auth', 'verified'])->name('diagnosa_penyakit');

Route::get('/analisa', function () {
    return view('analisa');
})->middleware(['auth', 'verified'])->name('analisa');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
