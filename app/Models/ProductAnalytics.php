<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAnalytics extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'url',
        'method',
        'product_id',
        'product_name',
        'product_category',
        'product_views'
    ];
}
