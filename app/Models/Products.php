<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'stock',
        'category_id',
        'category',
        'user_id',
        'uuid',
        'slug',
        'weight',
        'dimensions',
        'featured_video',
        'status',
        'visibility',
        'sku',
    ];

    public function colors()
    {
        return $this->belongsToMany(Colors::class, 'product_colors', 'product_id', 'color_id');
    }

    public function sizes()
    {
        return $this->belongsToMany(Sizes::class, 'product_sizes', 'product_id', 'size_id');
    }

    public function images()
    {
        return $this->belongsToMany(Images::class, 'product_images', 'product_id', 'image_id');
    }
}
