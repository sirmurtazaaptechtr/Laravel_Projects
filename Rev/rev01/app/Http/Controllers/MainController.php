<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showHome()  {
        return view('welcome');
    }

    public function showAbout()  {
        return view('about');
    }

    public function showProducts()  {
        return view('products');
    }
}
