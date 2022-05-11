<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::group(['prefix'=>'admin'],function(){

    Route::group(['middleware'=>'auth'],function(){
        Route::get('home', [AdminController::class, 'admin'])->name('admin.home');
        Route::resource('post',PostController::class);
        Route::resource('category',CategoryController::class);
    });

});



