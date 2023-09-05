<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa');

Route::get('/mahasiswa/cari', [App\Http\Controllers\MahasiswaController::class, 'cari']);

Route::post('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'create'])->name('add.mhs');

Route::get('/mahasiswa/{id}/edit', [App\Http\Controllers\MahasiswaController::class, 'edit']);

Route::post('/mahasiswa/{id}/update', [App\Http\Controllers\MahasiswaController::class, 'update'])->name('update.mhs');

Route::get('/mahasiswa/delete/{id}', [App\Http\Controllers\MahasiswaController::class, 'delete']);

Route::get('/mahasiswa/exportpdf',[MahasiswaController::class,'exportPdf']);

Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'index']);

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle']);

Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback']);

Route::get('auth/facebook', [App\Http\Controllers\FacebookController::class, 'redirectToFacebook']);

Route::get('auth/facebook/callback', [App\Http\Controllers\FacebookController::class, 'handleFacebookCallback']);