<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function orders_processing()
    {
        return view('admin.processing_orders');
    }
    public function orders_pending()
    {
        return view('admin.pending_orders');
    }
    public function orders_shipped()
    {
        return view('admin.shipped_orders');
    }
    public function orders_delivered()
    {
        return view('admin.delivered_orders');
    }
}
