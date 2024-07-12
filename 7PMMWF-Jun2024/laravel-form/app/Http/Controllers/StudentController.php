<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
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
