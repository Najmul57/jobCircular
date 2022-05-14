<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $post = Post::get();
        return view('backend.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.post.add_post', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    return $request->all();
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'select_token_generatin' => 'required',
            'post_desc' => 'required',
            'thumbnail' => 'required|mimes:png,jpg,jpeg,webp',
        ]);

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->thumbnail->getClientOriginalName();
            $request->thumbnail->storeAs('thumbnail', $thumbnail, 'public');
            Post::create([
                'title' => $request->title,
                'slug' => make_slug($request->title),
                'description' => $request->description,
                'category_id' => $request->category_id,
                'meta_keyword' => json_encode( $request->select_token_generatin, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES),
                'meta_description' => $request->post_desc,
                'thumbnail' => $thumbnail,
                'user_id' => Auth::user()->id
            ]);
            return back();
        } else {
            Post::create([
                'title' => $request->title,
                'slug' => make_slug($request->title),
                'description' => $request->description,
                'category_id' => $request->category_id,
                'meta_keyword' => json_encode( $request->select_token_generatin, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES),
                'meta_description' => $request->post_desc,
                'user_id' => Auth::user()->id
            ]);
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id', $id)->first();
        return view('backend.post.show_post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);
        $category = Category::all();
        // return $post;
        return view('backend.post.edit_post', compact('post', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->thambnail->getClientOriginalName();
            $request->thumbnail->storeAs('thumbnail', $thumbnail, 'public');
            Post::findOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'thumbnail' => $thumbnail,
            ]);
            return redirect()->route('post.index');
        } else {
            Post::findOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'category_id' => $request->category_id
            ]);
            return redirect()->route('post.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return back();
    }
}
