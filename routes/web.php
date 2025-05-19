<?php

use App\Http\Controllers\AdminController;

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
Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
Route::get('/admin/manage-product',[AdminController::class,'products'])->name('admin.products');
Route::get('/admin/addproduct',[AdminController::class,'product_add'])->name('admin.product-add');
Route::post('/admin/store',[AdminController::class,'product_store'])->name('admin.store');
Route::get('/admin/{id}/update',[AdminController::class,'update_product'])->name('admin.update');

Route::get('/admin/coupon',[AdminController::class,'coupons'])->name('admin.coupon');
Route::get('/admin/addcoupon',[AdminController::class,'add_coupon'])->name('admin.addcoupon');
Route::post('/admin/coupon_store',[AdminController::class,'coupon_store'])->name('admin.coupon.store');

