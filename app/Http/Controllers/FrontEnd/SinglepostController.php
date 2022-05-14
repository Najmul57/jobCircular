<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    public function index($slug)
    {
        $post = Post::with('category')->firstWhere('slug',$slug);
        $categories=Category::get();
        // return $post;

        return view('frontend.singlePostPage',compact('post','categories'));
    }
}
