<?php

namespace App\Http\Controllers;

//import DB class
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//import http
use Illuminate\Support\Facades\Http;



class UsersController extends Controller
{
    //get(data from this api)

    function index()
    {
    $collection = Http::get('reqres.in/api/users?page=1');
    return view('Http',['collection'=>$collection['data']]);
    }
}
