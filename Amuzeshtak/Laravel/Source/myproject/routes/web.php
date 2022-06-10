<?php

/*use App\Http\Controllers\IndexController;
use  App\Http\Controllers\Users\AboutsController;
use App\Http\Controllers\UsersController;*/
use App\Http\Controllers\FrontsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostsController;
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

//Route::prefix('admin')->group(function (){
//    Route::get('/',[FrontsController::class,'index']);
//    Route::get('about',[\App\Http\Controllers\AboutsController::class,'about']);
//    Route::get('contact',[FrontsController::class,'contact'])->name('fronts.contact');
//
//});
Route::resource('posts',PostsController::class);
Route::get('posts-trash',[PostsController::class,'trash'])->name('posts.trash');
Route::get('restore/{id}',[PostsController::class,'restore'])->name('posts.restore');




/*Route::get('users/{id?}/{name?}',function ($id=null,$name=null)
{
    return 'users'.' '.$id.'  '.$name;

})->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);

Route::get('about',function (){
    return 'about';
});*/

/*Route::get('users/{id?}/{name?}',[UsersController::class,'index'])->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);
Route::get('about',[AboutsController::class,'about']);*/



