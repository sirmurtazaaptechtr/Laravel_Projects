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

Route::get('/about',function () {
    return view('about');
})->name('about');

Route::get('/pages',function () {
    return "<h1>All Pages</h1>";
})->name('pages');

// Route::get('/users/name/{name}',function(string $name) {
//     return "<h1>Welcome $name</h1>";
// })->whereAlpha('name');

// Route::get('/users/name/{name?}',function(string $name = null) {
//     if($name) {
//         return "<h1>Welcome $name</h1>";
//     }else {
//         return "<h4>User not found</h4>";
//     }
// })->whereAlpha('name');
Route::get('/users/name/{name?}/id/{id?}',function(string $name = null, string $id = null) {
    if($name) {
        return "<h1>Welcome $name</h1><ul><li>ID : $id</li><li>NAME : $name</li></ul>";
    }else {
        return "<h4>User not found</h4>";
    }
})->whereAlpha('name')->whereNumber('id');

Route::get('/test',function() {
    return "<h1>This page is under development.</h1>";
});

Route::redirect('/about','/test',302);

Route::fallback(function() {
    return view('error');
});