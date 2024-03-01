<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_name',
        'price',
        'quantity',
        'user_id',
        'size',
        'color',
        'image',
        'unique_id'
    ];
}
