<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;



class UsersController extends Controller
{
    // 

    function index()
    {
       return DB::select('select * from users');
    }
}
