@extends('layouts.admin-master')

@section('meta-title')
    <title>XRI - Admin | Blog </title>
@endsection

@section('style')
<link href="{{ asset('admin') }}/css/custom-blog-card.css" rel="stylesheet">
<link href="{{ asset('admin') }}/css/project-card.css" rel="stylesheet">
<link href="{{ asset('admin') }}/css/author-card.css" rel="stylesheet">
    
@endsection


@php
    $color_list = array('red','blue','yellow','green');
@endphp

@section('content')
    <div class="container-fluid pt-4 ">
        @if(session('success')) 
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
                    
        @endif
        <div class="bg-secondary py-4 mx-2 px-4">
           <h3 style="text-align: center" class="mb-4">My Project</h3>
           <div class="row">
                @foreach ($projects as $project)
                    <div class="col-sm-1 col-md-2 col-xl-4 ">
                        <div class="project-card">
                            <!-- project image section -->
                            <div class="project-image">
                                <img class="project-img" src="{{asset($project->project_picture)}}" alt="Project Image">
                            </div>
                            <!-- project details section -->
                            <div class="project-details">
                                <!-- info -->
                                <div class="project-info">
                                    <h1 class="project-title">{{$project->project_title}}</h1>
                                    <p class="project-description">
                                        {{$project->short_description}}
                                    </p>
                                    <!-- important link -->
                                    <div class="project-links">
                                        @if($project->demo_link)
                                            <a class="project-button" href="{{ $project->demo_link }}" target="_blank">Demo</a>
                                        @endif
                                    
                                        @if($project->video_link)
                                            <a class="project-button" href="{{ $project->video_link }}" target="_blank">Video</a>
                                        @endif
                                    
                                        @if($project->code_link)
                                            <a class="project-button" href="{{ $project->code_link }}" target="_blank">Code</a>
                                        @endif
                                    
                                        <div class="dropdown ">
                                            <button class="dropbtn"><i class="ri-menu-line"></i></button>
                                            <div class="dropdown-content">
                                                {{-- Uncomment the view details link if needed --}}
                                                {{-- <a href="{{ url('/admin/authors/show/'.$item->id) }}" class="dropdown-item">View Details</a> --}}
                                                <a href="{{ url('/admin/projects/edit/'.$project->id) }}" class="dropdown-item">Update Info</a>
                                                <a href="{{ url('/admin/projects/delete/'.$project->id) }}" class="dropdown-item">Delete Project</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @if(!$project->code_link)
                                        <p class="source-warning">
                                            <span>⚠️</span> Source code is private for commercial issue
                                        </p>
                                    @endif
                                    
                                </div>
                                <!-- footer -->
                                <div class="project-footer">
                                    <a href="#" class="project-tag"># CSS</a>
                                    <a href="#" class="project-tag"># JavaScript</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                @endforeach
                
                
           </div>
        </div>
    </div>
@endsection