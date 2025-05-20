<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;

class OrderItemController extends Controller
{
    public function order_details ($order_id)
    {
        $order = Order::find($order_id);
        $orderItems = OrderItem :: where ('order_id', $order_id)->orderBy('id')->paginate(5);
        $transaction = Transaction::where('order_id', $order_id)->first();
        return view('admin/order-details', compact('order', 'orderItems','transaction'));

    }
  public function update_order_status(Request $request)
{
    $order = Order::find($request->order_id);
    
    if (!$order) {
        return back()->with('error', 'Order not found.');
    }

    $order->status = $request->order_status;

    if ($request->order_status == 'delivered') {
        $order->delivered_date = Carbon::now();
    } elseif ($request->order_status == 'canceled') {
        $order->canceled_date = Carbon::now();
    }

    $order->save();

    return redirect()->route('admin.orders')->with('status', 'Status changed successfully!');
}
}

