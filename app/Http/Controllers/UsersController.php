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
       $data = player::paginate(6);

       return view('players',['players'=>$data]);
       
    } 
}
