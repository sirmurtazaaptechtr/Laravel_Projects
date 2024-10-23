<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('guest')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/users',[UserController::class, 'index'])->name('users');
    Route::get('/users/user/{id}',[UserController::class, 'showUser'])->name('user');
    Route::get('/users/user/{id}/edit',[UserController::class, 'editUser'])->name('editUser');
    Route::post('/users/user/update',[UserController::class, 'updateUser'])->name('updateUser');
});
