<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Colors;
use App\Models\ProductAnalytics;
use App\Models\Products;
use App\Models\Sizes;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $products = Products::where([
            ['visibility', 'visible']
        ])->orderBy('id', 'desc');

        // Filter by category
        $category = $request->input('category');
        if ($category !== null) {
            $products->where([
                ['category', $category],
                ['visibility', 'visible']
            ]);
        }

        // Filter by color
        $color = $request->input('color');
        if ($color !== null) {
            $products->whereHas('colors', function ($query) use ($color) {
                $query->where('name', $color);
            });
        }

        // Filter by size
        $size = $request->input('size');
        if ($size !== null) {
            $products->whereHas('sizes', function ($query) use ($size) {
                $query->where('name', $size);
            });
        }

        $products = $products->paginate(16);

        $productsWithAllAttributes = $products->map(function ($product) {
            return [
                'product' => $product->toArray(),
                'colors' => $product->colors->toArray(),
                'sizes' => $product->sizes->toArray(),
                'images' => $product->images->toArray(),
            ];
        })->toArray();


        return view("home.shop", [
            'products' => $productsWithAllAttributes,
            'query' => $request->query(),
            'colors' => Colors::all(),
            'categories' => Category::all(),
            'sizes' => Sizes::all(),
        ]);
    }

    public function product(Request $request, $slug)
    {
        $products = Products::where([
            ['slug', $slug],
            ['visibility', 'visible']
        ])->paginate(16);
        if (count($products) > 0) {
            $productsWithAllAttributes = $products->map(function ($product) {
                return [
                    'product' => $product->toArray(),
                    'colors' => $product->colors->toArray(),
                    'sizes' => $product->sizes->toArray(),
                    'images' => $product->images->toArray(),
                ];
            });
            // Update Product View
            $checkProductAnalytics = ProductAnalytics::where('product_id', $productsWithAllAttributes[0]['product']['id'])->first();

            if ($checkProductAnalytics) {
                $checkProductAnalytics->update([
                    'product_views' => $checkProductAnalytics->product_views + 1
                ]);
            } else {
                ProductAnalytics::create([
                    'product_id' => $productsWithAllAttributes[0]['product']['id'],
                    'product_name' => $productsWithAllAttributes[0]['product']['name'],
                    'product_category' => $productsWithAllAttributes[0]['product']['category'],
                    'product_views' => 1,
                    'url' => request()->fullUrl(),
                    'method' => request()->method(),
                    'ip' => request()->ip(),
                ]);
            }

            // Related Products
            $relatedProducts = Products::where([
                ['category', $productsWithAllAttributes[0]['product']['category']],
                ['id', '!=', $productsWithAllAttributes[0]['product']['id']],
                ['visibility', 'visible']
            ])->limit(4)->get();

            $relatedProductsWithAllAttributes = $relatedProducts->map(function ($product) {
                return [
                    'product' => $product->toArray(),
                    'colors' => $product->colors->toArray(),
                    'sizes' => $product->sizes->toArray(),
                    'images' => $product->images->toArray(),
                ];
            });


            return view("home.product", [
                'products' => $productsWithAllAttributes,
                'query' => $request->query(),
                'relatedProducts' => $relatedProductsWithAllAttributes,
            ]);
        } else {
            abort(404);
        }
    }

    public function cart()
    {
        return view("home.cart");
    }

    public function checkout()
    {
        return view("home.checkout");
    }

    public function confirm()
    {
        return view("home.confirm");
    }

    public function track()
    {
        return view("home.track_order");
    }

    public function collection(Request $request, $collection_id)
    {
        $products = Products::where([
            ['category', $collection_id],
            ['visibility', 'visible']
        ])->paginate(16);

        $productsWithAllAttributes = $products->map(function ($product) {
            return [
                'product' => $product->toArray(),
                'colors' => $product->colors->toArray(),
                'sizes' => $product->sizes->toArray(),
                'images' => $product->images->toArray(),
            ];
        })->toArray();

        return view("home.collection", [
            'category' => Category::where('slug', $collection_id)->first(),
            'products' => $productsWithAllAttributes,
            'paginate' => $products,
            'collection' => $collection_id,
        ]);
    }

    public function all()
    {
        $products = Products::orderBy('id', 'desc')->get();

        if ($products) {
            $productsWithAllAttributes = $products->map(function ($product) {
                return [
                    'product' => $product->toArray(),
                    'colors' => $product->colors->toArray(),
                    'sizes' => $product->sizes->toArray(),
                    'images' => $product->images->toArray(),
                ];
            })->toArray();

            return response()->json([
                'products' => $productsWithAllAttributes,
            ]);
        } else {
            return response()->json([
                'products' => [],
            ]);
        }
    }
}
