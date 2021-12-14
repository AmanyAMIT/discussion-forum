<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ForumController;
use App\Http\Controllers\Admin\AnswerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/dashboard' , [DashboardController::class , 'index'])->middleware('auth','check.role')->name('admin-view'); 
Route::middleware('auth','check.role')->prefix("dashboard")->group(function(){
    Route::resource("/users" , UserController::class);
    Route::resource("/forums" ,ForumController::class);
    Route::resource("/categories" ,CategoryController::class);
    Route::resource("/answers" , AnswerController::class);
});
Route::get('/', function () {
        return redirect()->route('admin-view');
    });
Auth::routes();