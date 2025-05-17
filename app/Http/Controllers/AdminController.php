<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;



class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
   
    public function products()
    {
        $products=Product::orderBy('created_at','DESC')->paginate(10);
        return view('admin.products',compact('products'));    }
    public function product_add()
    {
        return view('admin.product-add', compact('products'));
    }
    public function product_store(Request $request)
    {
        $request->validate([

            'product_name'=>'required',
            'category_id'=>'required',
            'color'=>'required',
            'size'=>'required',
            'price'=>'required',
            'price_sale'=>'required',
            'description'=>'required',
            'stock_quantity'=>'required',
            'status_product'=>'required',
            'supplier_id'=>'required',
             'image'=>'required|mimes:png,jpg,jpeg|max:2048'

       ] );

      

$product = new Product();

$product->name             = $request->name;
$product->short_description = $request->short_description;
$product->description      = $request->description;
$product->regular_price    = $request->regular_price;
$product->sale_price       = $request->sale_price;
$product->SKU              = $request->SKU;
$product->stock_status     = $request->stock_status;
$product->featured         = $request->featured;
$product->quantity         = $request->quantity;
$product->category_id      = $request->category_id;
$product->brand_id         = $request->brand_id;

// Lấy timestamp hiện tại (UNIX time)
$current_timestamp = Carbon::now()->timestamp;
if($request->hasFile('image'))
{
    $image=$request->file('image');
    $imageName=$current_timestamp.".".$image->extension();
    $this->GenerateProductThumbnailImage($image, $imageName);
    $product->image=$imageName;

}
$gallery_art=array();
$gallary_image="";
$counter=1;
$product->save();
return redirect()->route('admin.products')->with('status','Thêm sản phẩm thành công!');
    }

    public function GenerateProductThumbnailImage($image,$imageName)
    {
        $destionationPath=public_path('uploads/products');
       

        $img= Image::read($image->path());
        $img->cover(540,689,"top");
        $img->resize(540,689,function($constraint)
        {
            $constraint->aspectRatio();
        })->save($destionationPath.'/'.$imageName);
    }
}
