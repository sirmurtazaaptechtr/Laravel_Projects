<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about',function (){
    return view('about');
})->name('about');

Route::get('/ourservices',function (){
    return view('srv');
})->name('services');

Route::get('/users',function () {
    return "<h1>Users Page</h1>";
})->name('users');

Route::get('/users/name/{name?}',function ($Name = NULL) {    
    // return "<h1>Users Page - $Name</h1>";
    if($Name) {
        return view('users',['username'=>$Name]);
    }else {
        return view('users',['username'=>'Guest']);
    }
});

Route::get('/test',function () {
    return "<h1>Page is Under Construction</h1>";
});

Route::redirect('about','test',302);

Route::fallback(function () {
    return '<p>Page Not Found. Go to <a href="' . route('home') . '">Home</a></p>';
});
