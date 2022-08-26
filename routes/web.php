<?php

use Illuminate\Http\Request;
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/users',[UsersController::class,'viewLoad']);
Route::get('/users',[UsersController::class,'sayIAm']);

Route::get('/test', function () {
    return view('test');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function (Request $req) {
    return response($req);
});