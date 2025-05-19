<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function orders()
{
    $orders = Order::orderBy('created_at', 'DESC')->paginate(10);
    return view('orders',compact('orders')); 
}
    public function index()
    {
        $orderedCount = Order::where('status','ordered')->count();
        $deliveredCount = Order::where('status','delivered')->count();
        $canceledCount = Order::where('status','canceled')->count();
        $orderedTotal = Order::where('status', 'ordered')->sum('total');
        $deliveredTotal = Order::where('status', 'delivered')->sum('total');
        $canceledTotal = Order::where('status', 'canceled')->sum('total');
        $totalAmount =  $orderedTotal + $deliveredTotal + $canceledTotal;
        return view('dashboard', compact('canceledTotal','deliveredTotal','orderedTotal','orderedCount', 'deliveredCount', 'canceledCount','totalAmount'));
    }
}
