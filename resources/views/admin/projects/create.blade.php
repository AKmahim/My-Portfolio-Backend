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
                    <input type="text" name="project_title" value="{{ old('project_title') }}" required class="form-control" id="floatingInput" placeholder="Blog Title">
                    <label for="floatingInput">Blog Title</label>
                    @error('project_title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <div class="mb-3">
                    <label for="formFile" class="form-label text-center">Project Picture</label>
                    <input name="project_picture" class="form-control bg-dark" type="file" id="formFile" required>
                    @error('project_picture')
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
                    <input type="text" name="demo_link" value="{{ old('demo_link') }}"  class="form-control" id="floatingInput" placeholder="Demo Link">
                    <label for="floatingInput">Demo Link</label>
                    @error('demo_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="video_link" value="{{ old('video_link') }}"  class="form-control" id="floatingInput" placeholder="Video Link">
                    <label for="floatingInput">Video Link</label>
                    @error('video_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="code_link" value="{{ old('code_link') }}"  class="form-control" id="floatingInput" placeholder="Code Link">
                    <label for="floatingInput">Code Link</label>
                    @error('code_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
               
                <div class="my-3 d-flex flex-wrap gap-4" style="color: white;">
                    @foreach ($project_category as $item)
                        <div class="form-check">
                            <input name="project_category[]" class="form-check-input" type="checkbox" value="{{$item->category_name}}" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{$item->category_name}}
                            </label>
                        </div>
                    @endforeach
                    @error('project_category')
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