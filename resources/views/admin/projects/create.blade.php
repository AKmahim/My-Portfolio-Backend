@extends('layouts.admin-master')

@section('meta-title')
    <title>MM - Admin | Create Project </title>
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
            <h2 class="mb-1 text-center">Create Project</h2>
            <br>

            <form action="{{ url('/admin/projects/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="form-floating mb-3">
                    <input type="text" name="project_title" value="{{ old('title') }}" required class="form-control" id="floatingInput" placeholder="Blog Title">
                    <label for="floatingInput">Blog Title</label>
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div>
                    <h4>Select Author:</h4>
                    <select name="author_id" required class="form-select mb-3" aria-label="Default select example">
                        <option selected disabled>Open this select menu and select an author</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                        @endforeach
                    </select>
                    @error('author_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="form-floating mb-3">
                    <textarea name="short_description" required class="form-control" rows="3">{{ old('short_description') }}</textarea>
                    <label for="floatingInput">Short Description</label>
                    @error('short_description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="form-floating mb-3">
                    <input type="text" name="keyword" value="{{ old('keyword') }}" class="form-control" id="floatingInput" placeholder="SEO Keyword">
                    <label for="floatingInput">SEO Keyword</label>
                    @error('keyword')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div>
                    <h4>Select Blog Category:</h4>
                    <select name="blog_category" required class="form-select mb-3" aria-label="Default select example">
                        <option selected disabled>Open this select menu and select a blog category</option>
                        @foreach ($blog_category as $category)
                            <option value="{{ $category->category_name }}" {{ old('blog_category') == $category->category_name ? 'selected' : '' }}>{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    @error('blog_category')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="formFile" class="form-label text-center">Blog Thumbnail - size(850x566)</label>
                    <input name="blog_thumbnail" class="form-control bg-dark" type="file" id="formFile" required>
                    @error('blog_thumbnail')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="formFile" class="form-label text-center">Blog Small Thumbnail - size(120x120)</label>
                    <input name="blog_short_thumbnail" class="form-control bg-dark" type="file" id="formFile" required>
                    @error('blog_short_thumbnail')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="form-floating mb-3">
                    <h2>Blog Content</h2>
                    <textarea class="form-control" required name="content" id="summernote" style="background: #121214">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
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