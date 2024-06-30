<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BuyerDashboardController;
use App\Http\Controllers\SellerDashboardController;

// Public routes (no authentication required)
Route::view('/', 'welcome')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/category/{category}', [ShopController::class, 'category'])->name('shop.category');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::resource('products', ProductController::class)->only(['index', 'show']); // Restrict routes to index and show actions for products

// Authentication routes
Auth::routes();
Route::group(['middleware' => ['web']], function () {
    // Authentication Routes...
    Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
    Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
    // Registration Routes...
    Route::get('register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register');
    // Password Reset Routes...
    Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset');
});

// Routes requiring authentication
Route::middleware(['auth'])->group(function () {
    // Checkout routes
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'submit'])->name('checkout.submit');

    // Cart routes
   
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::patch('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/product', [ProductController::class, 'index'])->name('products.index');
    Route::post('/product', [ProductController::class, 'create'])->name('products.create');
    Route::delete('/product', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::patch('/product', [ProductController::class, 'edit'])->name('products.edit');

    // Order routes
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::post('/orders/place', [OrderController::class, 'place'])->name('order.place');

    
    // Dashboard routes
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Buyer and Seller Dashboard routes
    Route::middleware(['verified'])->group(function () {
        Route::get('/buyer/dashboard', [BuyerDashboardController::class, 'index'])->name('buyer.dashboard');
        Route::get('/seller/dashboard', [SellerDashboardController::class, 'index'])->name('seller.dashboard');
    });
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
