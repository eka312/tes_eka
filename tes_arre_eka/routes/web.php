<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use App\Http\Controllers\TemplateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// routing halaman master
Route::get('/master', [TemplateController::class, 'master']);

// routing halaman beranda
Route::get('/beranda', [TemplateController::class, 'index']);

// routing halaman data_produk
Route::get('/data_produk', [produkController::class, 'index']);

// routing halaman tambah_produk
Route::get('/tambah_produk', [produkController::class, 'create']);
Route::post('/tambah_produk', [produkController::class, 'store']);
// routing halaman hapus data produk
Route::get('/hapus_produk/{id}', [produkController::class, 'destroy']);

// routing halaman edit data produk
Route::get('/ubah_produk/{id}', [produkController::class, 'edit']);
Route::post('/ubah_produk/{id}', [produkController::class, 'update']);



