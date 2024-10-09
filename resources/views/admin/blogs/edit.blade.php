@extends('layouts.admin-master')

@section('meta-title')
    <title>XRI - Admin | Create Blog </title>
@endsection


@section('content')
    {{-- ---- product upload -- = --}}
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            @if(session('success')) 
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <i class="fa fa-exclamation-circle me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
            @endif
            <h2 class="mb-1 text-center">Edit Blog</h2>
            <br>

            <form action="{{ url('/admin/blogs/update/'.$blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-floating mb-3">
                    <input type="text" name="title"  class="form-control" id="floatingInput" value="{{$blog->title}}"
                        placeholder="Blog Title">
                    <label for="floatingInput">Blog Title</label>
                </div>

                <div>
                    <h4>Select Author:</h4>
                    <select name="author_id"   class="form-select mb-3" aria-label="Default select example">
                        <option value="{{$blog->author_id}}" selected>{{$blog?->author?->name}}</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                        
                    </select>
                </div>

                <div class="form-floating mb-3">
                    <textarea name="short_description"  class="form-control"  >{{$blog->short_description}}</textarea>
                    <label for="floatingInput">Short Description</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input type="text" name="keyword"  class="form-control" id="floatingInput" value="{{$blog->keyword}}"
                        placeholder="SEO keyword">
                    <label for="floatingInput">SEO Keyword</label>
                </div>
                <div>
                    <h4>Select Blog Category:</h4>
                    <select name="blog_category"  required class="form-select mb-3" aria-label="Default select example">
                        <option value="{{$blog->blog_category}}" selected> {{$blog->blog_category}} </option>
                        @foreach ($blog_category as $category)
                            <option value="{{$category->category_name}}">{{ $category->category_name }}</option>
                        @endforeach
                        
                    </select>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label text-center">Blog Thumbnail - size(850x566) </label>
                    <img src="{{asset($blog->blog_thumbnail)}}" width="312" height="266" alt="" srcset="">
                    <input name="blog_thumbnail" class="form-control bg-dark" type="file" id="formFile" >
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label text-center">Blog small Thumbnail - size(120x120) </label>
                    <img src="{{asset($blog->blog_short_thumbnail)}}" width="120" height="120" alt="" srcset="">
                    <input name="blog_short_thumbnail" class="form-control bg-dark" type="file" id="formFile" >
                </div>

                <div class="form-floating mb-3">
                    {{-- <label for="floatingInput">Product Details</label> --}}
                    <h2>Blog Content</h2>

                    <textarea class="form-control"  required name="content" id="summernote">{{$blog->content}}</textarea>
                    
                </div>
               
               

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>







            <!-- summernote css/js -->
            <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
            <script type="text/javascript">
                $('#summernote').summernote({
                    height: 400,
                    placeholder: 'Write your content here...',
                   
                    callbacks: {
                        onInit: function() {
                            // Apply your custom styles here if needed
                            $('.note-editable').css('background-color', '#121214');
                            $('.note-editable').css('color', '#ffffff');
                            $('.note-editable').css('border', 'none');
                        }
                    }
                });
            </script>

        </div>
    </div>
    {{-- ---- product upload -- = --}}

@endsection