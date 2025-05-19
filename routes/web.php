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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

//Xử lý đơn hàng
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/order',[OrderController::class,'orders'])->name('orders');

//Login

Route::middleware(['auth'])->group(function(){
    Route::get('/account-dashboard',[UserController::class, 'index'])->name('user.index');
});

Route::middleware(['auth', AuthAdmin::class])->group(function() {
    Route::get('/admin', [AdminController::class,'index'])->name('admin.index');
});

// Register
Route::post('/register', [RegisterController::class, 'register'])->name('register');
