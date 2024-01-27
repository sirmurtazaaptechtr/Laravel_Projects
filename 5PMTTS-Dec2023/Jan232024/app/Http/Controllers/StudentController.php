<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showHome () {
        return view('welcome');
    }
    public function showStudents () {
        $students = DB::table('students')->get();
        return view('students',['students' => $students]);
    }
    public function showStudent (string $id) {
        $student = DB::table('students')->where('id','=',$id)->get();
        return view('student',['student' => $student]);
        
    }
    public function delStudent(string $id) {
        $isDeleted = DB::table('students')->where('id','=',$id)->delete();
        if($isDeleted) {
            return view('delStudent',['id' => $id]);

        }
    }
}
