<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin(){
        return view('backend.dashboard');
    }
    public function categories(){
        return view('backend.category.add-category');
    }

    public function index()
    {
        $Category = Category::all();
        return view('backend.category.show-category',compact('Category'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required'
        ],
        [
            'title.required' => 'Name field is required',
            'image.required' => 'Image field is required'
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/assets/images/'.$name_gen);
        $save_url = 'backend/assets/images/'.$name_gen;

        Category::insert([
            'title'=>$request->title,
            'image'=>$save_url
        ]);
        return redirect()->route('category.show');
    }
}
