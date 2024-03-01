<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\User;
use App\Models\Colors;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\ProductAnalytics;
use App\Http\Controllers\Controller;

class DashboardContoller extends Controller
{

    public function index()
    {
        $productsAnalytics = ProductAnalytics::all();
        $sumOfProductViews = $productsAnalytics->sum('product_views');
        $products = Products::all();
        $users = User::where('role', 'user')->get();
        $blogs = Blog::all();

        $popularProducts = ProductAnalytics::all()->sortByDesc('product_views');
        $popularProducts = $popularProducts->map(function ($product) {
            $single = Products::where('id', $product->product_id)->first();
            return [
                'product' => $single->toArray(),
                'colors' => $single->colors->toArray(),
                'sizes' => $single->sizes->toArray(),
                'images' => $single->images->toArray(),
                'views' => $product->product_views
            ];
        });

        // dd($popularProducts);


        return view('admin.index', [
            'title' => "Medicapparel Control Dashboard",
            'productsViews' => $sumOfProductViews,
            'products' => $products->count(),
            'users' => $users->count(),
            'blogs' => $blogs->count(),
            'popularProducts' => $popularProducts
        ]);
    }

    public function products()
    {
        $products = Products::all()->sortByDesc('id');
        $allproducts = $products->map(function ($product) {
            return [
                'product' => $product->toArray(),
                'colors' => $product->colors->toArray(),
                'sizes' => $product->sizes->toArray(),
                'images' => $product->images->toArray(),
            ];
        });
        return view('admin.products', [
            'title' => "Medicapparel Products",
            'products' => $allproducts,
        ]);
    }

    public function add_product()
    {
        return view('admin.product_add', [
            'title' => "Medicapparel - Add Product",
            'categories' => Category::all(),
            'colors' => Colors::all()
        ]);
    }
}
