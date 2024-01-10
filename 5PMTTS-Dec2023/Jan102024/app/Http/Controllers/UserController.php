<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

function getUsers () {
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

class UserController extends Controller
{
    public function ShowAllUsers() {
        $users = getUsers();        
        return view('users',['users'=>$users]);        
    }
}
