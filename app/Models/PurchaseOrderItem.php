<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrderItem extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'purchase_orders_id',
        'products_id',
        'quantity',
        'price',
        'subtotal',
    ];
}
