<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengajuanController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/data-pengajuan', [PengajuanController::class, 'index'])->name('data-pengajuan');
Route::get('/form-pengajuan', [PengajuanController::class, 'create'])->name('form-pengajuan');
Route::post('/simpan-pengajuan', [PengajuanController::class, 'store'])->name('simpan-pengajuan');
Route::get('/edit-pengajuan/{id}', [PengajuanController::class, 'edit'])->name('edit-pengajuan');
Route::post('/update-pengajuan/{id}', [HomeController::class, 'update'])->name('update-pengajuan');
