<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;

class OrderItemController extends Controller
{
    public function order_details ($order_id)
    {
        $order = Order::find($order_id);
        $orderItems = OrderItem :: where ('order_id', $order_id)->orderBy('id')->paginate(12);
        $transaction = Transaction::where('order_id', $order_id)->first();
        return view('order-details', compact('order', 'orderItems'));

    }
}
