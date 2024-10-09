<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index() {
        $title = "Welcome";
        return view('home',['title'=>$title]);
    }    
    function ShowAbout() {
        return view('about');
    }    
    function ShowShop() {
        return view('shop');
    }    
    function ShowContact() {
        return view('contact');
    }    
    function ShowProduct(string $id) {
        // return view('product',['id' => $id]);
        return view('product',compact('id'));
    }    
}
