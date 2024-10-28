<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('guest')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::controller(GoogleController::class)->group(function(){
        Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
        Route::get('auth/google/callback', 'handleGoogleCallback');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/users',[UserController::class, 'index'])->name('users');
    Route::get('/users/user/{id}',[UserController::class, 'showUser'])->name('user');
    Route::get('/users/user/{id}/edit',[UserController::class, 'editUserForm'])->name('editUser');
    Route::get('/users/add',[UserController::class, 'addUserForm'])->name('addUser');
    Route::post('/users/user/update',[UserController::class, 'updateUser'])->name('updateUser');
    Route::post('/users/create',[UserController::class, 'createUser'])->name('createUser');
    Route::delete('/user/{id}', [UserController::class, 'deleteUser'])->name('user.delete');

});
