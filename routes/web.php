<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TokoController;
use Illuminate\View\View;

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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/informasi', function () {
    return view('informasibarang');
});

Route::get('/compareprice', function () {
    return view('bandingkan-harga');
});

Route::get('/Searchitem', function () {
    return view('Pencarian-barang');
});

Route::get('/listtoko', [TokoController::class,'index']);
Route::get('/listtoko/{id}', [TokoController::class,'show'])->name('show');
Route::get('/listtoko', [TokoController::class,'search'])->name('search');


Route::get('/showbarang', [BarangController::class,'index'])->name('showbarang');
Route::get('/cari', [BarangController::class,'cari'])->name('cari');

//route that need authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::post('/upbarang', [BarangController::class,'store']);
    Route::get('/upbarang', [BarangController::class,'indexpost']);
    Route::get('/upbarang/{id}', [BarangController::class, 'show'])->name('post.show');

Route::get('/etalase-toko', [EtalaseController::class, 'etalase'])->name('etalase');
});
