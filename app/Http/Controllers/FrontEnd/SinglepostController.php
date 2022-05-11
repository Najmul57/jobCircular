<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    public function index($id)
    {
        $post = Post::firstWhere('id',$id);
        $categories=Category::get();
        // return $post;

        return view('frontend.singlePostPage',compact('post','categories'));
    }
}
