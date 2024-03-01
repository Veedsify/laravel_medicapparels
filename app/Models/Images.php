<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_url',
        'product_id',
    ];

    public function products()
    {
        return $this->belongsToMany(Products::class, 'product_images', 'image_id', 'product_id');
    }
}
