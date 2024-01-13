<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

function getUsers () {
    return [
        'U001'=>['name'=>'Huzaifa Khan','gender'=>'male','dob'=>'04-Sep-2005'],
        'U002'=>['name'=>'Khadija Imran','gender'=>'female','dob'=>'19-Aug-2006'],
        'U003'=>['name'=>'Ayesha Ahsan','gender'=>'female','dob'=>'31-Dec-1999'],
        'U004'=>['name'=>'Anshara Rizwan','gender'=>'female','dob'=>'03-Nov-2004'],
        'U005'=>['name'=>'Yusra Khan','gender'=>'female','dob'=>'19-Nov-2009'],
        'U006'=>['name'=>'Hamza Irfan','gender'=>'male','dob'=>'07-May-2002'],
        'U007'=>['name'=>'Muhammad Zeeshan Khan','gender'=>'male','dob'=>'01-Sep-2005'],
        'U008'=>['name'=>'Kashan','gender'=>'male','dob'=>'04-Sep-2005'],
        'U009'=>['name'=>'Faraz','gender'=>'male','dob'=>'04-Sep-2005'],
        'U010'=>['name'=>'Clayton','gender'=>'male','dob'=>'04-Sep-2005']
    ];
}

class UserController extends Controller
{
    public function showHome() {
        return view('welcome');
    }
    public function showAbout() {
        return view('about');
    }
    public function showContact() {
        return view('contact');
    }
    public function showShop() {
        return view('shop');
    }
    public function showProduct() {
        return view('product');
    }
    public function showallusers () {
        $users = getUsers();
        return view('users',['users'=>$users]);        
    }

    public function showUser ($id) {
        $users = getUsers();
        $user = $users[$id];
        return view('user',['id'=>$id,'user'=>$user]);        
    }
}
