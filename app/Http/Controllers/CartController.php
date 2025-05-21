<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Coupon;


use Illuminate\Http\Request;
use Surfsidemedia\Shoppingcart\Facades\Cart; 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderItem;
use App\Models\Transaction;
use Carbon\Carbon;

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

    public function place_an_order(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'name' => 'required|max:100',
            'phone' => 'required|numeric|digits:10',
            'address' => 'required|max:255',
        ]);

        // Lấy thông tin người dùng
        $user_id = Auth::user()->id;

        // Thiết lập thông tin thanh toán
        $this->setAmountForCheckout();

        // Tạo đơn hàng
        $order = new Order();
        $order->user_id = $user_id;
        $order->total = Session::get('checkout')['total']+20000;
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->save();

        // Lưu các sản phẩm trong đơn hàng
        foreach (Cart::instance('cart')->content() as $item) {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }

        // Tạo giao dịch thanh toán
        $transaction = new Transaction();
        $transaction->user_id = $user_id;
        $transaction->order_id = $order->id;
        $transaction->mode = $request->mode ?? 'COD'; // Mặc định là thanh toán khi nhận hàng
        $transaction->save();

        // Dọn dẹp giỏ hàng và session
        Cart::instance('cart')->destroy();
        Session::forget('checkout');
        Session::forget('coupon');
        Session::forget('discounts');

        // Chuyển hướng đến trang xác nhận đơn hàng
        return view('order_confirmation', compact('order'));
    }

    public function setAmountForCheckout()
    { 
        if(!Cart::instance('cart')->count() > 0)
        {
            Session::forget('checkout');
            return;
        }    
        if(Session::has('coupon'))
        {
            Session::put('checkout',[
                'discount' => Session::get('discounts')['discount'],
                'subtotal' =>  Session::get('discounts')['subtotal'],
                'tax' =>  Session::get('discounts')['tax'],
                'total' =>  Session::get('discounts')['total']
            ]);
        }
        else
        {
            Session::put('checkout',[
                'discount' => 0,
                'subtotal' => Cart::instance('cart')->subtotal(),
                'tax' => Cart::instance('cart')->tax(),
                'total' => Cart::instance('cart')->total() 
            ]);
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
    public function apply_coupon_code(Request $request)
    {
        $coupon_code=$request->coupon_code;
        if(isset($coupon_code)){
            $coupon = Coupon::where('code',$coupon_code)->where('end_day','>=',Carbon::today())->where ('cart_value','<=',Cart::instance('cart')->subtotal())->first();
            if (!$coupon) {
                return redirect()->back()->with('error','Invalid coupon code!');

            } 
            else 
            {
                Session::put('coupon',[
                    'coupon_code'=>$coupon->coupon_code,
                    'discount_percentage'=>$coupon->discount_percentage

                ]
                );
                $this->calculatorDiscount();
                return redirect()->back()->with('success','Coupon has been applied');
                
            }
        }
        else return  redirect()->back()->with('error','Invalid coupon code!');
    }
public function calculatorDiscount()
{
  $discount=0;
  if(Session::has('coupon'))
  {
    $discount = (Cart::instance('cart')->subtotal()*Session::get('coupon')['discount_percentage'])/100;

  }
  $subtotalAfterDiscount = Cart::instance('cart')->subtotal()-$discount;
  $taxAfterDiscount = ($subtotalAfterDiscount*config('cart.tax'))/100;

  $total=$subtotalAfterDiscount+$taxAfterDiscount;
 Session::put('discounts', [

    'discount' => number_format(floatval($discount), 0, ',', '.') . '₫',
    'subtotal' => number_format(floatval($subtotalAfterDiscount), 0, ',', '.') . '₫',
    'tax' => number_format(floatval($taxAfterDiscount), 0, ',', '.') . '₫',
    'total' => number_format(floatval($total), 0, ',', '.') . '₫'


]);

}
}