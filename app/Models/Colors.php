<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function products()
    {
        return $this->belongsToMany(Products::class, 'product_colors', 'color_id', 'product_id');
    }
}
