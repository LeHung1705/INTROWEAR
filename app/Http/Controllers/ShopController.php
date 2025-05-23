<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class ShopController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'desc')->paginate(6);
        return view('shop', compact('products'));

    }
    public function product_details($id)
    {
        $product = Product::where('id', $id)->first();
$rproducts = Product::where('category_id', $product->category_id)
    ->where('id', '!=', $product->id)
    ->take(4)
    ->get();
     $viewed = session()->get('viewed_products', []);

    if (!in_array($id, $viewed)) {
        $viewed[] = $id;

        // Giới hạn danh sách đã xem tối đa 20 sản phẩm
        if (count($viewed) > 20) {
            array_shift($viewed); // bỏ sản phẩm cũ nhất
        }

        session(['viewed_products' => $viewed]);
    }
    $viewedProducts = Product::whereIn('id', array_reverse($viewed))
        ->where('id', '!=', $product->id)
        ->take(4)
        ->get();
            return view('details', compact('product','rproducts', 'viewedProducts'));

    }

}
