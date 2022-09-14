<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/test', function () {
    return view('test');
});


//sessions
Route::post("user",[UserAuth::class,'userLogin']);
Route::view('/login',"users");

Route::view('/profile',"profile");

//create Login and logout 
// Route::get('/login', function () {
//     if(session()->has('username'))
//     {
//         return redirect('profile');
//     }
//     return view('login');
// });

Route::get('/logout', function () {
    if(session()->has('username'))
    {
        session()->pull('username');
    }
    return redirect('login');
});
