<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Detail_PenjualanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.dashboard');

});

    Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
    Route::post('/actionlogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
    Route::get('/logout', [LoginController::class, 'actionLogout'])->name('actionLogout');


Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'create']);
Route::post('/user/simpan', [UserController::class, 'store']);
Route::get('/user/{id}/show', [UserController::class, 'show']);
Route::post('/user/{id}/update', [UserController::class, 'update']);
Route::get('/user/{id}/delete', [UserController::class, 'destroy']);


Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/tambah', [ProdukController::class, 'create']);
Route::post('/produk/simpan', [ProdukController::class, 'store']);
Route::get('/produk/{id}/show', [ProdukController::class, 'show']);
Route::post('/produk/{id}/update', [ProdukController::class, 'update']);
Route::get('/produk/{id}/delete', [ProdukController::class, 'destroy']);

Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/pelanggan/tambah', [PelangganController::class, 'create']);
Route::post('/pelanggan/simpan', [PelangganController::class, 'store']);
Route::get('/pelanggan/{id}/show', [PelangganController::class, 'show']);
Route::post('/pelanggan/{id}/update', [PelangganController::class, 'update']);
Route::get('/pelanggan/{id}/delete', [PelangganController::class, 'destroy']);

Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/penjualan/tambah', [PenjualanController::class, 'create']);
Route::post('/penjualan/simpan', [PenjualanController::class, 'store']);
Route::get('/penjualan/{id}/show', [PenjualanController::class, 'show']);
Route::post('/penjualan/{id}/update', [PenjualanController::class, 'update']);
Route::get('/penjualan/{id}/delete', [PenjualanController::class, 'destroy']);
Route::get('/penjualan/{id}/struk', [PenjualanController::class, 'struk']);


Route::get('/detail_penjualan', [Detail_penjualanController::class, 'index']);
Route::get('/detail_penjualan/tambah', [Detail_penjualanController::class, 'create']);
Route::post('/detail_penjualan/simpan', [Detail_penjualanController::class, 'store']);
Route::get('/detail_penjualan/{id}/show',[Detail_penjualanController::class, 'show']);
Route::post('/detail_penjualan/{id}/update', [Detail_penjualanController::class, 'update']);
Route::get('/detail_penjualan/{id}/delete', [Detail_penjualanController::class, 'destroy']);