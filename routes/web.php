<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataPajak;
use App\Http\Controllers\DetailSPMController;
use App\Http\Controllers\OpdController;
use App\Http\Controllers\UserControlController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PajakguController;
use App\Http\Controllers\SPMController;
use App\Http\Controllers\PajaklsController;
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

route::middleware(['guest'])->group(function(){
    Route::view('/','halaman_depan/index');
    Route::get('/sesi',[AuthController::class,'index'])->name('auth');
    Route::post('/sesi',[AuthController::class,'login']);
    Route::get('/reg',[AuthController::class,'create'])->name('registrasi');
    Route::post('/reg',[AuthController::class,'register']);
    route::get('/verify/{verify_key}',[AuthController::class,'verify']);
});

route::middleware(['auth'])->group(function(){
    route::redirect('/home','/user');
    route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('userAkses:admin');
    route::get('/user',[UserController::class,'index'])->name('user')->middleware('userAkses:user');

    route::get('/datapajak',[DataPajak::class,'index'])->name('datapajak');
    route::get('/datapajaktambah',[DataPajak::class,'tambah']);
    route::get('/datapajakedit/{id_pajak}',[DataPajak::class,'edit']);
    route::post('.datapajakhapus/{id_pajak}',[DataPajak::class,'hapus']);

    route::get('/usercontrol',[UserControlController::class,'index'])->name('usercontrol')->middleware('userAkses:admin');

    route::post('/logout',[AuthController::class,'logout'])->name('logout');

    route::get('/datapajakgu', [PajakguController::class,'index'])->name('datapajakgu');
    
    Route::get('/Opd', [OpdController::class, 'index'])->name('opd')->middleware('userAkses:admin');
    Route::post('/Opd', [OpdController::class, 'store'])->name('opd')->middleware('userAkses:admin');

    Route::get('/Spm', [SPMController::class, 'index'])->name('spm')->middleware('userAkses:admin');
    Route::get('/Sp2dgu', [SPMController::class, 'indexgu'])->name('sp2dgu')->middleware('userAkses:admin');
    Route::get('/pajakls', [pajaklscontroller::class, 'index'])->name('pajakls')->middleware('userAkses:admin');
    // Route::post('/SimpanSp2d', [SPMController::class, 'store'])->name('spm')->middleware('userAkses:admin');
    Route::get('/DetailSpm', [DetailSPMController::class, 'index'])->name('detailspm')->middleware('userAkses:admin');
    
    Route::get('/simpansp2d',[SPMController::class,'simpan_sp2d'])->name('simpansp2d');
    Route::get('/simpansp2dgu',[SPMController::class,'simpan_sp2dgu'])->name('simpansp2dgu');

    Route::get('/tambahopd',[OpdController::class,'store'])->name('tambahopd');

    route::get('/editsp2d/{id_halaman}',[pajaklscontroller::class,'edit']);
    route::get('/updatesp2d',[pajaklscontroller::class,'update']);
});







