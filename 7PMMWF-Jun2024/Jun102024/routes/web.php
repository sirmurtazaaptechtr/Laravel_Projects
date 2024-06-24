<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('pages')->group(function () {
    Route::get('/', function () {
        return '<h1>All Pages</h1>';
    });
    Route::get('/page1', function () {
        return '<h1>Page 1</h1>';
    });
    Route::get('/page2', function () {
        return '<h1>Page 2</h1>';
    });
});

Route::fallback(function () {
    return "<h1>No page Found!</h1>";
});