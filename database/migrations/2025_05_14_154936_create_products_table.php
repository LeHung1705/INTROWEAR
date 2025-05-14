<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('category_id');
            $table->string('color');
            $table->string('size');
            $table->decimal('price', 15, 2);
            $table->decimal('price_sale', 15, 2)->nullable();
            $table->string('description');
            $table->integer('stock_quantity');
            $table->enum('status_product',['conhang','hethang','ngungkinhdoanh']);
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->string('image');   
         });
 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
