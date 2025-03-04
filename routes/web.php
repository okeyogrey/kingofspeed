<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController; // ✅ Alias for Admin ProductController
use App\Http\Controllers\ProductController as FrontProductController; // ✅ Alias for Frontend ProductController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ✅ Home Page (Displays 8 latest products)
Route::get('/', function () {
    $products = \App\Models\Product::latest()->take(8)->get();
    return view('home', compact('products'));
})->name('home');

// ✅ Shop Page (Displays all products)
Route::get('/shop', [FrontProductController::class, 'index'])->name('shop');

// ✅ Product Details Page
Route::get('/product/{id}', [FrontProductController::class, 'show'])->name('product.show');

// ✅ Cart & Checkout Routes (Placeholder for now)
Route::get('/cart', function () {
    return view('cart'); // Create resources/views/cart.blade.php
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout'); // Create resources/views/checkout.blade.php
})->name('checkout');

// ✅ User Dashboard (Requires Authentication & Email Verification)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ✅ Profile Routes (Requires Authentication)
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ✅ Admin Routes (Requires Authentication & Admin Role)
Route::middleware(['auth', 'isAdmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', AdminProductController::class); // ✅ Uses renamed AdminProductController
});

// ✅ Auth Routes (Register, Login, Logout, etc.)
require __DIR__.'/auth.php';
