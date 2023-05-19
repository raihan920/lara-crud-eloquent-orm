<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'category_id',
        'unit_type_short_code',
        'quantity_per_unit',
        'unit_price',
        'unit_in_stock',
        'unit_on_order'
    ];
}
