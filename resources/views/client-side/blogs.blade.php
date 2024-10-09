@extends('layouts.client-master')

@section('meta-title')
 <!-- Primary Meta Tags -->
 <title>XR Interactive - Our Blogs | Your Interactive Solutions</title>
 <meta name="title" content="XR Interactive - Our Blogs | Your Interactive Solutions" />
 <meta name="description" content="We are a dynamic and forward-thinking IT company specializing in cutting-edge technologies such as Virtual Reality (VR), Augmented Reality (AR), Mobile Game Development, Artificial Intelligence (AI), Internet of Things (IoT) and comprehensive Web Solutions." />
 
 <!-- Open Graph / Facebook -->
 <meta property="og:type" content="website" />
 <meta property="og:url" content="https://xri.com.bd/" />
 <meta property="og:title" content="XR Interactive - Our Blogs | Your Interactive Solutions" />
 <meta property="og:description" content="We are a dynamic and forward-thinking IT company specializing in cutting-edge technologies such as Virtual Reality (VR), Augmented Reality (AR), Mobile Game Development, Artificial Intelligence (AI), Internet of Things (IoT) and comprehensive Web Solutions." />
 <meta property="og:image" content="https://xri.com.bd/frontend/images/components/img-3.png" />
 
 <!-- Twitter -->
 <meta property="twitter:card" content="summary_large_image" />
 <meta property="twitter:url" content="https://xri.com.bd/" />
 <meta property="twitter:title" content="XR Interactive - Our Blogs | Your Interactive Solutions" />
 <meta property="twitter:description" content="We are a dynamic and forward-thinking IT company specializing in cutting-edge technologies such as Virtual Reality (VR), Augmented Reality (AR), Mobile Game Development, Artificial Intelligence (AI), Internet of Things (IoT) and comprehensive Web Solutions." />
 <meta property="twitter:image" content="https://xri.com.bd/frontend/images/components/img-3.png" />
 <meta name="keywords" content="IT company,AR development company bangladesh,WebAR,VR , VR game, AR Game,XR Interactive, XRI,xri, Game Company, Web developer,game engineer,">
 <meta name="robots" content="index, follow">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta name="language" content="English">
 <meta name="revisit-after" content=" days">
 <meta name="author" content="XR Interactive">
    
@endsection


