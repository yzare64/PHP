<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostsCreated;

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

Route::resource('posts',PostsController::class);
Route::get('posts-trash',[PostsController::class,'trash'])->name('posts.trash');
Route::get('posts-restore/{id}',[PostsController::class,'restore'])->name('posts.restore');
Route::post('ckeditor/image_upload',[PostsController::class,'upload'])->name('posts.upload');



Auth::routes(['verify'=>true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/mail',function (){
    Mail::to('y.zare64@gmail.com')->send(new PostsCreated());
});
