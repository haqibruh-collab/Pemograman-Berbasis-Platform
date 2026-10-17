<?php

use Illuminate\Support\Facades\Route;

Route::get('/halo', function () {
    return "Halo, ini adalah halaman web";
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);
// contoh URL: /mahasiswa/3 -> method show("3")
// contoh URL: /mahasiswa/120 -> method show("120")
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);