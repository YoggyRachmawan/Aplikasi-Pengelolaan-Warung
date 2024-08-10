<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KalkulatorBelanjaController;
use App\Http\Controllers\BelanjaanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeuanganController;

// Auth
Route::get('/', [AuthController::class, 'index']);

// Beranda
Route::get('/beranda', [BerandaController::class, 'index']);

// Belanja
// Kalkulator Belanja //
Route::get('/kalkulatorBelanja', [KalkulatorBelanjaController::class, 'index']);
// Belanjaan //
Route::get('/daftarBelanja', [BelanjaanController::class, 'index']);
Route::get('/belanjaanBaru', [BelanjaanController::class, 'indexBelanjaanBaru']);
Route::get('/inputNota', [BelanjaanController::class, 'create']);
Route::get('/editNota', [BelanjaanController::class, 'edit']);
Route::get('/detailNota', [BelanjaanController::class, 'show']);

// Produk
// Dafatar Produk //
Route::get('/daftarProduk', [ProdukController::class, 'index']);
Route::get('/editProduk', [ProdukController::class, 'edit']);
Route::get('/detailProduk', [ProdukController::class, 'show']);
// Satuan Produk //
Route::get('/satuanProduk', [ProdukController::class, 'indexSatuanProduk']);

// Keuangan
Route::get('/keuangan', [KeuanganController::class, 'index']);
