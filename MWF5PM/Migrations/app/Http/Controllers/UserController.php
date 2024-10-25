<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Display a listing of all users
    public function index()
    {
        // Retrieve all users with their associated gender information using Eloquent ORM
        $users = User::with('gender')->get();

        // Pass the retrieved users data to the 'users' view
        return view('users', compact('users'));
    }

    // Display a specific user's details by ID
    public function showUser(string $id)
    {
        // Retrieve a single user by ID with associated gender data
        // $user = User::with('gender')->where('id', $id)->first();
        $user = User::with('gender')->find($id);

        // Pass the retrieved user data to the 'user' view
        return view('user', compact('user'));
    }

    // Show the form for add a new user
    public function addUserForm()
    {
        // Retrieve all gender options from the database to populate the dropdown in the form
        $genders = DB::table('genders')->get();        

        // Pass the user data and gender options to the 'editUser' view
        return view('addUserForm',compact('genders'));
    }
    // Create a new user's information in the database
    public function createUser(Request $request)
    {
        // Update the user's record in the database with data from the request
        DB::table('users')
            ->insert([
                'name' => $request->name,
                'email' => $request->email,
                'gender_id' => $request->genderid,
                'password' => $request->password,
            ]);

        // Redirect to the users list page with a success message
        return redirect()->route('users')->with('success', 'User inserted successfully!');
    }

    // Show the form for editing a specific user by ID
    public function editUserForm(string $id)
    {
        // Retrieve all gender options from the database to populate the dropdown in the form
        $genders = DB::table('genders')->get();

        // Find the user data by ID to pre-fill the form fields
        $user = DB::table('users')->find($id);

        // Pass the user data and gender options to the 'editUser' view
        return view('editUserForm', compact('user', 'genders'));
    }    

    // Update the specified user's information in the database
    public function updateUser(Request $request)
    {
        // Update the user's record in the database with data from the request
        DB::table('users')
            ->where('id', $request->userid)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'gender_id' => $request->genderid,
            ]);

        // Redirect to the users list page with a success message
        return redirect()->route('users')->with('success', 'User updated successfully!');
    }
    // Delete a specific user by ID
    public function deleteUser(string $id)
    {
        // Find the user by ID
        $user = User::find($id);

        // Check if the user exists
        if ($user) {
            // Delete the user from the database
            $user->delete();

            // Redirect to the users list with a success message
            return redirect()->route('users')->with('success', 'User deleted successfully!');
        }

        // Redirect back with an error message if user not found
        return redirect()->route('users')->with('error', 'User not found!');
    }
}
