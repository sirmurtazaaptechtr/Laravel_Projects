<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', [StudentController::class,'create']);
Route::post('/store', [StudentController::class,'store']);