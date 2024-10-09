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
            <h2 class="mb-1 text-center">Update Author Account Info</h2>
            <br>
            
            <form action="{{ url('/admin/author/update/'.$author->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-floating mb-3">
                    <input type="text" name="name" value="{{$author->name}}"  class="form-control" id="floatingInput"
                        placeholder="full name">
                    <label for="floatingInput">Author Full Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="designation" {{$author->designation}}  class="form-control" id="floatingInput"
                        placeholder="Designation">
                    <label for="floatingInput">Designation</label>
                </div>
                <div class="mb-3">
                    <img src="{{asset($author->profile_pic)}}" alt="" width="50" height="50" style="border-radius: 10px" srcset="">
                    <label for="formFile" class="form-label text-center">Author Profile Picture (size-> 120x120)</label>
                    <input name="profile_pic" class="form-control bg-dark" type="file" id="formFile" >
                </div>
                <div class="form-floating mb-3">
                    <textarea name="bio"  class="form-control" rows="50" value="{{$author->bio}}"> {{ old('bio', $author->bio) }}
                    </textarea>
                    <label for="floatingInput">Author Bio</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="fb_link"  class="form-control" id="floatingInput" value="{{$author->fb_link}}"
                        placeholder="Facebook Link">
                    <label for="floatingInput">Facebook Link</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="linkedin_link"  class="form-control" id="floatingInput" value="{{$author->linkedin_link}}"
                        placeholder="Linkedin Link">
                    <label for="floatingInput">Linkedin Link</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="twitter_link"  class="form-control" id="floatingInput" value="{{$author->twitter_link}}"
                        placeholder="Twitter Link">
                    <label for="floatingInput">Twitter Link</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="instagram_link"  class="form-control" id="floatingInput" value="{{$author->instagram_link}}"
                        placeholder="Instagram Link">
                    <label for="floatingInput">Instagram Link</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="youtube_link"  class="form-control" id="floatingInput" value="{{$author->youtube_link}}"
                        placeholder="Youtube Link">
                    <label for="floatingInput">Youtube Link</label>
                </div>
                
                
                

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>







            <!-- summernote css/js -->
            <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
            <script type="text/javascript">
                $('#summernote').summernote({
                    height: 400
                });
            </script>

        </div>
    </div>
    {{-- ---- product upload -- = --}}

@endsection