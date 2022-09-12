<?php

namespace App\Http\Controllers;

//import DB class
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//import User mdoel
use App\Models\User;


class UsersController extends Controller
{
    //fetch Data from my SQL

    function fetchData()
    {
       return DB::select('select * from students');
    }
}
