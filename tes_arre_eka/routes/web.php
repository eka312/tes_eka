<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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



//->middleware('guest') untuk membuat fungsi masuk dan keluar sekali

//routing halaman register
// Route::get('/register', [RegisterController::class, 'create'])->name('register.form');
// Route::post('/register', [RegisterController::class, 'store'])->name('register.submit');

// routing halaman login
// Route::get('/login', [LoginController::class, 'index'])->name('login.form');
// Route::post('/login', [LoginController::class, 'authenticate'])->name('login.submit');

// routing halaman logout
// Route::post('/logout', function () {
//     auth()->logout();
//     request()->session()->invalidate();
//     request()->session()->regenerateToken();

//     return redirect('/login');
// })->name('logout');


// routing halaman templating_login master templating untuk login,register
// Route::get('/templating_login', [TemplateController::class, 'templating_login']);

// routing halaman master templating untuk beranda,data_produk,tambah,ubah
// Route::get('/master', [TemplateController::class, 'master']);

// routing halaman konten beranda
// Route::get('/', [TemplateController::class, 'index'])->middleware('auth');

// routing halaman konten  data_produk
// Route::get('/data_produk', [produkController::class, 'index']);

// routing halaman konten  tambah_produk
// Route::get('/tambah_produk', [produkController::class, 'create']);
// Route::post('/tambah_produk', [produkController::class, 'store']);
// routing halaman hapus data produk
// Route::get('/hapus_produk/{id}', [produkController::class, 'destroy']);

// routing halaman konten  edit data produk
// Route::get('/ubah_produk/{id}', [produkController::class, 'edit']);
// Route::post('/ubah_produk/{id}', [produkController::class, 'update']);



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
    return redirect('/login');
})->name('logout')->middleware('auth');


// Routing halaman templating_login (Master Template untuk login/register)
Route::get('/templating_login', [TemplateController::class, 'templating_login']);

// Routing halaman master template
Route::get('/master', [TemplateController::class, 'master']);

// Routing halaman beranda (Hanya bisa diakses jika login)
Route::get('/', [TemplateController::class, 'index']);

// Routing halaman data produk (Harus login)
Route::get('/data_produk', [ProdukController::class, 'index']);

// Routing tambah produk (Harus login)
Route::get('/tambah_produk', [ProdukController::class, 'create']);
Route::post('/tambah_produk', [ProdukController::class, 'store']);

// Routing hapus produk (Harus login)
Route::get('/hapus_produk/{id}', [ProdukController::class, 'destroy']);

// Routing ubah produk (Harus login)
Route::get('/ubah_produk/{id}', [ProdukController::class, 'edit']);
Route::post('/ubah_produk/{id}', [ProdukController::class, 'update']);
