<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;



Route::group(['prefix'=>'admin','middlware'=>'is_admin'], function(){
    Route::get('/home', [CategoryController::class, 'admin'])->name('admin.home');
    Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');
    Route::get('/show', [CategoryController::class, 'index'])->name('category.show');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/categories/update/{id}', [CategoryController::class, 'update']);
    Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
});
// /photos/{photo}/edit
