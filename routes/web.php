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


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/test', function () {
    return view('test');
});
Route::post("users",[UsersController::class,'getData']);
Route::view('/noaccess',"noaccess");
Route::view('/login',"users");

//creating a group middleware on routes just pass in the array to add multiple 
Route::group(['middleware'=>['protectedPage']],function()
{
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', function () {
        return view('home');
    });
    Route::get('/about', function () {
        return view('about');
    });
    // Route::get('/test', function () {
    //     return view('test');
    // });
});

//all inside Route:group  will give no access if age is under 18
