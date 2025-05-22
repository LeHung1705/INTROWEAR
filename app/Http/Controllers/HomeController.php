<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function aboutus()
    {
        return view('about_us');
    }
    
    public function search(Request $request)
        {
            $query = $request->input('query');
            $products = Product::where('product_name', 'like', "%{$query}%")
                ->take(8)
                ->get();
            return response()->json($products); // Sửa $results thành $products
        }

}

