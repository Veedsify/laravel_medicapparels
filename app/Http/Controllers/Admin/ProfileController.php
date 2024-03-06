<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //  Get All Profile
    public function index()
    {
        return view('admin.admin_profile');
    }
}
