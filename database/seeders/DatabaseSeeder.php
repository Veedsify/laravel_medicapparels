<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Colors;
use App\Models\Sizes;
use App\Models\User;
use App\Models\Comments;
use App\Models\Images;
use App\Models\Products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Colors::insert([
            ['name' => 'red'],
            ['name' => 'green'],
            ['name' => 'blue'],
            ['name' => 'yellow'],
            ['name' => 'black'],
            ['name' => 'white'],
            ['name' => 'gray'],
            ['name' => 'brown'],
            ['name' => 'pink'],
            ['name' => 'gold'],
            ['name' => 'silver'],
            ['name' => 'beige'],
            ['name' => 'navy'],
            ['name' => 'purple'],
            ['name' => 'orange'],
            ['name' => 'khaki'],
            ['name' => 'olive'],
            ['name' => 'teal'],
            ['name' => 'lime'],
            ['name' => 'aqua']
        ]);

        Sizes::insert([['name' => 'S'], ['name' => 'M'], ['name' => 'L'], ['name' => 'XL'], ['name' => 'XXL']]);
    }
}
