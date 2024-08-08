<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DaftarBelanjaController;
use App\Http\Controllers\InputNotaController;
use App\Http\Controllers\KalkulatorBelanjaController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\ProdukController;

// Auth
Route::get('/', [AuthController::class, 'index']);

// Beranda
Route::get('/beranda', [BerandaController::class, 'index']);

// Belanja
Route::get('/kalkulatorBelanja', [KalkulatorBelanjaController::class, 'index']);
Route::get('/daftarBelanja', [DaftarBelanjaController::class, 'index']);
Route::get('/inputNota', [InputNotaController::class, 'index']);
Route::get('/formInputNota', [InputNotaController::class, 'create']);

// Produk
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/editProduk', [ProdukController::class, 'edit']);

// Keuangan
Route::get('/keuangan', [KeuanganController::class, 'index']);