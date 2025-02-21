<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\penggunaController;
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

// routing halaman konten login,
Route::get('/login', [penggunaController::class, 'index']);
Route::post('/login', [penggunaController::class, 'login']);

// routing halaman konten  register
Route::get('/register', [penggunaController::class, 'register']);

// routing halaman konten  password
Route::get('/password', [penggunaController::class, 'password']);

// routing halaman templating bg_login, register, password
Route::get('/bg_login', [TemplateController::class, 'bg_login']);

// routing halaman master templating untuk beranda,data_produk,tambah,ubah
Route::get('/master', [TemplateController::class, 'master']);

// routing halaman konten beranda
Route::get('/beranda', [TemplateController::class, 'index']);

// routing halaman konten  data_produk
Route::get('/data_produk', [produkController::class, 'index']);

// routing halaman konten  tambah_produk
Route::get('/tambah_produk', [produkController::class, 'create']);
Route::post('/tambah_produk', [produkController::class, 'store']);
// routing halaman hapus data produk
Route::get('/hapus_produk/{id}', [produkController::class, 'destroy']);

// routing halaman konten  edit data produk
Route::get('/ubah_produk/{id}', [produkController::class, 'edit']);
Route::post('/ubah_produk/{id}', [produkController::class, 'update']);

// Route::controller(produkController::class)->prefix('produk_crud')->group(function(){
//     Route::get('','master');->name('produk_crud')
// });

