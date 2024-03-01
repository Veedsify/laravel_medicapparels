<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function category()
    {
        return view('admin.categories', [
            'categories' => Category::all()
        ]);
    }

    public function category_create()
    {

        return view('admin.category_create');
    }

    public function  category_add(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'category_image' => 'required',
            'category_description' => 'required',
        ]);

        $image = $request->file('category_image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/category'), $image_name);

        $category = Category::create([
            'name' => $request->category_name,
            'slug' => Str::slug($request->category_name),
            'image_url' => $image_name,
            'description' => $request->category_description,
        ]);

        if ($category) {
            return redirect()->route('admin.categories')->with('success', 'Category Added Successfully');
        }

        return back()->with('error', 'Error in adding Category');
    }
}
