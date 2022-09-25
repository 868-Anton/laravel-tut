<?php

namespace App\Http\Controllers;

use App\Models\player;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    // 

    function getData(Request $req)
    {
        $req->validate([
            'username'=>'required',
            'userpassword'=>'required | min:3'
        ]);
            return $req->input();
    }
    
    function fetchTable()
    {
       $data = player::all();

       return view('players',['players'=>$data]);
       
    } 
}
