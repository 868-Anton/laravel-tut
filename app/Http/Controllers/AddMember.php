<?php

namespace App\Http\Controllers;

use App\Models\player;
use Illuminate\Http\Request;


class AddMember extends Controller
{
    //
    function add(Request $req)
    {
        $req->validate([
            'Username'=>'required',
            'onlineName'=>'required',
        ]);

        $player = new player;

        $player->Username= $req->Username;
        $player->onlineName = $req->onlineName;
        $player->phoneNumber= $req->phoneNumber;
        $player->fullName= $req->fullName;
        $player->Divsion= $req->division;

        $player->save();

        return redirect('players');


    }
}
