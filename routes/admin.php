<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get("/dashboard" , [App\Http\Controllers\Admin\DashboardController::class , 'index'])->middleware('auth','check.role')->name('admin-view'); 

Auth::routes();

