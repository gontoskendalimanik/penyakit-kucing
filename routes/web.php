<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

use App\Models\DataPasien;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\HasilAnalisa;

// Route gambar
Route::get('/images', [ImageController::class, 'show'])->name('image.show');

// Daftar Penyakit
Route::get('/', function () {
    return view('daftar_penyakit');
})->name('daftar_penyakit');

Route::get('daftar_penyakit/koksidiosis', function () {
    return view('daftar_penyakit.koksidiosis');
})->name('koksidiosis');

Route::get('daftar_penyakit/tripanosomiasis', function () {
    return view('daftar_penyakit.tripanosomiasis');
})->name(name: 'tripanosomiasis');

Route::get('daftar_penyakit/hepatozoonosis', function () {
    return view('daftar_penyakit.hepatozoonosis');
})->name('hepatozoonosis');

Route::get('daftar_penyakit/babesiosis', function () {
    return view('daftar_penyakit.babesiosis');
})->name('babesiosis');

Route::get('daftar_penyakit/ankilostomiosis', function () {
    return view('daftar_penyakit.ankilostomiosis');
})->name('ankilostomiosis');

Route::get('daftar_penyakit/distemper', function () {
    return view('daftar_penyakit.distemper');
})->name('distemper');

Route::get('daftar_penyakit/ankilostomiosis', function () {
    return view('daftar_penyakit.ankilostomiosis');
})->name('ankilostomiosis');

Route::get('daftar_penyakit/tungau_otodectes', function () {
    return view('daftar_penyakit.tungau_otodectes');
})->name('tungau_otodectes');

Route::get('daftar_penyakit/phthiriasis', function () {
    return view('daftar_penyakit.phthiriasis');
})->name('phthiriasis');

Route::get('daftar_penyakit/pedikulosis', function () {
    return view('daftar_penyakit.pedikulosis');
})->name('pedikulosis');

// Route Obat
Route::get('/obat', function () {
    return view('obat');
})->name('obat');

// Route Konsultasi
Route::get('/konsultasi', function () {
    return view('konsultasi');
})->name('konsultasi');

Route::get('konsultasi/koksidiosis', function () {
    return view('konsultasi.koksidiosis');
})->name('koksidiosis');

Route::get('konsultasi/tripanosomiasis', function () {
    return view('konsultasi.tripanosomiasis');
})->name(name: 'trypanosomiasis');

Route::get('konsultasi/hepatozoonosis', function () {
    return view('konsultasi.hepatozoonosis');
})->name('hepatozoonosis');

Route::get('konsultasi/babesiosis', function () {
    return view('konsultasi.babesiosis');
})->name('babesiosis');

Route::get('konsultasi/ankilostomiosis', function () {
    return view('konsultasi.ankilostomiosis');
})->name('ankilostomiosis');

Route::get('konsultasi/distemper', function () {
    return view('konsultasi.distemper');
})->name('distemper');

Route::get('konsultasi/dnkilostomiosis', function () {
    return view('konsultasi.ankilostomiosis');
})->name('ankilostomiosis');

Route::get('konsultasi/tungau_otodectes', function () {
    return view('konsultasi.tungau_otodectes');
})->name('tungau_otodectes');

Route::get('konsultasi/phthiriasis', function () {
    return view('konsultasi.phthiriasis');
})->name('phthiriasis');

Route::get('konsultasi/pedikulosis', function () {
    return view('konsultasi.pedikulosis');
})->name('pedikulosis');

// Diagnosa penyakit

Route::middleware([
    'auth:sanctum',
    'verified',
])->group(function () {
    Route::resource('data_pasien', DataPasienController::class);
    Route::resource('gejala', GejalaController::class);
    Route::resource('hasil_analisa', HasilAnalisaController::class);
    Route::resource('penyakit', PenyakitController::class);
});

// Analisa
Route::get('/analisa', function () {
    return view('analisa');
})->middleware(['auth', 'verified'])->name('analisa');

// Route Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

