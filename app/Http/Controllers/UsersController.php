<?php


namespace App\Http\Controllers;
use App\Models\Player;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    // 

    function list()
    {
    
    $data = Player::paginate(3);
     return view('list',['Players'=>$data]);
    } 

    function delete($Id)
    {
        $data = Player::find($Id);
        $data->where('Id',$Id)->delete();
        session()->flash('flashSuccess','record deleted success');
        return redirect('players');
    }
    function fetchTable()
    {
       $data = player::paginate(6);
       return view('players',['players'=>$data]);
       
    } 
}
