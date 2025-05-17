<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders()
{
    $orders = Order::orderBy('created_at', 'DESC')->paginate(12);
    return view('orders',compact('orders')); //có thể cần sửa
}
}
