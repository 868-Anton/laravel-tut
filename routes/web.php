<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

//added routeMiddleware to this page
Route::get('/about', function () {
    return view('about');
})->middleware('protectedPage');


Route::get('/test', function () {
    return view('test');
});


// Exercise Form starts here
// create view blade 
// create post route
Route::post("users",[UsersController::class,'getData']);
Route::view('/login',"users");
Route::view('/noaccess',"noaccess");


