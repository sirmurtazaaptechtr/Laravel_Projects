<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //$genders = DB:table('')
    public function index () {
        // $users = DB::table('users')->get();
        $users = User::with('gender')->get();

        // return $users;
        
        return view('users',compact('users'));
        // return view('users',['users' => $users]);
        // dd($users);
    }

    public function showUser (string $id) {
        $user = DB::table('users')->find($id);

        return view('user',compact('user'));
        // dd($user);
    }

    public function editUserForm (string $id) {
        $genders = DB::table('genders')->get();
        $user = DB::table('users')->find($id);

        return view('editUser',compact('user','genders'));
        // dd($user);
    }

    public function editUser (string $id) {
        $genders = DB::table('genders')->get();
        $user = DB::table('users')->find($id);

        return view('editUser',compact('user','genders'));
        // dd($user);
    }

    public function updateUser (Request $request) {
        
        // dd($request)->all();
        DB::table('users')
        ->where('id', $request->userid)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'gender_id' => $request->genderid,
        ]);
        
        
        return redirect()->route('users')->with('success', 'User updated successfully!');
    }
}
