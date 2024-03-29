<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
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

Route::get('/', [MainController::class,'showHome'])->name('home');
Route::get('/about', [MainController::class,'showAbout'])->name('about');
Route::get('/products', [MainController::class,'showProducts'])->name('products');
Route::get('/students', [StudentController::class,'showStudents'])->name('students');
Route::get('/student/id/{id?}', [StudentController::class,'showStudent'])->name('student');
