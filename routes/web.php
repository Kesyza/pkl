<?php

use App\Http\Controllers\MobilController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\SopirController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Hanya untuk role admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return 'halaman admin';
    });

    Route::get('profile', function () {
        return 'halaman profile admin';
    });
});

//Hanya untuk role pengguna
Route::group(['prefix' => 'pengguna', 'middleware' => ['auth', 'role:pengguna']], function () {
    Route::get('/', function () {
        return 'halaman pengguna';
    });

    Route::get('profile', function () {
        return 'halaman profile pengguna';
    });
});

Route::resource('admin/mobil', MobilController::class);
Route::resource('admin/sopir', SopirController::class);
Route::resource('admin/penyewa', PenyewaController::class);
Route::resource('admin/sewa', SewaController::class);
Route::resource('admin/transaksi', TransaksiController::class);
