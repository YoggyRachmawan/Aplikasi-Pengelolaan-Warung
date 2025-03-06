<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\BelanjaanController;
use App\Http\Controllers\HargaProdukController;
use App\Http\Controllers\KatalogProdukController;
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
Route::get('/formEditBelanjaan/{id}', [BelanjaanController::class, 'edit']);
Route::post('/editBelanjaan/{id}', [BelanjaanController::class, 'update']);
Route::get('/hapusBelanjaan/{id}', [BelanjaanController::class, 'destroy']);

// Tempat Belanja //
Route::get('/daftarTempatBelanja', [TempatBelanjaController::class, 'index']);
Route::get('/formTambahTempatBelanja', [TempatBelanjaController::class, 'create']);
Route::post('/inputTempatBelanja', [TempatBelanjaController::class, 'store']);
Route::get('/formEditTempatBelanja/{id}', [TempatBelanjaController::class, 'edit']);
Route::post('/editTempatBelanja/{id}', [TempatBelanjaController::class, 'update']);
Route::get('/hapusTempatBelanja/{id}', [TempatBelanjaController::class, 'destroy']);

// Katalog Produk //
Route::get('/daftarProduk', [KatalogProdukController::class, 'index']);
Route::get('/formTambahProduk', [KatalogProdukController::class, 'create']);
Route::post('/inputProduk', [KatalogProdukController::class, 'store']);
Route::get('/formEditProduk', [KatalogProdukController::class, 'edit']);

// Harga Produk
Route::get('/daftarHargaModal', [HargaProdukController::class, 'indexHargaModal']);
Route::post('/inputHargaModal', [HargaProdukController::class, 'storeHargaModal']);
Route::post('/hapusHargaModal/{index}', [HargaProdukController::class, 'destroyHargaModal']);
Route::get('/daftarHargaJual', [HargaProdukController::class, 'indexHargaJual']);
Route::post('/inputHargaJual', [HargaProdukController::class, 'storeHargaJual']);
Route::post('/hapusHargaJual/{index}', [HargaProdukController::class, 'destroyHargaJual']);

// Satuan Produk //
Route::get('/daftarSatuanProduk', [SatuanProdukController::class, 'index']);
Route::post('/inputSatuanProduk', [SatuanProdukController::class, 'store']);
Route::get('/hapusSatuanProduk/{id}', [SatuanProdukController::class, 'destroy']);

// Keuangan
Route::get('/daftarKeuanganHarian', [KeuanganController::class, 'indexHarian']);
Route::post('/inputKeuanganHarian', [KeuanganController::class, 'store']);
Route::get('/hapusKeuanganHarian/{id}', [KeuanganController::class, 'destroy']);
Route::get('/daftarKeuanganBulanan', [KeuanganController::class, 'indexBulanan']);
