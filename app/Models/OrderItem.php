<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
<<<<<<< HEAD
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
=======
    public function product()
    {
        return this->beLongsTo(Product::class);
    }
     public function order()
    {
        return this->beLongsTo(Order::class);
    }
    
>>>>>>> bbbdaf8f1f2f278eecfa3d1633405010e84181c0
}
