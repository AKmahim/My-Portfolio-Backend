@extends('layouts.admin-master')

@section('meta-title')
    <title>XRI - Admin | Blog </title>
@endsection

@section('style')
<link href="{{ asset('admin') }}/css/custom-blog-card.css" rel="stylesheet">
    
@endsection


@php
    $color_list = array('red','blue','yellow','green');
@endphp

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="d-flex justify-content-between row">
            <div class="col-sm-12 col-xl-12 bg-secondary text-center rounded p-4 mb-4">
                <section class="dark">
                    <div class="container py-4">
                        <h1 class="h1 text-center" id="pageHeaderTitle">Our Blog</h1>
                        @foreach ($blogs as $blog)
                            <article class="postcard dark {{$color_list[array_rand($color_list)]}}">
                                <a class="postcard__img_link" href="#">
                                    <img class="postcard__img" src="{{asset($blog->blog_thumbnail)}}" alt="Image Title" />
                                </a>
                                <div class="postcard__text">
                                    <h1 class="postcard__title blue"><a href="#">{{$blog->title}}</a></h1>
                                    <div class="postcard__subtitle small">
                                        <time datetime="2020-05-25 12:00:00">
                                            <i class="fas fa-calendar-alt mx-2"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('D, M jS Y') }}

                                        </time>
                                    </div>
                                    <div class="postcard__bar"></div>
                                    <div class="postcard__preview-txt">{{$blog->short_description}}</div>
                                    <ul class="postcard__tagbox">
                                        <a target="_blank" href="{{url('blog/'.$blog->slug)}}"><li class="tag__item"><i class="ri-eye-line"></i></i>View</li></a>
                                        <a href="{{url('admin/blogs/edit/'.$blog->id)}}"><li class="tag__item"><i class="ri-edit-box-fill"></i>Edit</li></a>
                                        <li class="tag__item play blue">
                                            <a href="{{url('admin/blogs/delete/'.$blog->id)}}" onclick="return confirm('Are you sure you want to delete this blog?');">
                                                <i class="ri-delete-bin-fill"></i>Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach
                       
                        {{ $blogs->links('pagination::bootstrap-4') }}
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection