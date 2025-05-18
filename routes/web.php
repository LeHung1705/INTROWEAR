<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController; // Import controller-K
use App\Http\Controllers\ShopController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
//Xử lý shop
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
Auth::routes();

//Xử lý đơn hàng
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/order',[OrderController::class,'orders'])->name('orders');