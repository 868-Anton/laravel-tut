<?php

namespace App\Http\Controllers;

use App\Models\player;
use Exception;
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

    function showData($Id)
    {
         $data = player::find($Id);
         return view('edit', ['data'=>$data]);
    }

    function delete($Id)
    {
        $data = player::find($Id);
        $data->where('Id',$Id)->delete();
        return redirect('players');
    }

    function update(Request $req)
    {
       $data = player::find($req->id);
        $data->userName == $req->userName;
        $data->onlineName == $req->onlineName;
        $data->phoneNumber == $req->phoneNumber;
        $data->fullName == $req->fullName;
        $data->Division == $req->Division;
        $data->save();
        return redirect('players');
    }
}