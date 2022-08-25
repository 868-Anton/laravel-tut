<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class UsersController extends Controller
{
    //
    function viewLoad()
    { 
        //dummy data
        $dummyData = ['Anton','Jack','Josh','Paul','sam'];
        
        
        //pass data to our view file
        return view('users', ['users'=>$dummyData]);
    }

    function saySmart()
    {
        $cool = 'cool';
        return Blade::render('<h1> Test </h1>',['cool'=>$cool]);
    }
}
