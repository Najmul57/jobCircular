<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CategorypostController extends Controller
{
    public function index($id)
    {
        $posts = Post::where('category_id', $id)->paginate(6);

        // return $posts;

        return view('frontend.categorypostpage',compact('posts'));
    }
}
