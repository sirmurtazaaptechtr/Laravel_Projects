<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about',function () {
    return view('about');
})->name('about-us');
// OR
// Route::view('/about-us','about')->name('about-us');

Route::get('/page/user',function () {
    return "<h1>User Profile</h1>";
})->name('user');

Route::get('/page/products',function () {
    return "<h1>All Products</h1>";
})->name('products');

Route::get('/user/{name}/post/{id}',function (string $name, string $post_id) {
    // return view('post',compact('name','post_id'));
    return view('post',['postid'=>$post_id,'username'=>$name]);
})->whereNumber('id')->whereAlpha('name');

Route::redirect('/about-us','/about',301);

Route::fallback(function () {
    return "<h4>No such url exists</h4>";
});