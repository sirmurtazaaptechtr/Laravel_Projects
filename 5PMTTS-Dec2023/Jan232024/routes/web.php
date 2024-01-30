<?php

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

Route::get('/',[StudentController::class,'showHome'])->name('home');
Route::get('/students',[StudentController::class,'showStudents'])->name('students');
Route::get('/student/id/{id?}',[StudentController::class,'showStudent'])->name('student');
Route::get('/delStudent/id/{id?}',[StudentController::class,'delStudent'])->name('delStudent');
Route::get('/student/studentform',[StudentController::class,'showStudentForm'])->name('studentForm');
Route::post('/student/studentform/addstudent',[StudentController::class,'addStudent'])->name('addStudent');