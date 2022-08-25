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
        
        
        //pass data to our view file
        return view('users', ['users'=>$dummyData]);
    }
}
