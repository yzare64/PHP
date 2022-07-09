<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\CommentsController;
use App\Mail\SendMail;
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
Route::get('send-email',function (){
    Mail::to('info@yaserzare.ir')->send(new SendMail('yaser','zare'));
}
);

Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/post/{post}',[IndexController::class,'page'])->name('page');
Route::get('/category/{category}',[IndexController::class,'category'])->name('category');
Route::get('/tag/{tag}',[IndexController::class,'tag'])->name('tag');
Route::post('/comment/{post}',[IndexController::class,'comment'])->name('comment');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','admin'])->group(function (){
Route::resource('categories',CategoriesController::class)->except('show');
Route::resource('tags',TagsController::class)->except('show');
Route::resource('posts',PostsController::class)->except('show');
Route::resource('users',UsersController::class)->except(['show','create','store']);
Route::post('ckeditor/image_upload',[PostsController::class,'upload'])->name('posts.upload');
Route::resource('comments',CommentsController::class);
Route::post('comment-reply/{comment}',[CommentsController::class,'reply'])->name('comments.reply');
});
