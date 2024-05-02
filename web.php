<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use Illuminate\Auth\Events\Logout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route:: post("user",[UserAuth::class,'userLogin']);
Route ::view("login",'login');
Route ::view("profile",'profile');

Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
     return redirect('login');
});

