<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/pages/page1/{text}', function (string $x) {
    return "<h1>Welcome to $x</h1>";
});

Route::get('/pages/page2/{text?}', function (string $x = 'N/A') {
    return "<h1>Welcome to $x</h1>";
});

Route::get('/pages/post/Name/{name}/Age/{age?}', function (string $name,$age = null) {
    if(!empty($age)) {
        return "<h1>Welcome to Post</h1>
            <ul>
                <li><b>Name : </b> $name</li>
                <li><b>Age : </b> $age</li>
            </ul>";
    }else {
        return "<h1>Welcome to Post</h1>
            <ul>
                <li><b>Name : </b> $name</li>                
            </ul>";
    }
})->whereNumber('age')->whereIn('name',['Ali','Khalid']);