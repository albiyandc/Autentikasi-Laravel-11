<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;



Route::get('/produk', [ProductController::class, 'index'])->middleware('auth')->name('login');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'auth']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
