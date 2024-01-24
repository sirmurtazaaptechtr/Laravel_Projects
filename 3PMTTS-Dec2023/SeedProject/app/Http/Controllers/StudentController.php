<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function ShowHome () {
        return view('welcome');
    }
    public function ShowStudents () {
        $students =  DB::table('students')->get();
        return view('students',['students'=>$students]);
    }
}
