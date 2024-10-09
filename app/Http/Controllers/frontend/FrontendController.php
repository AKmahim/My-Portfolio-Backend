<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class FrontendController extends Controller
{
    //index page controller 
    public function Index(){
        return view('client-side.index');
    }

    //about page controller
    public function About(){
        return view('client-side.about');
    }

    //contact page
    public function Contact(){
        return view('client-side.contact');
    }

    //blogs list page
    public function Blogs(){
        $blogs = Blog::latest()->paginate(10);
        // return gettype($blogs->data);
        return view('client-side.blogs',compact('blogs'));
    }

    // blogs page by category
    public function BlogsByCategory($category){
        $blogs = Blog::where('blog_category',$category)->latest()->paginate(10);
        return view('client-side.blogs',compact('blogs'));

    }

    //blog details page
    public function BlogDetails($slug){ 
        // return $slug;

        $blog = Blog::where('slug', $slug)->with('comments')->firstOrFail();
        // return $blog;

        return view('client-side.blog-details',compact('blog'));
    }

    
}