@section('content')
<div id="content">
<div class="breadcrum pt-80 pb-80">
      <div class="bg-img"> <img src="{{asset('frontend')}}/images/slider/breadcrum.png" alt=""/></div>
      <div class="container"> 
        <div class="row flex-center">
          <div class="col-lg-7 col-md-8 col-sm-10">
            <div class="heading-nav flex-center gap-8"><a class="hover-underline caption1 text-placehover" href="{{url('/')}}">Home </a><i class="ph-fill ph-dot-outline text-purple"></i>
              <div class="caption1 text-white">Blog</div>
            </div>
            <div class="text-nav text-center mt-12">
              <div class="heading3 text-white text-center display-inline-block">Blog
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="46" viewbox="0 0 38 46" fill="none">
                  <path d="M10.1501 28.6324C13.835 25.1233 24.0331 16.9879 35.3457 12.5187M13.8035 40.7067C17.0357 40.4323 25.4105 40.4869 33.0524 42.9013M2.95566 19.8167C4.12796 16.7921 7.85358 9.29141 13.3777 3.48513" stroke="#7D3CF3" stroke-width="5" stroke-linecap="round"></path>
                </svg>
              </div>
              <div class="sub-heading mt-8 text-white text-center fw-400">
                Inovation Will Never Be The Same
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="blog-list pt-100 pb-100">
<div class="container"> 
  <div class="row row-gap-40">
    <div class="col-12 col-lg-8 d-flex flex-column row-gap-40">
      {{-- ================================ blog post ============================ --}}
      @foreach ($blogs as $blog)
        <a class="blog-item item-filter" href="{{url("/blog/".$blog->slug)}}" data-name="tab-one">
          <div class="bg-img w-100 overflow-hidden bora-16">
            <img class="w-100 h-100 d-block" src="{{asset($blog->blog_thumbnail)}}" alt=""/>
          </div>
          <div class="blog-infor mt-24">
            <div class="text-button-uppercase pt-6 pb-6 pl-16 pr-16 bg-line-dark bora-16 d-inline-block bg-purple"> {{$blog->blog_category}} </div>
            <div class="title">
              <div class="heading5 mt-12"> {{$blog->title}} </div>
            </div>
            <div class="flex-item-center gap-8 mt-8 flex-wrap">
              <div class="author text-placehover">by <span class="text-white">{{$blog?->author?->name}} </span></div><i class="ph-fill ph-dot-outline text-placehover d-block"></i>
              <div class="caption1 text-placehover">{{ \Carbon\Carbon::parse($blog->created_at)->format('D, M jS Y') }}</div>
              <div class="cmt flex-item-center"><i class="ph-fill ph-dot-outline text-placehover d-block"></i><i class="ph ph-chats text-placehover fs-24 pl-8"></i>
                <div class="caption2 text-placehover pl-4">{{$blog->comment_count}} comments</div>
              </div>
            </div>
            <div class="body2 text-placehover mt-8 pb-12">{{$blog->short_description}}…</div>
            <div class="read fw-700 text-underline text-purple-hover">Read More</div>
          </div>
        </a>
          
      @endforeach
        
      {{-- ============================= pagination ======================== --}}
      <div class="list-nav-number flex-item-center gap-8">
        <!-- Previous Button -->
        @if ($blogs->previousPageUrl())
            <a class="nav-item bora-50 flex-center" href="{{ $blogs->previousPageUrl() }}">
                <i class="ph ph-caret-left text-white"></i>
            </a>
        @else
            <span class="nav-item bora-50 flex-center disabled">
                <i class="ph ph-caret-left text-white"></i>
            </span>
        @endif
    
        <!-- Page Number Links -->
        @foreach ($blogs->links() as $link)
            @if ($link['url'])
                <a class="nav-item bora-50 flex-center {{ $link['active'] ? 'active' : '' }}" href="{{ $link['url'] }}">
                    {!! $link['label'] !!}
                </a>
            @endif
        @endforeach
    
        <!-- Next Button -->
        @if ($blogs->nextPageUrl())
            <a class="nav-item bora-50 flex-center" href="{{ $blogs->nextPageUrl() }}">
                <i class="ph ph-caret-right text-white"></i>
            </a>
        @else
            <span class="nav-item bora-50 flex-center disabled">
                <i class="ph ph-caret-right text-white"></i>
            </span>
        @endif
    </div>
    
    
    </div>

    {{-- =============================== right side navbar ================ --}}
    <div class="col-12 col-lg-4 pl-65">
      {{-- <div class="search-block bora-44 overflow-hidden">
        <input class="bg-line-dark w-100" type="text" placeholder="Search"/><i class="ph ph-magnifying-glass"></i>
      </div> --}}
      @php
          $recent_blogs = App\Models\Blog::latest()->take(5)->get();
          $blog_category = App\Models\BlogCategory::all();
      @endphp
      <div class="tags-popular-block mt-40">
        <div class="heading7 pb-12 border-underline">Popular Tags</div>
        <div class="list-tag mt-24 d-flex flex-wrap gap-12">
          @foreach ($blog_category as $item)
            <a class="text-button-uppercase pt-6 pb-6 pl-16 pr-16 bg-line-dark bora-16 transition-0-3s" href="{{url('blogs/category/'.$item->category_name)}}">{{$item->category_name}}</a>
          @endforeach
         
        </div>
      </div>
      <div class="recent-post-block mt-40">
        <div class="heading7 pb-12 border-underline">Recent Posts</div>
        <div class="list-recent-post mt-24">
          @foreach ($recent_blogs as $item)
            <div class="recent-post-item d-flex item-start gap-16 mt-24">
              <a class="item-img bora-8 d-block" href="{{url('blog/'.$item->slug)}}"><img class="d-block" src="{{asset($item->blog_short_thumbnail)}}" alt=""/></a>
              <div class="item-infor"><a href="{{url('blog/'.$item->slug)}}">
                  <div class="text-button transition-0-3s">{{$item->title}}</div>
                  <div class="caption1 text-placehover">{{ \Carbon\Carbon::parse($item->created_at)->format('D, M jS Y') }}</div></a></div>
            </div>
              
          @endforeach
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div id="preload"> 
<div class="main-content flex-center">
  <div class="circle flex-center"><span></span>
    <div class="circle-child"></div>
  </div>
  <div class="circle flex-center"></div>
</div>
</div>
<a class="scroll-to-top-btn" href="#header"><i class="ph-bold ph-caret-up"></i></a>
</div>
@endsection