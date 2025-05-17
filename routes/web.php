<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController; // Import controller-K
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Xử lý đơn hàng
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/order',[OrderController::class,'orders'])->name('orders');