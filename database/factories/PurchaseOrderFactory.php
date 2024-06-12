<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseOrderFactory extends Factory
{
    public function definition(): array
    {
        if(fake()->boolean())
        {
            $status='processing';
        } elseif(fake()->boolean()){
            $status='sent';
        } else{
            $status='delivered';
        }
        return [
            'purchase_date' => fake()->date(),
            'client_id' => Client::inRandomOrder()->first()->id,
            'status' => $status,
        ];
    }
}