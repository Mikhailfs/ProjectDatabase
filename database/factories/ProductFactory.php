<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->word(),
            'price' => rand(1, 100),
            'category' => fake()->word(),
            'quantity' => rand(1, 10),
        ];
    }
}
