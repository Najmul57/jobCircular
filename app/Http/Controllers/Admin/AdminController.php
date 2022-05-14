<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Intervention\Image\Facades\Image;
use App\Models\User;
use App\Models\Post;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $totalUsers = User::count();
        $totalPosts = Post::count();
        $totalCategories = Category::count();


        return view('backend.dashboard',compact('totalUsers','totalPosts','totalCategories'));
    }
}
