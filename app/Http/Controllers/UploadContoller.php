<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function uploadFile(Request $req)
    {
        # code...
       return $req->file('file')->store('docs');
    }
}
