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
function getCustomers () {
    return [
        'Cust001'=>['name'=>"Urooj",'gender'=>'female','dob'=>'30-Aug-2000'],
        'Cust002'=>['name'=>"Hiba",'gender'=>'female','dob'=>'06-Jul-2006'],
        'Cust003'=>['name'=>"Areesha",'gender'=>'female','dob'=>'28-Jul-2001'],
        'Cust004'=>['name'=>"Shoaib",'gender'=>'male','dob'=>'04-Feb-2004'],
        'Cust005'=>['name'=>"Affan",'gender'=>'male','dob'=>'10-Mar-2006'],
        'Cust006'=>['name'=>"Moiz",'gender'=>'male','dob'=>'26-Nov-2001'],
        'Cust007'=>['name'=>"Muhammad Ali",'gender'=>'male','dob'=>'08-Apr-2004'],
        'Cust008'=>['name'=>"Junaid",'gender'=>'male','dob'=>'29-Dec-2006'],
        'Cust009'=>['name'=>"Saad",'gender'=>'male','dob'=>'01-Apr-2006'],
        'Cust010'=>['name'=>"Faizan",'gender'=>'male','dob'=>'20-Nov-1999'],
    ];
}

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/shop/TheProduct', function () {
    return view('single-shop');
})->name('single-shop');

Route::get('/customers',function() {
    $customers = getCustomers();
    return view('customers',['customers'=>$customers]);
})->name('customers');

Route::get('/customer/id/{id?}', function ($id = NULL) {
    $customers = getCustomers();
    $customer = $customers[$id];
    return view('customer',['id'=>$id,'customer'=>$customer]);    
})->name('customer');