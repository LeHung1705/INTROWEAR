<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart; //
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function index(){
        $items = Cart::instance('cart')->content();
        return view('cart', compact('items'));
    }

    public function add_to_cart(Request $request)
    {
        Cart::instance('cart')->add(
            $request->id,
            $request->name,
            $request->quantity,
            $request->price
        )->associate('App\Models\Product');
        return redirect()->back();
    }

    public function remove($rowId)
    {
        Cart::instance('cart')->remove($rowId);

        // Chuyển hướng lại trang giỏ hàng với thông báo thành công
        return redirect()->back()->with('success', 'Product removed from cart!');
    }

    public function increase_cart_quantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        return redirect()->back();
    }

    public function decrease_cart_quantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        if ($qty > 0) {
            Cart::instance('cart')->update($rowId, $qty);
        } else {
            Cart::instance('cart')->remove($rowId);
        }
        return redirect()->back();
    }

    public function checkout()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        return view('checkout');
    }

    public function place_an_order( Request $request)
    {
         $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|regex:/^[0-9]{10,11}$/',
        'address' => 'required|string|max:500',
        // Thêm xác thực payment_method nếu cần
    ]);

    $order = new Order();
    $order->user_id = Auth::id() ?? null; 
    $order->name = $validatedData['name'];
    $order->phone = $validatedData['phone'];
    $order->address = $validatedData['address'];
      //$payment_method 
    $order->status = 'ordered';
    $order->total = Session::get('checkout')['total'];//can sua
    $order->save();

    foreach (Cart::instance('cart')->content() as $item) {
    $orderItem = new OrderItem();
    $orderItem->product_id = $item->id;
    $orderItem->order_id = $order->id;
    $orderItem->price = $item->price;
    $orderItem->quantity = $item->qty;
    $orderItem->save();
}
    }
   public function order_confirmation()
    {
        if (Session::has('order_id')) {
            $order = Order::find(Session::get('order_id'));
            if ($order) {
                return view('order_confirmation', compact('order'));
            }
        }
        
    }
}
