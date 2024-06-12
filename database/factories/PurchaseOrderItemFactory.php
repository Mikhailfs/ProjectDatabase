<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\PurchaseOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseOrderItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'purchase_orders_id' => PurchaseOrder::inRandomOrder()->first()->id,
            'products_id' => Product::inRandomOrder()->first()->id,
            'quantity' => rand(1, 5),
            'price' => rand(1, 5),
            'subtotal' => rand(1, 500),    
        ];
    }
}
