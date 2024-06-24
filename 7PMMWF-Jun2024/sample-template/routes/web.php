<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/products', function () {
    return view('shop');
})->name('shop');

Route::get('/products/single-product', function () {
    return view('single-shop');
})->name('single-shop');
