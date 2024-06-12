<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('purchase_order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_orders_id');
            $table->foreignId('products_id');
            $table->float('quantity');
            $table->float('price');
            $table->float('subtotal');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('purchase_order_items');
    }
};
