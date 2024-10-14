@extends('layouts.admin-master')

@section('meta-title')
    <title>MM - Admin | Projects </title>
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
           <livewire:ProjectSearch />
        </div>
    </div>
@endsection