<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function ShowHome () {
        return view('welcome');
    }
}
