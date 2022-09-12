<?php

namespace App\Http\Controllers;

//import DB class
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//import User model
use App\Models\Students;


class UsersController extends Controller
{
    //fetch Data from my SQL

    function fetchData()
    {
       return Students::all();
    }
}
