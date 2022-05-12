<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $keyword = null;
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
        }

        $sort = null;
        if (isset($_GET['sort'])) {
            $sort = $_GET['sort'];
        }

        $count = null;
        if (isset($_GET['count'])) {
            $count = $_GET['count'];
        }

        $category = null;
        if (isset($_GET['category'])) {
            $category = $_GET['category'];
        }
        $view = null;
        if (isset($_GET['view'])) {
            $view = $_GET['view'];
        }

        // return $keyword;

        // $keyword = 'টেবিল';


        $categories = Category::get();
        $posts = Post::when($category, function ($query, $category) {
            return $query->whereIn('category_id', $category);
        })
            ->when($keyword, function ($query, $keyword) {
                return $query->where('title', 'like', '%' . $keyword . '%');
            })
            ->when($sort, function ($query, $sort) {
                return $query->orderBy('id', $sort);
            })
            ->paginate($count ?? 10);

        if (isset($view) && $view == 'list') {
            return view('frontend.searchpage-list', compact('categories', 'posts'));
        }

        return view('frontend.searchpage-grid', compact('categories', 'posts'));
    }
}
