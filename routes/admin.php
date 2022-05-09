<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;


Route::get('/admin/home', [AdminController::class, 'admin'])->name('admin.home');

Route::resource('category',CategoryController::class);
