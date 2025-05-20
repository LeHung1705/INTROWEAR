<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function orders()
{
    $orders = Order::orderBy('created_at', 'DESC')->paginate(10);
    return view('admin/orders',compact('orders')); 
}
}
