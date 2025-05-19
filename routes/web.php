<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController; // Import controller-K
use App\Http\Controllers\ShopController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
//Route shop
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
Auth::routes();

//Route giỏ hàng
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add_to_cart'])->name('cart.add');
Route::get('/cart/remove/{rowId}', [CartController::class, 'remove'])->name('cart.remove');
Route::put('/cart/increase-quantity/{rowId}', [CartController::class, 'increase_cart_quantity'])->name('cart.qty.increase');
Route::put('/cart/decrease-quantity/{rowId}', [CartController::class, 'decrease_cart_quantity'])->name('cart.qty.decrease');


//Route đơn hàng
Route::get('/order',[OrderController::class,'orders'])->name('orders');