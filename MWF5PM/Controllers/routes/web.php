<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'index'])->name('home');

Route::get('/about-us', [UserController::class, 'ShowAbout'])->name('about');

Route::get('/shop', [UserController::class,'ShowShop'])->name('shop');

Route::get('/contact-us', [UserController::class, 'ShowContact'])->name('contact');

Route::get('/shop/product', [UserController::class,'ShowProduct'])->name('product');
