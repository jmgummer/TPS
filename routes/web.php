<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;


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




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('balance',[AccountController::class,'getBalace'])->name('bal');
Route::get('tranfer',[AccountController::class,'transfer'])->name('tranfer');
Route::get('withdraw',[AccountController::class,'withdraw'])->name('withdraw');
Route::get('profile',[AccountController::class,'profile'])->name('profile');
Route::POST('fundsTransfer',[AccountController::class,'fundsTransfer'])->name('fundsTransfer');
Route::get('confirm/{amount}', [AccountController::class,'confirm'])->name('confirm');
Route::POST('confirm2', [AccountController::class,'confirm2'])->name('confirm2');

