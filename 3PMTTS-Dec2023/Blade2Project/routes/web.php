<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
function getUsers () {
    return [
        'User001'=>['name'=>'Huzaifa', 'dob'=>'4-Sep-2005', 'email'=>'huzaifa200054@gamil.com', 'city'=>'Karachi', 'gender'=>'male' ],
        'User002'=>['name'=>'Ayesha', 'dob'=>'31-Dec-1999', 'email'=>'ayeasahakhan@gamil.com', 'city'=>'Toyama', 'gender'=>'female' ],
        'User003'=>['name'=>'Hamza', 'dob'=>'7-May-2002', 'email'=>'hamzairfan173@gamil.com', 'city'=>'Karachi', 'gender'=>'male' ],
        'User004'=>['name'=>'Yusra', 'dob'=>'19-Nov-2005', 'email'=>'khanyusra550@gamil.com', 'city'=>'Karachi', 'gender'=>'female' ],
        'User005'=>['name'=>'Zeeshan', 'dob'=>'1-Sep-2005', 'email'=>'zeeshankhan503@gamil.com', 'city'=>'Karachi', 'gender'=>'male' ],
        'User006'=>['name'=>'Faraz', 'dob'=>'13-Dec-2004', 'email'=>'farazabbas@gamil.com', 'city'=>'Karachi', 'gender'=>'male' ],
        'User007'=>['name'=>'Kashan', 'dob'=>'5-Aug-2003', 'email'=>'kashansheikh@gamil.com', 'city'=>'Karachi', 'gender'=>'male' ]
    ];
}

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/shop/shop-single', function () {
    return view('shop-single');
})->name('shop-single');

Route::get('/users', function () {
    // $name = "Ali Raza";
    // $city = "Lahore";

    // return view('users',[
    //     'name' => $name,
    //     'city' => $city
    // ]);

    // return view('users')->with('name',$name)->with('city', $city);

    $users = getUsers();
    return view('users')->with('users', $users);
})->name('users');

Route::get('/user/id/{id?}', function ($id) {
    $users = getUsers();
    $user = $users[$id];
    return view('user',['id' => $id,'user' => $user]);
})->name('user');