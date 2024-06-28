<?php

use Illuminate\Support\Facades\Route;
function getUsers() {
    return [
        'S1' => ['name'=>"Syed Murtaza Hussain",'gender'=>"male"],
        'S2' => ['name'=>"Javeria Shafique",'gender'=>"female"],
        'S3' => ['name'=>"Sadaf Irshad",'gender'=>"female"],
        'S4' => ['name'=>"Abdul Rehman",'gender'=>"male"],
        'S5' => ['name'=>"Muhammad Basit",'gender'=>"male"],
    ];
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    // return view('users',['username'=>"Syed Murtaza Hussain",'gender'=>"male"]);

    // $name = "Syed Murtaza Hussain";
    // $gender = "male";
    // $city = "Karachi";
    // return view('users',[
    //     'username'=>$name,
    //     'gender'=>$gender,
    //     'city'=>$city
    // ]);
    // return view('users')->with('username',$name)->with('gender',$gender);

    $users = getUsers();
    return view('users',['users'=>$users]);

})->name('users');

Route::get('/users/user/{id}',function ($id) {
    $users = getUsers();
    $user = $users[$id];

    return view ('user',['user' => $user,'id' => $id]);

})->name('user');