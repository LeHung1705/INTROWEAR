<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;



class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
   
    public function products()
    {
        $products=Product::all();
        return view('admin.manage-product',compact('products'));    }
    public function product_add()
    { $products = Product::all();
        return view('admin.product-add', compact('products'));
    }
    public function product_store(Request $request)
{
    $request->validate([
        'product_name'=>'required',
        'category_id'=>'nullable',
        'color'=>'required',
        'size'=>'required',
        'price'=>'required',
        'price_sale'=>'required',
        'description'=>'required',
        'stock_quantity'=>'required',
        'status_product'=>'nullable',
       'supplier_id'=>'nullable',
       'image'=>'required|mimes:png,jpg,jpeg|max:2048'
    ]);

    $product = new Product();
    $product->product_name = $request->product_name;
    $product->category_id = $request->category_id;
    $product->color = $request->color;
    $product->size = $request->size;
    $product->price = $request->price;
    $product->price_sale = $request->price_sale;
    $product->description = $request->description;
    $product->stock_quantity = $request->stock_quantity;
    $product->status_product = $request->status_product ?? 'Còn hàng';
    $product->supplier_id = $request->supplier_id;

  /* if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $this->GenerateProductThumbnailImage($image, $imageName);
        $product->image = $imageName;
    }*/

if ($request->hasFile('image')) {
    $image = $request->file('image');
    $imageName = time() . '_' . $image->getClientOriginalName();
    $image->move(public_path('uploads'), $imageName); // Lưu trực tiếp vào public/uploads
    $product->image = $imageName;
}
    $product->save();
    return redirect()->route('admin.products')->with('status','Thêm sản phẩm thành công!');
 
}

    /*public function GenerateProductThumbnailImage($image, $imageName)
{
    $destinationPath = public_path('uploads/products');

    if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0775, true);
    }

    $img = Image::read($image->path());
    $img->cover(540, 689, 'top');
    $img->resize(540, 689, function ($constraint) {
        $constraint->aspectRatio();
    })->save($destinationPath . '/' . $imageName);
}*/
}