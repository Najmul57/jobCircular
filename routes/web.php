<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontEnd\ContactPageController;
use App\Http\Controllers\FrontEnd\HomePageController;
use App\Http\Controllers\FrontEnd\PostPageController;
use App\Http\Controllers\FrontEnd\SinglepostController;

Route::get('/',[HomePageController::class,'index']);
Route::get('/contact',[ContactPageController::class,'index'])->name('contact.index');
Route::get('/job',[PostPageController::class,'index'])->name('job.index');

Route::get('post/{id}',[SinglepostController::class,'index'])->name('singlepost');
