@extends('layouts.admin-master')

@section('meta-title')
    <title>MM - Admin | Edit Project Info </title>
@endsection


@section('content')
    {{-- ---- product upload -- = --}}
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4 row">
            @if(session('success')) 
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <i class="fa fa-exclamation-circle me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
            @endif
            <h2 class="mb-1 text-center">Edit Project</h2>
            <div class="col-xl-12">
                <form action="{{ url('/admin/projects/update/'.$project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
    
                    <div class="form-floating mb-3">
                        <input type="text" name="project_title" value="{{ $project->project_title }}" required class="form-control" id="floatingInput" placeholder="Project Title">
                        <label for="floatingInput">Project Title</label>
                        @error('project_title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="formFile" class="form-label text-center">Project Picture</label>
                        <input name="project_picture" class="form-control bg-dark" type="file" id="formFile" >
                        <br>
                        @if ($project->project_picture)
                            <img src="{{asset($project->project_picture)}}" width="50" height="80" alt="" srcset="">
                        @endif
                        @error('project_picture')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="form-floating mb-3">
                        <textarea name="short_description" required class="form-control" style="height: 200px;">{{ $project->short_description }}</textarea>
                        <label for="floatingInput">Short Description</label>
                        @error('short_description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="form-floating mb-3">
                        <input type="text" name="demo_link" value="{{ $project->demo_link }}"  class="form-control" id="floatingInput" placeholder="Demo Link">
                        <label for="floatingInput">Demo Link</label>
                        @error('demo_link')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="form-floating mb-3">
                        <input type="text" name="video_link" value="{{ $project->video_link }}"  class="form-control" id="floatingInput" placeholder="Video Link">
                        <label for="floatingInput">Video Link</label>
                        @error('video_link')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="form-floating mb-3">
                        <input type="text" name="code_link" value="{{ $project->code_link }}"  class="form-control" id="floatingInput" placeholder="Code Link">
                        <label for="floatingInput">Code Link</label>
                        @error('code_link')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="project_serial" value="{{ $project->project_serial }}"  class="form-control" id="floatingInput" placeholder="project serial">
                        <label for="floatingInput">Project Serial</label>
                        @error('project_serial')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    @php
                        $json_project_category = json_decode($project->project_category, true); // Decode as an associative array
                    @endphp
    
                    <div class="my-3 d-flex flex-wrap gap-4" style="color: white;">
                        @foreach ($project_category as $item)
                            <div class="form-check">
                                <input 
                                    name="project_category[]" 
                                    class="form-check-input" 
                                    type="checkbox" 
                                    value="{{ $item->category_name }}" 
                                    id="flexCheck{{ $loop->index }}"
                                    @if (in_array($item->category_name, $json_project_category)) 
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="flexCheck{{ $loop->index }}">
                                    {{ $item->category_name }}
                                </label>
                            </div>
                        @endforeach
    
                        @error('project_category')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
    
                        
                        
    
    
                
                   
                   
    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            








        </div>
    </div>
    {{-- ---- product upload -- = --}}

@endsection