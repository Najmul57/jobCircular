<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;



Route::group(['prefix'=>'admin','middlware'=>'is_admin'], function(){
    Route::get('/home', [AdminController::class, 'admin'])->name('admin.home');
    Route::get('/categories', [AdminController::class, 'categories'])->name('categories');
    Route::get('/show', [AdminController::class, 'index'])->name('category.show');
    Route::post('/categories/store', [AdminController::class, 'store'])->name('categories.store');
});
