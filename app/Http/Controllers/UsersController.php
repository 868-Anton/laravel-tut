<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function viewLoad()

    { //pass data here we are passing an associate array
        return view('users', ['user'=>"peter"]);
    }
}
