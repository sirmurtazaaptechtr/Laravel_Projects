<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function ShowHome () {
       return view('welcome');
    } 
    function ShowAbout () {
       return view('about');
    } 
    function ShowShop () {
       return view('shop');
    } 
    function ShowContact () {
       return view('contact');
    } 
    function ShowProduct () {
       return view('single-shop');
    } 
}
