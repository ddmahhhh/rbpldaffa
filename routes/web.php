<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\JointableController;
use App\Http\Controllers\EtalaseController;
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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/dashboard',[BarangController::class, 'beranda']
)->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/informasi', function () {
    return view('informasibarang');
});

Route::get('/compareprice', function () {
    return view('bandingkan-harga');
});

Route::get('/Searchitem', function () {
    return view('Pencarian-barang');
});

Route::get('/listtoko', [TokoController::class,'index'])->name('toko');
Route::get('/listtoko/{id}', [JointableController::class,'indextoko'])->name('show.toko');
Route::get('/listtoko', [TokoController::class,'search'])->name('search');


Route::get('/showbarang', [BarangController::class,'index'])->name('show');
Route::get('/cari', [BarangController::class,'cari'])->name('cari');
Route::get('/compareitem', [BarangController::class,'compare'])->name('banding');
Route::get('/banding', [BarangController::class,'searchitem'])->name('banding');


//route that need authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::post('/upbarang', [BarangController::class,'store']);
    Route::get('/upbarang', [BarangController::class,'indexpost'])->name('post.show');
    Route::get('/showbarang/{id}', [JointableController::class, 'indexinfo'])->name('showbarang');

Route::get('/etalase-toko', [EtalaseController::class, 'etalase'])->name('etalase');
});

Route::get('/halaman-barang', [EtalaseController::class, 'showBarang'])->name('showBarang');
Route::post('/tambah-barang', [BarangController::class, 'tambahBarang']);

Route::get('/update-barang/{id}', [BarangController::class, 'viewBarang']);
Route::post('/updated-barang/{id}', [BarangController::class, 'updateBarang']);
Route::get('/delete-barang/{id}', [EtalaseController::class, 'deleteBarang'])->name('delete');

