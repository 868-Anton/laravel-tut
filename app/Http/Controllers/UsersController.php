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
      try{
       print_r($req); 
       exit();
       $data = player::find($req->Id);
        $data->Username = $req->Username;
        $data->onlineName = $req->onlineName;
        $data->phoneNumber = $req->phoneNumber;
        $data->fullName = $req->fullName;
        $data->Divsion = $req->Divsion;
        $data->save();
        // return redirect('players');
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
}
