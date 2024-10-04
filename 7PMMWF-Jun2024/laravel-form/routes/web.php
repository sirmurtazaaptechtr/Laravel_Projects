<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class,'show'])->name('students');
Route::get('/student/{id}', [StudentController::class, 'view']); // Display individual record
Route::get('/delete/{id}', [StudentController::class, 'delete']); // Delete record
Route::get('/create', [StudentController::class,'create']);
Route::post('/store', [StudentController::class,'store']);