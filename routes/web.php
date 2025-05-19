<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController; // Import controller-K
use App\Http\Controllers\OrderItemController;// Import controller-K
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Xử lý đơn hàng
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/order-confirmation', [CartController::class, 'order_confirmation'])->name('cart.order.confirmation');
Route::get('/order',[OrderController::class,'orders'])->name('orders');
Route::get('/order/{order_id}/details' ,[OrderItemController::class,'order_details'])->name('order.details');
