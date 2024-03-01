<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view("home.user");
    }

    public function orders()
    {
        return view("home.user_order");
    }

    public function addresses()
    {
        return view("home.user_edit_address");
    }

    public function details()
    {
        return view("home.account_edit");
    }

    public function wishlist()
    {
        return view("home.account_wishlist");
    }

}
