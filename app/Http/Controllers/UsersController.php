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

    function sayIam()
    {
        $code = '[UserController::class,sayIam]';
        return Blade::render('<x-header title={{ URL::current() }}/>
        <h1> I am a function that belongs to the user control, this is some data passed to me: <code>{{$code}}</code></h1> ',['code'=>$code]);
    }

    function getData(Request $req)
    {
        return "Form Data will be here";
    }
}
