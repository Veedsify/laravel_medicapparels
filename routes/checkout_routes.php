<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post("/dhl/shipping_rates", [CheckoutController::class, 'shippingRates']);
