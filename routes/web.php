<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
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



Route::get('/input-barang',function(){
    return view('barang.input-barang');
});

Route::get('/input-pesanan', function(){
    return view('pemesanan.input-pesanan');
});

Route::get('/data-pesanan', function(){
    return view('pemesanan.data-pesanan');
});

Route::get('/invoice', function(){
    return view('pemesanan.invoice');
});

Route::get('/laporan', function(){
    return view('laporan');
});

// LOGIN START
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login-proses',[LoginController::class, 'authenticate']);
// LOGIN END

// REGISTER START
Route::get('/register', [LoginController::class,'register']);
Route::post('/register-proses',[LoginController::class,'store']);
// REGISTER END

// BARANG START
Route::get('/', [BarangController::class,'index']);
Route::get('/input-barang',[BarangController::class,'input']);
Route::post('/',[BarangController::class,'store']);
Route::get('/barang/{barang_id}/edit',[BarangController::class,'edit']);
Route::put('/barang/{barang_id}', [BarangController::class,'update']);
Route::delete('/barang/{barang_id}', [BarangController::class,'delete']);