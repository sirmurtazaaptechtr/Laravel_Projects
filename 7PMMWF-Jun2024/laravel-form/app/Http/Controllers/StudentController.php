<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function view($id)
    {
        $student = student::findOrFail($id);
        return view('student', compact('student'));
    }

    public function delete($id)
    {
        $student = student::findOrFail($id);
        $student->delete();
        return redirect('/students')->with('success', 'Record deleted successfully');
    }


    public function show () {
        $students = DB::select('select * from students');
        //dd($students);
        return view('students',["students"=>$students]);
    }

    public function create () {
        return view('create');
    }

    public function store(Request $req) {
        $student = new Student();
        $student->name = $req->fullName;
        $student->email = $req->email;
        $student->save();
        return redirect('/create')->with('success', 'Student record created successfully!');
        // return "<h1> $req->fullName  & $req->email </h1>";
    }
    
}
