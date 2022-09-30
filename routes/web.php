<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddMember;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UsersController;
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


Route::get('/', function () 
{
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




//sessions lessons begin here
Route::post("login",[UserAuth::class,'userLogin']); //this must match form 
// Route::view('/login',"users");
Route::view('/profile',"profile");

//session flash begins here 
Route::post('addMember', [AddMember::class,'add']);
Route::view("add", 'add');


//create Login and logout 
Route::get('/login', function () {
    if(session()->has('username'))
    {
        return redirect('profile');
    }
    return view('/login');
});

Route::get('/logout', function () {
    if(session()->has('username'))
    {
        session()->pull('username');
    }
    return redirect('login');
});

Route::view('/upload','upload');
Route::post('/upload',[UploadController::class,'uploadFile']);

Route::get("players",[UsersController::class,"fetchTable"]);

Route::get('/register', function () {
    return view('register');
});

Route::post('register',[AddMember::class,'add']);