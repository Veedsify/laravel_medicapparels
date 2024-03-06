<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ProductsController;
use \App\Http\Controllers\Admin\DashboardContoller;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;

Route::middleware(['auth', 'admin'])->group(function () {
    // Get Route Admin Products
    Route::get("/admin", [DashboardContoller::class, 'index']);
    Route::get("/admin/products", [DashboardContoller::class, 'products']);
    Route::get("/admin/products/add", [DashboardContoller::class, 'add_product'])->name("admin.product.add");
    Route::get("/admin/product/{id}/edit", [ProductsController::class, 'product_edit']);
    Route::delete("/admin/products/delete/{id}", [ProductsController::class, 'delete_product']);

    // ORDERS
    Route::get("/admin/orders/processing", [OrderController::class, 'orders_processing'])->name("admin.orders.processing");
    Route::get("/admin/orders/pending", [OrderController::class, 'orders_pending'])->name("admin.orders.pending");
    Route::get("/admin/orders/shipped", [OrderController::class, 'orders_shipped'])->name("admin.orders.shipped");
    Route::get("/admin/orders/delivered", [OrderController::class, 'orders_delivered'])->name("admin.orders.delivered");
    Route::get("/admin/blog/new", [BlogController::class, 'new_article'])->name("admin.blog.new_article");
    Route::get("/admin/blog/my", [BlogController::class, 'my_article'])->name("admin.blog.my_article");

    Route::prefix("admin/settings")->group(function () {
        Route::get("/homepage", [SettingController::class, 'setting'])->name("admin.settings.homepage");
        Route::get("/aboutpage", [SettingController::class, 'about'])->name("admin.settings.aboutpage");
        Route::get("/contactpage", [SettingController::class, 'contact'])->name("admin.settings.contactpage");
        Route::get("/shoppage", [SettingController::class, 'shop'])->name("admin.settings.shoppage");
        Route::get("/category", [SettingController::class, 'category'])->name("admin.settings.category");
        Route::get("/chart", [SettingController::class, 'chart'])->name("admin.settings.chartpage");
    });
    
    Route::get("/admin/users", [UserController::class, 'index'])->name('admin.users');
    Route::get("/admin/profile", [ProfileController::class, 'index'])->name('admin.profile');


    Route::get("/admin/users/{id}", function ($id) {
        return "Admin Users $id";
    });

    Route::get("/admin/users/{id}/edit", function ($id) {
        return "Admin Users $id Edit";
    });

    Route::get("/admin/users/{id}/force-delete", function ($id) {
        return "Admin Users $id Force Delete";
    });

    Route::get("/admin/posts", function () {
        return "Admin Posts";
    });

    Route::get("/admin/posts/create", function () {
        return "Admin Posts Create";
    });

    Route::get("/admin/posts/{id}/edit", function ($id) {
        return "Admin Posts $id Edit";
    });

    Route::get("/admin/posts/{id}/delete", function ($id) {
        return "Admin Posts $id Delete";
    });

    Route::get("/admin/categories", [CategoryController::class, 'category'])->name('admin.categories');
    Route::get("/admin/categories/create", [CategoryController::class, 'category_create'])->name("category.create");
    Route::post("/admin/categories/add", [CategoryController::class, 'category_add'])->name("category.add");

    Route::get("/admin/categories/{id}", function ($id) {
        return "Admin Categories $id";
    });
});


// Post Route
Route::middleware(['auth', 'admin'])->group(function () {
    Route::post("/admin/products/add", [ProductsController::class, 'addNewProduct'])->name("addNewProduct");
    Route::post("/admin/products/edit/{id}", [ProductsController::class, 'updateProduct'])->name("updateProduct");
});
