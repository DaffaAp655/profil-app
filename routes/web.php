<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TentangController;

// Route public (tidak butuh login)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/mahasiswa/{id}', [ProfilController::class, 'show'])->name('mahasiswa.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route yang butuh login
Route::resource('mahasiswas', MahasiswaController::class)
     ->middleware('auth');

require __DIR__.'/auth.php';
