<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemesananController;

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
// LOGIN START
Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login-proses',[LoginController::class, 'authenticate']);
Route::get('/logout',[LoginController::class,'logout']);
// LOGIN END

// REGISTER START
Route::get('/register', [LoginController::class,'register']);
Route::post('/register-proses',[LoginController::class,'store']);
// REGISTER END

Route::group(['middleware' => 'prevent-back-history'],function(){
// BARANG START

Route::get('/', [BarangController::class,'index'])->middleware('auth');
Route::get('/input-barang',[BarangController::class,'input'])->middleware('auth');
Route::post('/',[BarangController::class,'store'])->middleware('auth');
Route::get('/barang/{barang_id}/edit',[BarangController::class,'edit'])->middleware('auth');
Route::put('/barang/{barang_id}', [BarangController::class,'update'])->middleware('auth');
Route::delete('/barang/{barang_id}', [BarangController::class,'delete'])->middleware('auth');
// BARANG END

// PESANAN START
Route::get('/data-pesanan',[PemesananController::class,'index'])->middleware('auth');
Route::get('/input-pesanan', [PemesananController::class,'input'])->middleware('auth');
Route::post('/data-pesanan',[PemesananController::class,'store'])->middleware('auth');
Route::get('/pesanan/{pesanan_id}/edit', [PemesananController::class,'edit'])->middleware('auth');
Route::put('/pesanan/{pesanan_id}',[PemesananController::class,'update'])->middleware('auth');
Route::delete('/pesanan/{pesanan_id}',[PemesananController::class,'delete'])->middleware('auth');
Route::get('/invoice/{pesanan_id}',[PemesananController::class,'invoice'])->middleware('auth');
// PESANAN END

// LAPORAN START
Route::get('/laporan-barang-masuk',function(){
    $barangMasuk = DB::table('barang')->get();
    return view('laporan.barang-masuk',compact('barangMasuk'));
});

Route::get('/laporan-barang-keluar',function(){
    $barangKeluar = DB::table('pesanan')->get();
    return view('laporan.barang-keluar',compact('barangKeluar'));
});

Route::get('/laporan-penjualan',function(){
    $penjualan = DB::table('pesanan')->get();
    return view('laporan.penjualan', compact('penjualan'));
});
// LAPORAN END
});