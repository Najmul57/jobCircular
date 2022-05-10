<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;

Auth::routes();

Route::group(['prefix'=>'admin'],function(){

    Route::group(['middleware'=>'auth'],function(){
        Route::get('home', [AdminController::class, 'admin'])->name('admin.home');
    });

});


Route::resource('category',CategoryController::class);

Route::resource('post',PostController::class);
