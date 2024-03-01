<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function setting()
    {
        return view('admin.settings');
    }

    public function about()
    {
        return view('admin.settings_about');
    }

    public function contact()
    {
        return view('admin.settings_contact');
    }

    public function shop()
    {
        return view('admin.settings_shop');
    }

    public function category()
    {
        return view('admin.settings_category');
    }
    public function chart()
    {
        return view('admin.settings_chart');
    }
}
