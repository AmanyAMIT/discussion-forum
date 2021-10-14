<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/dashboard' , [\App\Http\Controllers\Admin\DashboardController::class , 'index'])->middleware('auth','check.role')->name('admin-view'); 
Route::middleware('auth','check.role')->prefix("dashboard")->group(function(){
    Route::resource("/users" , \App\Http\Controllers\Admin\UserController::class);
    Route::resource("/forums" , \App\Http\Controllers\Admin\ForumController::class);
    Route::resource("/categories" , \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource("/answers" , \App\Http\Controllers\Admin\AnswerController::class);
});
Auth::routes();

