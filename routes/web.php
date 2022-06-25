<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUser;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\auth\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user/home', function () {
//     return view('user.home');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/admin', [DashboardController::class, 'index'])->name('dashboard-admin');
// Route::post('/register', [RegisterController::class, 'create']);
Route::resource('/sepatu', SepatuController::class);
// Route::resource('/user', DashboardUser::class);
Route::resource('/pelanggan', PelangganController::class);
Route::resource('/transaksi', TransaksiController::class);

Route::controller(DashboardUser::class)->group(function () {
    Route::get('/user/home', 'tampilHome')->name('home-user');
    Route::get('/user/home/{id}', 'detailSepatu');
});

// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');
// Route::resource('sepatu', SepatuController::class);
// Route::get('admin/product', [SepatuController::class, 'halamanProduct'])->name('product.index');
// Route::get('admin/product/add', [SepatuController::class, 'create'])->name('product.create');
// Route::post('admin/product/proses', [SepatuController::class, 'store'])->name('product.store');
// Route::get('admin/product/destroy', [SepatuController::class, 'destroy'])->name('product.destroy');

// Route::get('admin/pelanggan', [PelangganController::class, 'halamanPelanggan'])->name('pelanggan.index');
// Route::get('pelanggan/add', [SepatuController::class, 'create'])->name('pelanggan.create');
// Route::post('pelanggan/proses', [SepatuController::class, 'store'])->name('pelanggan.store');
// Route::get('pelanggan/destroy', [SepatuController::class, 'destroy'])->name('pelanggan.destroy');

// Route::resource('admin/dashboard', DashboardController::class);
// Route::resource('/data', DataController::class);
// Route::get('/dashboard', function() {
//     return view('dashboard.index');
// })->middleware('role');
