<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index () {
        $users = DB::table('users')->get();

        // return view('users',compact('users'));
        return view('users',['users' => $users]);
        // dd($users);
    }

    public function showUser (string $id) {
        $user = DB::table('users')->find($id);

        return view('user',compact('user'));
        // dd($user);
    }
}
