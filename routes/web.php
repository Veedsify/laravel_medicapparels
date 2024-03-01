<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\authController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Index Routes
Route::get('/', [IndexController::class, 'index']);

// Shop & Collections
Route::prefix("shop")->group(function () {
    Route::get('/', [ShopController::class, 'index']);
    Route::get('/collection/{collection_id}', [ShopController::class, 'collection'])->where('collection_id', '[\w-]+');
});

// Blog Routes
Route::prefix("blog")->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/{id}', [BlogController::class, 'pagination'])->where('id', '[0-9]+');
    Route::get('/{slug}', [BlogController::class, 'article'])->where('slug', '[\w-]+');
    Route::post('/commment/{blog_id}/create', [BlogController::class, 'newComment']);
});

// About Routes
Route::get('/about', [AboutController::class, 'index']);

// Contact Routes
Route::get('/contact', [ContactController::class, 'index']);

// Products Routes
Route::get('/product/{slug}', [ShopController::class, 'product'])->where('slug', '[\w-]+');

// Auth Routes
Route::prefix("auth")->group(function () {
    Route::get('/', [authController::class, 'index'])->name('login')->middleware('guest');
    Route::get('/reset', [authController::class, 'reset'])->middleware('guest');
    Route::post('/register', [authController::class, 'registerUser'])->middleware('guest');
    Route::post('/login', [authController::class, 'loginUser']);
    Route::post('/logout', [authController::class, 'logOut']);
});

// Cart Routes
Route::get("/cart", [ShopController::class, 'cart']);

// Checkout Routes
Route::get("/checkout", [ShopController::class, 'checkout']);


// Confirm Routes
Route::prefix("order")->group(function () {
    Route::get('/confirm', [ShopController::class, 'confirm']);
    Route::get('/track', [ShopController::class, 'track']);
});

// Faq Routes
Route::get("/faq", function () {
    return view("home.faq");
});

// Terms Routes
Route::get("/terms", function () {
    return view("home.terms");
});

// User Routes
Route::prefix("user")->group(function () {
    Route::get('/', [UserController::class, 'index'])->middleware('auth');
    Route::get('/orders', [UserController::class, 'orders'])->middleware('auth');
    Route::get('/addresses', [UserController::class, 'addresses'])->middleware('auth');
    Route::get('/details', [UserController::class, 'details'])->middleware('auth');
    Route::get('/wishlist', [UserController::class, 'wishlist'])->middleware('auth');
});

require_once "checkout_routes.php";
require_once "admin_routes.php";
