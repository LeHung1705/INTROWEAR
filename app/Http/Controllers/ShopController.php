<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class ShopController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'desc')->paginate(5);
        return view('shop', compact('products'));

    }
    public function product_details($id)
    {
        $product = Product::where('id', $id)->first();
$rproducts = Product::where('category_id', $product->category_id)
    ->where('id', '!=', $product->id)
    ->take(4)
    ->get();
            return view('details', compact('product','rproducts'));

    }

}
