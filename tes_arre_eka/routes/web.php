<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\suplayerController;
use App\Http\Controllers\laptopController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\TransaksiController;


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



// Routing halaman register
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.submit');

// Routing halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.submit');

// Routing halaman logout
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout')->middleware('auth');


 
Route::controller(TemplateController::class)->group(function () {
    // Routing halaman templating_login (Master Template untuk login/register)
    Route::get('/templating_login', 'templating_login');
    // Routing halaman master template
    Route::get('/master', 'master');
    // Routing halaman beranda
    Route::get('/', 'index');
});


Route::controller(ProdukController::class)->group(function () {
    // Routing halaman data produk
    Route::get('/data_produk', 'index');

    // Routing tambah produk
    Route::get('/tambah_produk', 'create');
    Route::post('/tambah_produk', 'store');

    // Routing ubah produk
    Route::get('/ubah_produk/{id}', 'edit');
    Route::post('/ubah_produk/{id}', 'update');

    // Routing hapus produk
    Route::get('/hapus_produk/{id}', 'destroy');
});



Route::controller(suplayerController::class)->group(function () {
    // Routing halaman data suplayer
    Route::get('/data_suplayer', 'index');

    // Routing tambah suplayer
    Route::get('/tambah_suplayer', 'create');
    Route::post('/tambah_suplayer', 'store');

    // Routing ubah suplayer
    Route::get('/ubah_suplayer/{id}', 'edit');
    Route::post('/ubah_suplayer/{id}', 'update');

    // Routing hapus suplayer
    Route::get('/hapus_suplayer/{id}', 'destroy');
});


Route::controller(laptopController::class)->group(function () {
    // Routing halaman data laptop
    Route::get('/data_laptop', 'index');

    // Routing tambah laptop
    Route::get('/tambah_laptop', 'create');
    Route::post('/tambah_laptop', 'store');

    // Routing ubah laptop
    Route::get('/ubah_laptop/{id}', 'edit');
    Route::post('/ubah_laptop/{id}', 'update');

    // Routing hapus laptop
    Route::get('/hapus_laptop/{id}', 'destroy');
});


Route::controller(PembeliController::class)->group(function () {
    // Routing halaman data pembeli
    Route::get('/data_pembeli', 'index');

    // Routing tambah pembeli
    Route::get('/tambah_pembeli', 'create');
    Route::post('/tambah_pembeli', 'store');

    // Routing ubah pembeli
    Route::get('/ubah_pembeli/{id}', 'edit');
    Route::post('/ubah_pembeli/{id}', 'update');

    // Routing hapus pembeli
    Route::get('/hapus_pembeli/{id}', 'destroy');
});


Route::controller(TransaksiController::class)->group(function () {
    // Routing halaman data transaksi
    Route::get('/data_transaksi', 'index');

    // Routing tambah transaksi
    Route::get('/tambah_transaksi', 'create');
    Route::post('/tambah_transaksi', 'store');

    // Routing ubah transaksi
    Route::get('/ubah_transaksi/{id}', 'edit');
    Route::post('/ubah_transaksi/{id}', 'update');

    // Routing hapus transaksi
    Route::get('/hapus_transaksi/{id}', 'destroy');
});
