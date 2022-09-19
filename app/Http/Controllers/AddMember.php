<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMember extends Controller
{
    //
    function add(Request $req)
    {
        $req->validate([
            'username'=>'required',
            'userpassword'=>'required | min:3',
            'email'=>'required',
        ]);

        $data =  $req->input('username'); 

        //flash session begins here
        $req->session()->flash('user',$data);
        
        return redirect('add');

    }
}
