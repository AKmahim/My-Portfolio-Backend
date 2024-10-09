<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogAuthor;
use App\Models\BlogCategory;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = Blog::latest()->paginate(10);
        $authors = BlogAuthor::all();
        $blog_category = BlogCategory::all();
        // return $blogs;
        return view('admin.blogs.index',compact('blogs','authors','blog_category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $authors = BlogAuthor::all();
        $blog_category = BlogCategory::all();
        return view('admin.blogs.create',compact('blog_category','authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ini_set('memory_limit', '512M');
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|integer',
            'short_description' => 'required|string',
            'keyword' => 'nullable|string',
            'blog_category' => 'required|string',
            'blog_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'blog_short_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:512',
            'content' => 'required|string',
            ]
        );

        // Generate slug from title
        $slug = Str::slug($request->title);

        // Check if slug already exists
        if (Blog::where('slug', $slug)->exists()) {
            return redirect()->back()->with('success', 'The blog title you have entered is already in use. Please choose a different title.');
        }

        // ==============  resizing system for blog thumbnail =======
        $blog_thumbnail = $request->file('blog_thumbnail');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($blog_thumbnail->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'blog/';
        $blog_thumbnail_path = $up_location . $img_name;

        // Create image resource from the uploaded file
        list($width, $height) = getimagesize($blog_thumbnail);
        $new_width = 850;
        $new_height = 566;

        $src = imagecreatefromstring(file_get_contents($blog_thumbnail));
        $dst = imagecreatetruecolor($new_width, $new_height);

        // Resize the image
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

        // Save the resized image
        if ($img_ext == 'jpg' || $img_ext == 'jpeg') {
            imagejpeg($dst, $blog_thumbnail_path);
        } elseif ($img_ext == 'png') {
            imagepng($dst, $blog_thumbnail_path);
        } elseif ($img_ext == 'gif') {
            imagegif($dst, $blog_thumbnail_path);
        }

        // Free up memory
        imagedestroy($src);
        imagedestroy($dst);


         // ==============  resizing system for blog small thumbnail =======
         $blog_short_thumbnail = $request->file('blog_short_thumbnail');
         $name_gen = hexdec(uniqid());
         $img_ext = strtolower($blog_thumbnail->getClientOriginalExtension());
         $img_name = $name_gen . '.' . $img_ext;
         $up_location = 'blog/';
         $blog_short_thumbnail_path = $up_location . $img_name;
 
         // Create image resource from the uploaded file
         list($width, $height) = getimagesize($blog_short_thumbnail);
         $new_width = 120;
         $new_height = 120;
 
         $src = imagecreatefromstring(file_get_contents($blog_short_thumbnail));
         $dst = imagecreatetruecolor($new_width, $new_height);
 
         // Resize the image
         imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
 
         // Save the resized image
         if ($img_ext == 'jpg' || $img_ext == 'jpeg') {
             imagejpeg($dst, $blog_short_thumbnail_path);
         } elseif ($img_ext == 'png') {
             imagepng($dst, $blog_short_thumbnail_path);
         } elseif ($img_ext == 'gif') {
             imagegif($dst, $blog_short_thumbnail_path);
         }
 
         // Free up memory
         imagedestroy($src);
         imagedestroy($dst);

        Blog::create([
            'title' => $request->title,
            'author_id' => $request->author_id,
            'short_description'=>$request->short_description,
            'keyword'=>$request->keyword,
            'content'=>$request->content,
            'blog_category'=>$request->blog_category,
            'blog_thumbnail'=>$blog_thumbnail_path,
            'blog_short_thumbnail' => $blog_short_thumbnail_path,

        ]);

        return Redirect()->back()->with('success','Blog Created Successfully');
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
        $blog = Blog::find($id);
        if($blog){
            $authors = BlogAuthor::all();
            $blog_category = BlogCategory::all();
            return view('admin.blogs.edit',compact('blog_category','authors','blog'));
        }
        else{
            return Redirect()->back()->with('success','Something went wrong!');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $blog = Blog::find($id);
        if($blog){
            $validated = $request->validate([
                'title' => 'nullable|max:255',
                'author_id' => 'nullable|max:255',
                'short_description' => 'required|string',
                'keyword' => 'nullable',
                'content' => 'nullable',
                'blog_category' =>'nullable|string',
                'blog_thumbnail' => 'nullable|mimes:jpg,jpeg,png,webp',
                'blog_short_thumbnail' => 'nullable|mimes:jpg,jpeg,png,webp',
                

                
                ]
            );

            

            // ==============  resizing system for blog thumbnail =======
            $blog_thumbnail = $request->file('blog_thumbnail');
            $blog_thumbnail_path = $blog->blog_thumbnail;
            if($blog_thumbnail){
                $name_gen = hexdec(uniqid());
                $img_ext = strtolower($blog_thumbnail->getClientOriginalExtension());
                $img_name = $name_gen . '.' . $img_ext;
                $up_location = 'blog/';
                $blog_thumbnail_path = $up_location . $img_name;
    
                // Create image resource from the uploaded file
                list($width, $height) = getimagesize($blog_thumbnail);
                $new_width = 850;
                $new_height = 566;
    
                $src = imagecreatefromstring(file_get_contents($blog_thumbnail));
                $dst = imagecreatetruecolor($new_width, $new_height);
    
                // Resize the image
                imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
    
                // Save the resized image
                if ($img_ext == 'jpg' || $img_ext == 'jpeg') {
                    imagejpeg($dst, $blog_thumbnail_path);
                } elseif ($img_ext == 'png') {
                    imagepng($dst, $blog_thumbnail_path);
                } elseif ($img_ext == 'gif') {
                    imagegif($dst, $blog_thumbnail_path);
                }
    
                // Free up memory
                imagedestroy($src);
                imagedestroy($dst);
            }


            // ==============  resizing system for blog small thumbnail =======
            $blog_short_thumbnail = $request->file('blog_short_thumbnail');
            $blog_short_thumbnail_path = $blog->blog_short_thumbnail;
            if ($blog_short_thumbnail) {
                $name_gen = hexdec(uniqid());
                $img_ext = strtolower($blog_thumbnail->getClientOriginalExtension());
                $img_name = $name_gen . '.' . $img_ext;
                $up_location = 'blog/';
                $blog_short_thumbnail_path = $up_location . $img_name;
        
                // Create image resource from the uploaded file
                list($width, $height) = getimagesize($blog_short_thumbnail);
                $new_width = 120;
                $new_height = 120;
        
                $src = imagecreatefromstring(file_get_contents($blog_short_thumbnail));
                $dst = imagecreatetruecolor($new_width, $new_height);
        
                // Resize the image
                imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        
                // Save the resized image
                if ($img_ext == 'jpg' || $img_ext == 'jpeg') {
                    imagejpeg($dst, $blog_short_thumbnail_path);
                } elseif ($img_ext == 'png') {
                    imagepng($dst, $blog_short_thumbnail_path);
                } elseif ($img_ext == 'gif') {
                    imagegif($dst, $blog_short_thumbnail_path);
                }
        
                // Free up memory
                imagedestroy($src);
                imagedestroy($dst);
            }
            

            $blog->update([
                'title' => $request->title,
                'author_id' => $request->author_id,
                'short_description'=>$request->short_description,
                'keyword'=>$request->keyword,
                'content'=>$request->content,
                'blog_category'=>$request->blog_category,
                'blog_thumbnail'=>$blog_thumbnail_path,
                'blog_short_thumbnail' => $blog_short_thumbnail_path,

            ]);

            return Redirect()->back()->with('success','Blog updated Successfully');

        }
        else{
            return Redirect()->back()->with('success','Something went wrong!');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $blog = Blog::find($id);
        if($blog){
            $blog_thumbnail = $blog->blog_thumbnail;
            if($blog_thumbnail){
                unlink($blog_thumbnail);

            }
            $blog_short_thumbnail = $blog->blog_short_thumbnail;
            if($blog_short_thumbnail){
                unlink($blog_short_thumbnail);

            }
            $blog->delete();
            return Redirect()->back()->with('success','Blog Deleted Successfully');

        }
        else{
            return Redirect()->back()->with('success','Something went wrong!');
        }
    }
}
