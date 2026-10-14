<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('products.show');

// Authentic snubfoods.com pages
Route::get('/our-mission', [PageController::class, 'mission'])->name('mission');
Route::get('/meet-the-mom-behind-snub', [PageController::class, 'story'])->name('story');
Route::get('/our-story', [PageController::class, 'story']); // handy alias
Route::get('/why-gut-health-matters', [PageController::class, 'gutHealth'])->name('gut-health');
Route::get('/explore-our-fermentation-process', [PageController::class, 'fermentation'])->name('fermentation');

// Contact Us
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Checkout Flow
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');
Route::get('/checkout-2', [PageController::class, 'checkout']); // Alias for live site compatibility

