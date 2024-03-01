<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImageUploader extends Controller
{
    public function upload(Request $request)
    {
        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Delay execution for 2 seconds
            sleep(1);

            $file->move(public_path('uploads/files'), $filename);

            $image = Images::create([
                'image_url' => '/uploads/files/' . $filename,
            ]);

            return response()->json(['id' => $image->id]);
        }
        return response()->status(500);
    }
}
