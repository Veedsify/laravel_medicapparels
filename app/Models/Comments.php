<?php

namespace App\Models;

use Faker\Core\Uuid;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'comment',
        'email',
        'image',
        'comment_id',
        'article_id',
        'user_id',
        'blog_id',
        'status',
    ];

    public static function createNewComment($comment_data, $blog_id)
    {
        self::create([
            'name' => $comment_data['name'],
            'comment' => $comment_data['comment'],
            'email' => $comment_data['email'],
            'image' => 'https://images.pexels.com/photos/2690323/pexels-photo-2690323.jpeg?auto=compress&cs=tinysrgb&w=600',
            'comment_id' => Str::random(10),
            'user_id' => Str::uuid(),
            'article_id' => $blog_id,
            'status' => 'pending',
        ]);

        return true;
    }
}
