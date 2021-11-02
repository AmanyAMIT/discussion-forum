<?php

use App\Http\Controllers\User\AnswerForumController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PostForumController;
use App\Http\Controllers\User\IndexController;


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
Route::get('/user' , [IndexController::class , 'index'])->middleware('auth' , 'check.user')->name("user-view");
Route::middleware('auth' , 'check.user')->prefix('user')->group(function(){
    Route::resource("/post" , PostForumController::class);
    Route::resource("/answer" , AnswerForumController::class);
});
// Route::prefix("user")->group(function(){
   
//     // Route::get('/ShowAnswer' , [AnswerForumController::class , 'ShowAnswer'])->name('ShowAnswer');
// });
// Route::get('/', function () {
//     return redirect()->route('user-view');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
