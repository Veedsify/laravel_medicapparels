<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCartController extends Controller
{
    //

    public function updateCart(Request $request)
    {
        if (!auth()->check()) {
            return response()->status(401);
        }

        $user = auth()->user();
        
    }
}
