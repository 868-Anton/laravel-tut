<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import DB class
use Illuminate\Support\Facades\DB;



class UsersController extends Controller
{
    //fetch Data from my SQL

    function index()
    {
       return DB::select('select * from students');
    }
}
