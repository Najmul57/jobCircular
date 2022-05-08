<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('backend.dashboard');
    }
    public function categories()
    {
        return view('backend.category.add-category');
    }

    public function index()
    {
        $Category = Category::all();
        return view('backend.category.show-category', compact('Category'));
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => 'required',
                'image' => 'required'
            ],
            [
                'title.required' => 'Name field is required',
                'image.required' => 'Image field is required'
            ]
        );

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save('backend/assets/images/' . $name_gen);
        $save_url = 'backend/assets/images/' . $name_gen;

        Category::insert([
            'title' => $request->title,
            'image' => $save_url
        ]);
        return redirect()->route('category.show');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        // return $category;
        return view('backend.category.edit-category', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category = $request->id;
        $old_image = $request->id;

        if ($request->file('image')) {
            unlink($old_image);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('backend/assets/images/' . $name_gen);
            $save_url = 'backend/assets/images/' . $name_gen;

            Category::findOrFail($category)->update([
                'title' => $request->title,
                'image' => $save_url
            ]);
            return redirect()->route('category.show');
        } else {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('backend/assets/images/' . $name_gen);
            $save_url = 'backend/assets/images/' . $name_gen;

            Category::findOrFail($category)->update([
                'title' => $request->title,
                'image' => $save_url
            ]);
            return redirect()->route('category.show');

        }
    }
    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $image = $category->image;
        unlink($image);
        Category::findOrFail($id)->delete();
        return redirect()->route('category.show');

    }
}
