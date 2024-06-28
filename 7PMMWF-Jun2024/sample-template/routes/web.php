<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'ShowHome'])->name('welcome');

Route::get('/about-us', [PageController::class,'ShowAbout'])->name('about');

Route::get('/contact-us', [PageController::class,'ShowContact'])->name('contact');

Route::get('/products', [PageController::class,'ShowShop'])->name('shop');

Route::get('/products/single-product', [PageController::class,'ShowProduct'])->name('single-shop');
