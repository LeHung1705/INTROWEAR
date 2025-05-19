<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AuthAdmin;
use App\Http\Controllers\OrderController; // Import controller-K
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\OrderItemController;// Import controller-K

use App\Http\Controllers\ShopController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
//Route shop
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
Auth::routes();




//Login

Route::middleware(['auth'])->group(function(){
    Route::get('/account-dashboard',[UserController::class, 'index'])->name('user.index');
});

Route::middleware(['auth', AuthAdmin::class])->group(function() {
    Route::get('/admin', [AdminController::class,'index'])->name('admin.index');
});

// Register
Route::post('/register', [RegisterController::class, 'register'])->name('register');

//Route giỏ hàng
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add_to_cart'])->name('cart.add');
Route::get('/cart/remove/{rowId}', [CartController::class, 'remove'])->name('cart.remove');
Route::put('/cart/increase-quantity/{rowId}', [CartController::class, 'increase_cart_quantity'])->name('cart.qty.increase');
Route::put('/cart/decrease-quantity/{rowId}', [CartController::class, 'decrease_cart_quantity'])->name('cart.qty.decrease');


//Xử lý đơn hàng
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/order-confirmation', [CartController::class, 'order_confirmation'])->name('cart.order.confirmation');
Route::get('/order',[OrderController::class,'orders'])->name('orders');
Route::get('/order/{order_id}/details' ,[OrderItemController::class,'order_details'])->name('order.details');


