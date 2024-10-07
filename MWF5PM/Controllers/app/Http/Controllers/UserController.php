<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index() {
        return view('home');
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
    function ShowProduct() {
        return view('product');
    }    
}
