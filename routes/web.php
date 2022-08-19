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
    // return view('welcome');
    return redirect('about');
});

Route::get('/dynamic{name}', function ($name) {
    return view('dynamic',['name'=>$name]);
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('users/{user}', [UsersController::class,'sayThis']);

Route::get('users', [UsersController::class,'loadView']);

Route::view("contact",'contact');