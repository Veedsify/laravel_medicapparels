<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Get All Users
    public function index()
    {
        return view('admin.admin_user');
    }
}
