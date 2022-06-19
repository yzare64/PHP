<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\CategoriesController;
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
Route::get('/post/{id?}',[IndexController::class,'page'])->name('page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','admin'])->group(function (){
Route::resource('categories',CategoriesController::class);
Route::get('trash',[CategoriesController::class,'trash'])->name('categories.trash');
    Route::get('restore',[CategoriesController::class,'restore'])->name('categories.restore');
});
