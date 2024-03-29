<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'user_id',
        'total_amount',
        'status'
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class);
    }
}
