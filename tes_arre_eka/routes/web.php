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

//->middleware('guest') untuk membuat fungsi masuk dan keluar sekali

// routing halaman login
Route::get('/login', [penggunaController::class, 'index'])->name('login');
Route::post('/login', [penggunaController::class, 'authenticate'])->name('login');

// routing halaman logout
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
})->name('logout');

// Route::post('/logout', function () {
//     auth()->logout();
//     request()->session()->invalidate();
//     request()->session()->regenerateToken();

//     return redirect('/');
// })->name('logout')->middleware('auth');
// Route::view('/home', 'home')->name('home')->middleware('auth');

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



