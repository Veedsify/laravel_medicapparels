<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sizes;
use App\Models\Colors;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\dd;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageUploader;
use App\Models\Images;
use App\Models\ProductAnalytics;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;

class ProductsController extends Controller
{

    public function product_edit($id)
    {

        $product = Products::find($id);

        if ($product) {

            $data = [
                'product' => $product->toArray(),
                'colors' => $product->colors->toArray(),
                'size' => $product->sizes->toArray(),
                'images' => $product->images->toArray()
            ];


            // dd($data['size']);
            return view("admin.product_edit", [
                'data' => $data,
                'colors' => Colors::all(),
                'sizes' => Sizes::all()
            ]);
        } else {
            abort(404);
        }
    }
    public function delete_product($id)
    {
        if (!auth()->user()) {
            return redirect()->back()->with('error', 'You are not authorized to perform this action');
        }

        if (auth()->user()->role != 'admin') {
            return redirect()->back()->with('error', 'You are not authorized to perform this action');
        }

        $product = Products::find($id);

        $productImages = $product->images;

        foreach ($productImages as $image) {
            $imagePath = public_path($image->image_url);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $image->delete();
        }

        $product->delete();
        ProductAnalytics::where('product_id', $id)->delete();
        return redirect('/admin/products');
    }

    public function addNewProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_price' => 'required|numeric|min:0',
            'product_quantity' => 'required|integer|min:0',
            'product_description' => 'required|string',
            'product_category' => 'required|string',
            'product_weight' => 'nullable|numeric|min:0',
            'product_dimension' => 'nullable|string',
            'product_sku' => 'nullable|string|max:255',
            'product_status' => 'required|string',
            'product_sizes' => 'required|array',
            'product_sizes.*' => 'in:XS,S,M,L,XL,XXL',
            'product_colors' => 'required|array',
            'product_colors.*' => 'string',
            'images' =>  'required|array|min:2',
        ]);

        try {

            $product = Products::create([
                'name' => $request->product_name,
                'price' => $request->product_price,
                'stock' => $request->product_quantity,
                'description' => $request->product_description,
                'category' => $request->product_category,
                'category_id' =>  Category::where('name', $request->product_category)->first()->id,
                'user_id' => auth()->user()->id,
                'uuid' => Str::uuid(),
                'slug' => Str::slug($request->product_name) . '-' . Str::random(5),
                'weight' => $request->product_weight,
                'dimensions' => $request->product_dimension,
                'featured_video' => "",
                'status' => $request->product_status,
                'visibility' => 'visible',
                'sku' => $request->product_sku,
            ]);

            $imageArrayString = $request->images;

            foreach ($imageArrayString as $image) {
                // Generate a unique identifier to avoid overwriting files with similar names
                $uniqueIdentifier = uniqid();

                // Get the file extension using getClientOriginalExtension or guessExtension
                $extension = $image->getClientOriginalExtension() ?: $image->guessExtension();

                $uploadImage = time() . '_' . $uniqueIdentifier . '.' . $extension;

                // Move the uploaded file directly to the destination without creating an unnecessary variable
                $image->move(public_path('uploads/files'), $uploadImage);

                // Use the create method to create the Images model and attach it to the product
                $product->images()->create(['image_url' => '/uploads/files/' . $uploadImage]);
            }


            $sizeIds = Sizes::whereIn('name', $request->product_sizes)->pluck('id');
            $colorIds = Colors::whereIn('name', $request->product_colors)->pluck('id');

            // Attach sizes to the product
            $product->sizes()->attach($sizeIds);
            $product->colors()->attach($colorIds);


            return redirect("/admin/products")->with('success', 'Product added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_price' => 'required|numeric|min:0',
            'product_quantity' => 'required|integer|min:0',
            'product_description' => 'required|string',
            'product_category' => 'required|string',
            'product_weight' => 'nullable|numeric|min:0',
            'product_dimension' => 'nullable|string',
            'product_sku' => 'nullable|string|max:255',
            'product_status' => 'required|string',
            'product_sizes' => 'required|array',
            'product_sizes.*' => 'in:XS,S,M,L,XL,XXL',
            'product_colors' => 'required|array',
            'product_colors.*' => 'string',
            'images' =>  'array',
        ]);

        $imageArrayString = $request->images;

        try {
            $product = Products::find($id);

            $product->name = $request->product_name;
            $product->price = $request->product_price;
            $product->stock = $request->product_quantity;
            $product->description = $request->product_description;
            $product->category = $request->product_category;
            $product->category_id = Category::where('name', $request->product_category)->first()->id;
            $product->user_id = auth()->user()->id;
            // Commented out the following line to keep the original slug
            // $product->slug = Str::slug($request->product_name) . '-' . Str::random(5);
            $product->weight = $request->product_weight;
            $product->dimensions = $request->product_dimension;
            $product->featured_video = "";
            $product->status = $request->product_status;
            $product->visibility = 'visible';
            $product->sku = $request->product_sku;

            $product->save();

            if ($imageArrayString != null && count($imageArrayString) > 0) {
                foreach ($imageArrayString as $imagePath) {
                    // Check if it's a valid file path or not
                    $uniqueid = uniqid();
                    $uploadImage = time() . '_' . $uniqueid  . '.' . $imagePath->guessExtension();
                    $imagePath->move(public_path('uploads/files'), $uploadImage);
                    $thisImage = Images::create([
                        'image_url' => '/uploads/files/' . $uploadImage,
                    ]);
                    $imageid  = $thisImage->id;
                    $product->images()->attach($imageid);
                }
            }

            // Sync sizes and colors
            $sizeIds = Sizes::whereIn('name', $request->product_sizes)->pluck('id');
            $colorIds = Colors::whereIn('name', $request->product_colors)->pluck('id');

            $product->sizes()->sync($sizeIds);
            $product->colors()->sync($colorIds);

            return redirect()->back()->with('success', 'Product updated successfully');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function unlinkImageFromProduct(Request $request)
    {
        try {

            $request->validate([
                'image_id' => 'required|integer',
                'product_id' => 'required|integer'
            ]);

            $image = Images::find($request->image_id);
            $product = Products::find($request->product_id);

            if ($image && $product) {
                $product->images()->detach($image->id);
                $imagePath = public_path($image->image_url);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $image->delete();
                return redirect()->back()->with('success', 'Image deleted successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
