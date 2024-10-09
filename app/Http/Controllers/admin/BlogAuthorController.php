<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogAuthor;

class BlogAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $authors = BlogAuthor::all();
        return view('admin.authors.index',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 'name',
        //     'designation',
        //     'profile_pic',
        //     'bio',
        //     'fb_link',
        //     'linkedin_link',
        //     'twitter_link',
        //     'instagram_link',
        //     'youtube_link',
        $validated = $request->validate([
                'name' => 'required|max:255',
                'designation' => 'required|max:255',
                'bio' => 'required|',
                'profile_pic' => 'required|mimes:jpg,jpeg,png,webp',
                'fb_link' => 'string|nullable',
                'linkedin_link' => 'string|nullable',
                'twitter_link' => 'string|nullable',
                'instagram_link' => 'string|nullable',
                'youtube_link' => 'string|nullable',

                
            ]
        );
       
        // ==============  resizing system for author profile pic =======
        $profile_img = $request->file('profile_pic');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($profile_img->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'admin/img/author/';
        $profile_img_path = $up_location . $img_name;

        // Create image resource from the uploaded file
        list($width, $height) = getimagesize($profile_img);
        $new_width = 120;
        $new_height = 120;

        $src = imagecreatefromstring(file_get_contents($profile_img));
        $dst = imagecreatetruecolor($new_width, $new_height);

        // Resize the image
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

        // Save the resized image
        if ($img_ext == 'jpg' || $img_ext == 'jpeg') {
            imagejpeg($dst, $profile_img_path);
        } elseif ($img_ext == 'png') {
            imagepng($dst, $profile_img_path);
        } elseif ($img_ext == 'gif') {
            imagegif($dst, $profile_img_path);
        }

        // Free up memory
        imagedestroy($src);
        imagedestroy($dst);
        


        BlogAuthor::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'profile_pic' =>$profile_img_path,
            'bio' => $request->bio,
            'fb_link' => $request->fb_link,
            'linkedin_link' => $request->linkedin_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
            'youtube_link' => $request->youtube_link,

        ]);

        return Redirect()->back()->with('success','Blog Author Account Created Successfully');
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
        $author = BlogAuthor::find($id);
        if($author){
            return view('admin.authors.update',compact('author'));
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
        
        $author = BlogAuthor::find($id);
        // return $author;
        if($author){
             $validated = $request->validate([
                'name' => 'nullable|max:255',
                'designation' => 'nullable|max:255',
                'bio' => 'nullable|',
                'profile_pic' => 'nullable|mimes:jpg,jpeg,png,webp',
                'fb_link' => 'string|nullable',
                'linkedin_link' => 'string|nullable',
                'twitter_link' => 'string|nullable',
                'instagram_link' => 'string|nullable',
                'youtube_link' => 'string|nullable',

                
            ]);

            // ============== without resizing system =======
            $profile_img = $request->file('profile_pic');
            $profile_img_path = $author->profile_pic;
            if($profile_img){
                $old_img = $author->profile_pic;
                if($old_img){
                    unlink($old_img);
                }

                $name_gen = hexdec(uniqid());
                $img_ext = strtolower($profile_img->getClientOriginalExtension());
                $img_name = $name_gen . '.' . $img_ext;
                $up_location = 'admin/img/author/';
                $profile_img_path = $up_location . $img_name;
    
                // Create image resource from the uploaded file
                list($width, $height) = getimagesize($profile_img);
                $new_width = 120;
                $new_height = 120;
    
                $src = imagecreatefromstring(file_get_contents($profile_img));
                $dst = imagecreatetruecolor($new_width, $new_height);
    
                // Resize the image
                imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
    
                // Save the resized image
                if ($img_ext == 'jpg' || $img_ext == 'jpeg') {
                    imagejpeg($dst, $profile_img_path);
                } elseif ($img_ext == 'png') {
                    imagepng($dst, $profile_img_path);
                } elseif ($img_ext == 'gif') {
                    imagegif($dst, $profile_img_path);
                }
    
                // Free up memory
                imagedestroy($src);
                imagedestroy($dst);

            }
            


            $author->update([
                'name' => $request->name,
                'designation' => $request->designation,
                'profile_pic' =>$profile_img_path,
                'bio' => $request->bio,
                'fb_link' => $request->fb_link,
                'linkedin_link' => $request->linkedin_link,
                'twitter_link' => $request->twitter_link,
                'instagram_link' => $request->instagram_link,
                'youtube_link' => $request->youtube_link,

            ]);

            return Redirect()->back()->with('success','Blog Author Account Info Update Successfully');

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
        $author = BlogAuthor::find($id);
        if($author){
            $old_img = $author->profile_pic;
            if($old_img){
                unlink($old_img);

            }
            $author->delete();
            return Redirect()->back()->with('success','Blog Author Deleted');

        }
        else{
            return Redirect()->back()->with('success','Something went wrong!');
        }
    }
}
