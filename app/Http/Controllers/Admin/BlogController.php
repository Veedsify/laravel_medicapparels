<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function new_article()
    {
        return view('admin.new_article');
    }
   public function my_article()
   {
       return view('admin.my_article');
   }
}
