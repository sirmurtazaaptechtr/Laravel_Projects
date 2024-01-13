<?php

use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'showHome'])->name('home');
Route::get('/about',[UserController::class,'showAbout'])->name('about');
Route::get('/contact',[UserController::class,'showContact'])->name('contact');
Route::get('/shop',[UserController::class,'showShop'])->name('shop');
Route::get('/shop/product',[UserController::class,'showProduct'])->name('product');
Route::get('/users',[UserController::class,'showallusers'])->name('users');
Route::get('/user/{id}',[UserController::class,'showUser'])->name('user');