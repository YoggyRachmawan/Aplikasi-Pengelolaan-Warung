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
Route::get('/formTambahBelanjaan', [BelanjaanController::class, 'create']);
Route::post('/inputBelanjaan', [BelanjaanController::class, 'store']);
Route::get('/formEditBelanjaan', [BelanjaanController::class, 'edit']);
Route::get('/hapusBelanjaan/{id}', [BelanjaanController::class, 'destroy']);

// Tempat Belanja //
Route::get('/daftarTempatBelanja', [TempatBelanjaController::class, 'index']);
Route::get('/formTambahTempatBelanja', [TempatBelanjaController::class, 'create']);
Route::post('/inputTempatBelanja', [TempatBelanjaController::class, 'store']);
Route::get('/formEditTempatBelanja/{id}', [TempatBelanjaController::class, 'edit']);
Route::post('/editTempatBelanja/{id}', [TempatBelanjaController::class, 'update']);
Route::get('/hapusTempatBelanja/{id}', [TempatBelanjaController::class, 'destroy']);

// Daftar Produk //
Route::get('/daftarProduk', [DaftarProdukController::class, 'index']);
Route::get('/inputProduk', [DaftarProdukController::class, 'create']);
Route::get('/editProduk', [DaftarProdukController::class, 'edit']);

// Satuan Produk //
Route::get('/daftarSatuanProduk', [SatuanProdukController::class, 'index']);
Route::post('/inputSatuanProduk', [SatuanProdukController::class, 'store']);
Route::get('/hapusSatuanProduk/{id}', [SatuanProdukController::class, 'destroy']);

// Keuangan
Route::get('/keuanganHarian', [KeuanganController::class, 'indexHarian']);
Route::post('/inputKeuanganHarian', [KeuanganController::class, 'store']);
Route::get('/hapusKeuanganHarian/{id}', [KeuanganController::class, 'destroy']);
Route::get('/keuanganBulanan', [KeuanganController::class, 'indexBulanan']);
