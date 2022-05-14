<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategorypostController extends Controller
{
    public function index($slug)
    {
        $category = Category::firstWhere('slug', $slug);

        // return $category;

        $sort = null;
        if (isset($_GET['sort'])) {
            $sort = $_GET['sort'];
        }

        $count = null;
        if (isset($_GET['count'])) {
            $count = $_GET['count'];
        }

        // return $count;

        $posts = Post::where('category_id', $category->id)
            ->when($sort, function ($query, $sort) {
                return $query->orderBy('id', $sort);
            })
            ->paginate($count ?? 12);


        // return $posts;

        return view('frontend.categorypostpage', compact('posts', 'category'));
    }
}
