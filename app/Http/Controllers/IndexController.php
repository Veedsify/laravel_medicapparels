<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $products = Products::all()->sortByDesc('id');
        $collections = Category::all();

        $productsWithAllAttributes = $products->map(function ($product) {
            return [
                'data' => $product,
                'colors' => $product->colors,
                'sizes' => $product->sizes,
                'images' => $product->images,
            ];
        });

        // dd($productsWithAllAttributes);

        return view("home.index", [
            'categories' => Products::select('category')->distinct()->get(),
            'products' => $productsWithAllAttributes,
            'collections' => $collections
        ]);
    }
}
