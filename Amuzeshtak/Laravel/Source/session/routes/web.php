<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

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

Route::get('put-session',[SessionController::class,'put']); //put session
Route::get('get-session',[SessionController::class,'get']); // get session
Route::get('has-session',[SessionController::class,'has']); //check session
Route::get('forget-session',[SessionController::class,'forget']); // delete session
Route::get('flush-session',[SessionController::class,'flush']); //delete all session
