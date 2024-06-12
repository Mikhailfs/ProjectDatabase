<?php

namespace Database\Seeders;

use App\Models\PurchaseOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurchaseOrderSeeder extends Seeder
{

    public function run(): void
    {
        PurchaseOrder::factory()
        ->count(10)
        ->create();
    }
}
