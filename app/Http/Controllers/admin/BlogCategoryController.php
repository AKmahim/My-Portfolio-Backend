<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = BlogCategory::paginate(20);
        return view('admin.blog-category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $validated = $request->validate([
            'category_name' => 'required|max:255',
            'category_img' => 'nullable|mimes:jpg,jpeg,png,webp',

        ]
        );

        // ============== without resizing system =======
        $category_img = $request->file('category_img');
        $last_img = '';
        if($category_img){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($category_img->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $up_location = 'admin/img/blog-category/';
            $last_img = $up_location.$img_name;
            $category_img->move($up_location,$img_name);

        }


        // ============== with resize system =========
        // $category_img = $request->file('category_img');
        // $name_gen = hexdec(uniqid());
        // $img_ext = strtolower($category_img->getClientOriginalExtension());
        // $img_name = $name_gen . '.' . $img_ext;
        // $up_location = 'frontend/img/categories/';
        // $last_img = $up_location . $img_name;
        
        // // Resize the image
        // $img = Image::make($category_img->getRealPath());
        // $img->resize(270, 270, function ($constraint) {
        //     $constraint->aspectRatio();
        // })->save(public_path($last_img));
        

        BlogCategory::insert([
            'category_name' => $request->category_name,
            'category_img' => $last_img,
        ]);
        return Redirect()->back()->with('success','Blog Category Created Successfully');
        // return Redirect()->route('admin.category')->with('success','Category Updated');
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
        $category = BlogCategory::find($id);
        if($category){
            $old_img = $category->category_img;
            if($old_img){
                unlink($old_img);

            }
            $category->delete();
            return Redirect()->back()->with('success','Blog Category Deleted');

        }
        else{
            return Redirect()->back()->with('success','Something went wrong!');
        }
    }
}
