<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

// =======================
// Public Routes
// =======================

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');


// =======================
// Cart Routes
// =======================

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
Route::post('/cart/update/{id}/{action}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');


// =======================
// Checkout Routes
// =======================

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::post('/checkout', [\App\Http\Controllers\CheckoutController::class, 'process'])->name('checkout.process');


// =======================
// User Authenticated Routes
// =======================

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// =======================
// Admin Auth Routes
// =======================

// Admin login form
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::get('/admin/login', function () {
    return view('admin.login');
});


// Admin login POST
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');

// Admin logout
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin dashboard (protected)
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
});


// =======================
require __DIR__.'/auth.php';
