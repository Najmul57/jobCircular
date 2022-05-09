<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;



Route::get('/admin/home', [AdminController::class, 'admin'])->name('admin.home');

Route::resource('category',CategoryController::class);

Route::resource('post',PostController::class);
