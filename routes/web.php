<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\BelanjaanController;
use App\Http\Controllers\DaftarProdukController;
use App\Http\Controllers\SatuanProdukController;
use App\Http\Controllers\TempatBelanjaController;

// Auth
Route::get('/', [AuthController::class, 'index']);

// Beranda
Route::get('/beranda', [BerandaController::class, 'index']);

// Belanjaan //
Route::get('/daftarBelanjaan', [BelanjaanController::class, 'index']);
Route::get('/inputBelanjaan', [BelanjaanController::class, 'create']);
Route::get('/editBelanjaan', [BelanjaanController::class, 'edit']);

// Tempat Belanja //
Route::get('/daftarTempatBelanja', [TempatBelanjaController::class, 'index']);
Route::get('/inputTempatBelanja', [TempatBelanjaController::class, 'create']);
Route::get('/editTempatBelanja', [TempatBelanjaController::class, 'edit']);

// Daftar Produk //
Route::get('/daftarProduk', [DaftarProdukController::class, 'index']);
Route::get('/inputProduk', [DaftarProdukController::class, 'create']);
Route::get('/editProduk', [DaftarProdukController::class, 'edit']);

// Satuan Produk //
Route::get('/daftarSatuanProduk', [SatuanProdukController::class, 'index']);
Route::get('/hapusSatuanProduk/{id}', [SatuanProdukController::class, 'destroy']);

// Keuangan
Route::get('/keuanganHarian', [KeuanganController::class, 'indexHarian']);
Route::get('/keuanganBulanan', [KeuanganController::class, 'indexBulanan']);
