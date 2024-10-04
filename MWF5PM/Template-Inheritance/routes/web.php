<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/shop/product', function () {
    return view('product');
})->name('product');
