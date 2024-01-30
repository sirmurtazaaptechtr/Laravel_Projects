<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents () {
        $students = DB::table('students')->get();
        return view('students',['students' => $students]);
    }
    public function showStudent ($id) {
        $student = DB::table('students')->where("id","=",$id)->get();
        // return $student;
        return view('student',['student' => $student]);
    }
}
