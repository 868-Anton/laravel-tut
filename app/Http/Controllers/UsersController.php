<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function viewLoad()

    { 
        //dummy data
        $dummyData = ['Anton','Jack','Josh','Paul','sam'];
        
        
        //pass data here we are passing an associate array
        return view('users', ['users'=>$dummyData]);
    }
}
