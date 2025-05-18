<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'product_name', 'category_id', 'color', 'size', 'price', 'price_sale','description', 'stock_quantity', 'status_product','supplier_id','image'
    ];
}
