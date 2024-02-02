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
    public function updateForm(string $id) {
        // $student = DB::table('students')->where('id','=',$id)->get();
        $student = DB::table('students')->find($id);
        // return $student;        
        return view('updateForm',['student' => $student]);
    }
    public function updateStudent(Request $request,$id) {
        // return $request->all();
        $isUpdated = DB::table('students')->where('id','=',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'gender' => $request->gender            
        ]);
        if($isUpdated) {
            return view('updateStudent',['id' => $id]);
        }else {
            return view('welcome');
        }        
    }
    public function showStudentForm () {
        return view('studentForm');
    }
    public function addStudent(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'age' => 'required',
            'gender' => 'required'
        ]);
        $isInserted = DB::table('students')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'gender' => $request->gender            
        ]);
        return redirect()->route('students');        
        // return redirect()->route('profile', ['id' => 1]);                     
    }
}
