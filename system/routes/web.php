<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('toko.index');
});

Route::get('/index', [HomeController::class, 'showhome']);

Route::get('/about', [HomeController::class, 'showabout']);

Route::get('/vegetables', [HomeController::class, 'showproduct']);

Route::get('/contact', [HomeController::class, 'showcontact']);

Route::get('/login', [AuthController::class, 'showlogin'])->name('login');

Route::post('/login', [AuthController::class, 'loginProcess']);

Route::get('template', function () {
    return view('template.base');
});

Route::get('/dashboard', [HomeController::class, 'showdashboard']);
Route::get('produk/filter', [ProdukController::class, 'filter']);
Route::get('admin/kategori', [HomeController::class, 'showkategori']);


Route::get('/registrasi', [AuthController::class, 'showregistrasi']);

Route::get('produk/{produk}/{hargaMin?}/{hargaMax?})', [HomeController::class, 'produk']);
Route::post('admin/produk/filter', [ProdukController::class, 'filter']);

Route::get('admin/produk', [ProdukController::class, 'index']);
Route::get('admin/produk/create', [ProdukController::class, 'create']);
Route::post('admin/produk', [ProdukController::class, 'store']);
Route::get('admin/produk/{produk}', [ProdukController::class, 'show']);
Route::get('admin/produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('admin/produk/{produk}', [ProdukController::class, 'update']);
Route::delete('admin/produk/{produk}', [ProdukController::class, 'destroy']);

Route::resource('admin/user', UserController::class);

Route::get('/registrasi', [AuthController::class, 'showregistrasi']);



Route::get('/kategori', function () {
    return view('backview.kategori');
});

Route::get('/template', function () {
    return view('template.base');
});