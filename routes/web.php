<?php

use App\Http\Controllers\FrontEnd\CategorypostController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontEnd\ContactPageController;
use App\Http\Controllers\FrontEnd\HomePageController;
use App\Http\Controllers\FrontEnd\PostPageController;
use App\Http\Controllers\FrontEnd\SearchController;
use App\Http\Controllers\FrontEnd\SinglepostController;

Route::get('/', [HomePageController::class, 'index']);
Route::get('/contact', [ContactPageController::class, 'index'])->name('contact.index');

Route::get('post/{slug}', [SinglepostController::class, 'index'])->name('singlepost');

Route::get('category/{slug}', [CategorypostController::class, 'index'])->name('categorypost');


Route::get('/post', [PostPageController::class, 'index'])->name('job.index');

Route::get('search', [SearchController::class, 'search'])->name('search.page');
