<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');  // Halaman Home

// Route untuk kategori produk
Route::prefix('category')->group(function() {
    Route::get('food-beverage', [ProductController::class, 'foodBeverage'])->name('category.foodBeverage');
    Route::get('beauty-health', [ProductController::class, 'beautyHealth'])->name('category.beautyHealth');
    Route::get('home-care', [ProductController::class, 'homeCare'])->name('category.homeCare');
    Route::get('baby-kid', [ProductController::class, 'babyKid'])->name('category.babyKid');
});

// Route untuk user dengan parameter ID dan name
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile'])->name('user.profile');

// Route untuk halaman transaksi POS
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');

