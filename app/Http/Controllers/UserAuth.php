<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req)
    {
        $req->validate([
            'username'=>'required',
            'userpassword'=>'required | min:3'
        ]);
        $data = $req->input();

        $req->session()->put('username',$data['username']);

        return redirect('profile');

    }
}
