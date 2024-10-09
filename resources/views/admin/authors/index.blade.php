@extends('layouts.admin-master')

@section('meta-title')
    <title>XRI - Admin | Author </title>
@endsection

@section('style')
<link href="{{ asset('admin') }}/css/author-card.css" rel="stylesheet">
    
@endsection




@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="d-flex justify-content-between row">
            <div class="col-sm-12 col-xl-12 bg-secondary text-center rounded p-4 mb-4">
                 @if(session('success')) 
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <i class="fa fa-exclamation-circle me-2"></i> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    
                @endif
                <section>
                    <div class="container">
                        <div class="row">
                        <h1 class="h1 text-center" id="pageHeaderTitle">Blog Author</h1>
                            @foreach ($authors as $item)
                                <div class="col-md-4">
                                    <div class="card profile-card-2">
                                        <div class="card-img-block">
                                            <img class="img-fluid" src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="Card image cap">
                                        </div>
                                        <div class="card-body pt-5">
                                            <img src="{{asset($item->profile_pic)}}" alt="profile-image" class="profile"/>
                                            <h5 class="card-title">{{$item->name}}</h5>
                                            <p class="card-text">{{$item->bio}}</p>
                                            <div class="icon-block">
                                                @if ($item->fb_link)
                                                    <a href="{{$item->fb_link}}" target="_blank"><i class="ri-facebook-fill"></i></a>
                                                @endif
                                                @if ($item->linkedin_link)
                                                    <a href="{{$item->linkedin_link}}" target="_blank"><i class="ri-linkedin-box-fill"></i></a> 
                                                @endif
                                                @if ($item->twitter_link)
                                                    <a href="{{$item->twitter_link}}" target="_blank"><i class="ri-twitter-fill"></i></a>
                                                @endif

                                                @if ($item->instagram_link)
                                                    <a href="{{$item->instagram_link}}" target="_blank"><i class="ri-instagram-line"></i></a> 
                                                @endif

                                                @if ($item->youtube_link)
                                                <a href="{{$item->youtube_link}}" target="_blank"><i class="ri-youtube-fill"></i></a>
                                                @endif

                                                <div class="dropdown">
                                                    <button class="dropbtn"><i class="ri-menu-line"></i></i></button>
                                                    <div class="dropdown-content">
                                                        {{-- <a href="{{url('/admin/authors/show/'.$item->id)}}" class="dropdown-item " >View Details</a> --}}
                                                        <a href="{{url('/admin/author/edit/'.$item->id)}}" class="dropdown-item ">Update Info</a>
                                                        <a href="{{url('/admin/author/delete/'.$item->id)}}" class="dropdown-item ">Delete Acc.</a>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <p class="mt-3 w-100 float-left text-center"><strong>Social Profile Card</strong></p> --}}
                                </div>
                            @endforeach

                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection