<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\UsersController;
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

Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/post/{post}',[IndexController::class,'page'])->name('page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','admin'])->group(function (){
<<<<<<< HEAD
Route::resource('categories',CategoriesController::class);
Route::get('trash',[CategoriesController::class,'trash'])->name('categories.trash');
    Route::get('restore',[CategoriesController::class,'restore'])->name('categories.restore');
=======
Route::resource('categories',CategoriesController::class)->except('show');
Route::resource('tags',TagsController::class)->except('show');
Route::resource('posts',PostsController::class)->except('show');
Route::resource('users',UsersController::class)->except(['show','create','store']);
>>>>>>> c0b7ba358e33eb2c1bdf55825cf947cb17be46c1
});
