@extends('layouts.client-master')

@section('meta-title')
 <!-- Primary Meta Tags -->
 <title>XR Interactive - {{$blog->title}}</title>
 <meta name="title" content="XR Interactive - {{$blog->title}}" />
 <meta name="description" content="{{$blog->short_description}}" />
 
 <!-- Open Graph / Facebook -->
 <meta property="og:type" content="website" />
 <meta property="og:url" content="https://xri.com.bd/" />
 <meta property="og:title" content="XR Interactive - {{$blog->title}}" />
 <meta property="og:description" content="{{$blog->description}}" />
 <meta property="og:image" content="{{asset($blog->blog_thumbnail)}}" />
 
 <!-- Twitter -->
 <meta property="twitter:card" content="summary_large_image" />
 <meta property="twitter:url" content="https://xri.com.bd/" />
 <meta property="twitter:title" content="XR Interactive - {{$blog->title}}" />
 <meta property="twitter:description" content="{{$blog->description}}" />
 <meta property="twitter:image" content="{{asset($blog->blog_thumbnail)}}" />
 <meta name="keywords" content="{{$blog->keyword}}">
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
<div class="blog-detail blog-list pt-100">
<div class="container"> 
  <div class="row row-gap-60">
    <div class="col-12 col-lg-8">
      <div class="heading flex-item-center gap-8 flex-wrap">
        <div class="caption1 text-white">New</div><i class="ph-fill ph-dot-outline text-white d-block"></i>
        <div class="caption1 text-white">Blog</div>
      </div>
      <div class="blog-title mt-20">
        {{-- ======================================== blog category ======================= --}}
        <div class="text-button-uppercase pt-6 pb-6 pl-16 pr-16 bg-purple bora-16 d-inline-block transition-0-3s">{{$blog->blog_category}}</div>
        {{-- =================================== blog title ========================== --}}
        <div class="heading3 mt-12"> {{$blog->title}} </div> 
        {{-- =============================== blog author details including photo,name,post date, comment count =================== --}}
        <div class="flex-item-center gap-8 mt-20 flex-wrap">
          <div class="author flex-item-center">
            <div class="bg-img w-40 h-40 bora-50"><img class="w-100" src="{{asset($blog?->author?->profile_pic)}}" alt=""/></div>
            <div class="text-button pl-12">{{$blog?->author?->name}} </div>
          </div><i class="ph-fill ph-dot-outline text-placehover d-block"></i>
          <div class="caption1 text-placehover">{{ \Carbon\Carbon::parse($blog->created_at)->format('D, M jS Y') }}</div>
          <div class="cmt flex-item-center"><i class="ph-fill ph-dot-outline text-placehover d-block"></i><i class="ph ph-chats text-placehover fs-24 pl-8"></i>
            <div class="caption2 text-placehover pl-4">{{$blog->comment_count}} comments</div>
          </div>
        </div>
        <div class="list-social flex-item-center flex-wrap gap-16 mt-20">
          @if ($blog?->author?->fb_link)
            <a class="item flex-item-center bg-line-dark hover-bg-purple" href="{{$blog->author->fb_link}}" target="_blank"><i class="icon-facebook display-block"></i><div class="caption1">Facebook</div></a>
          @endif

          @if ($blog?->author?->linkedin_link)
          <a class="item flex-item-center bg-line-dark hover-bg-purple" href="{{$blog->author->linkedin_link}}" target="_blank"><i class="icon-linkedin fs-14 display-block"></i><div class="caption1">Linkedin</div></a>
          @endif

          @if ($blog?->author?->twitter_link)
          <a class="item flex-item-center bg-line-dark hover-bg-purple" href="{{$blog->author->twitter_link}}" target="_blank"><i class="icon-twitter fs-12 display-block"></i><div class="caption1">Twitter</div></a>
              
          @endif
          @if ($blog?->author?->instagram_link)
          <a class="item flex-item-center bg-line-dark hover-bg-purple" href="{{$blog->author->instagram_link}}" target="_blank"><i class="icon-instagram fs-14 display-block"></i><div class="caption1">Instagram</div></a>
              
          @endif
          @if ($blog?->author?->youtube_link)
              
          <a class="item flex-item-center bg-line-dark hover-bg-purple" href="{{$blog->author->youtube_link}}" target="_blank"><i class="icon-youtube fs-14 display-block"></i><div class="caption1">Youtube</div></a>
          @endif
        </div>
      </div>
        {{-- =============================== blog author details including photo,name,post date, comment count end =================== --}}

        <div class="blog-content mt-40"> 
        {{-- ====================================== blog content ========================= --}}
       
  
          <div >
              {!! $blog->content !!}
          </div>

      
      
      </div>
      
      {{-- ============================= post share section end ================ --}}

      {{-- ================================= comment section ======================= --}}
      <div class="blog-comment mt-40">
        <div class="heading flex-between">
          <div class="heading6">{{$blog->comment_count}} Comments </div>
          
        </div>
        
        @foreach ($blog->comments as $comment)
        <div class="list-comment mt-24">
          <div class="comment-item pb-24" data-cmt="cmt1">
            <div class="heading flex-between">
              <div class="left flex-item-center gap-16"><img class="avatar" src="{{asset('admin')}}//img/user.png" alt=""/>
                <div class="infor"> 
                  <div class="text-button">{{$comment->user}}</div>
                  <div class="caption1 text-placehover">{{$comment->created_at->diffForHumans()}}</div>
                </div>
              </div>
              <div class="right"> <i class="ph-fill ph-dots-three-outline text-placehover"></i></div>
            </div>
            <div class="content mt-12">{{$comment->comment_text}}</div>
            <div class="comment-infor flex-between mt-12">
              <div class="left flex-item-center gap-16">
                <div class="like flex-item-center pointer"><i class="ph ph-heart text-white"> </i>
                  <div class="text-button-small text-placehover pl-4">{{$comment->comment_react_count}}</div>
                </div>

              </div>

            </div>
          </div>
          

        </div>
        @endforeach
    
      </div>
      <div class="blog-form-contact mt-40">
        <div class="heading6">Leave a Comment</div>
        <form>
          <div class="row row-gap-20 mt-24">
            <div class="col-sm-6"> 
              <input class="p-16 bora-8 bg-line-dark text-white w-100" type="text" placeholder="Your name"/>
            </div>
            <div class="col-sm-6">
              <input class="p-16 bora-8 bg-line-dark text-white w-100" type="text" placeholder="Info.avitex@mail.com"/>
            </div>
            <div class="col-12">
              <textarea class="p-16 bora-8 bg-line-dark text-white" placeholder="Write comment"></textarea>
            </div>
          </div>
          <div class="checkbox flex-item-center mt-20"> 
            <input type="checkbox" name="checkbox"/>
            <div class="caption1 text-placehover pl-8">Save my name, email, and website in this browser for the next time I comment.</div>
          </div>
          <button class="button bg-purple button-purple-hover text-white mt-32"> <span> <span> </span></span><span class="bg-purple">Submit Comment</span></button>
        </form>
      </div>
    </div>

    {{-- ========================== author information section ==================== --}}
    <div class="col-12 col-lg-4 pl-65">
      <div class="author-infor"> 
        <div class="heading flex-item-center gap-20">
          <div class="bg-img"><img class="bora-50" src="{{asset($blog?->author?->profile_pic)}}" alt=""/></div>
          <div class="right"> 
            <div class="text-button">{{$blog?->author?->name}} </div>
            <div class="caption1 text-placehover mt-4">200 Follower</div>
            <a href="{{$blog?->author?->linkedin_link}}" target="_blank">
              <button class="button bg-purple button-purple-hover text-white mt-8"> <span> <span> </span></span><span class="bg-purple">Follow</span></button>

            </a>
          </div>
        </div>
        <div class="text-placehover mt-20"> {{$blog?->author?->bio}} </div>
        <div class="list-social flex-item-center gap-12">
          @if ($blog?->author?->fb_link)
            <a class="item bg-blue button-blue-hover bora-50 w-40 h-40 flex-center" href="h{{$blog->author->fb_link}}" target="_blank"><i class="icon-facebook display-block"></i></a>
            
          @endif

          @if ($blog?->author?->linkedin_link)
            <a class="item bg-blue button-blue-hover bora-50 w-40 h-40 flex-center" href="{{$blog->author->linkedin_link}}" target="_blank"><i class="icon-linkedin fs-14 display-block"></i></a>
          @endif

          @if ($blog?->author?->twitter_link)
            <a class="item bg-blue button-blue-hover bora-50 w-40 h-40 flex-center" href="{{$blog->author->twitter_link}}" target="_blank"><i class="icon-twitter fs-12 display-block"></i></a>
          @endif
          @if ($blog?->author?->instagram_link)
            <a class="item bg-blue button-blue-hover bora-50 w-40 h-40 flex-center" href="{{$blog->author->instagram_link}}" target="_blank"><i class="icon-instagram fs-14 display-block"></i></a>      
          @endif
          @if ($blog?->author?->youtube_link)
            <a class="item bg-blue button-blue-hover bora-50 w-40 h-40 flex-center" href="{{$blog->author->youtube_link}}" target="_blank"><i class="icon-youtube fs-12 display-block"></i></a>
          @endif
         
        </div>
      </div>

      @php
          $recent_blogs = App\Models\Blog::latest()->take(5)->get();
          $same_category_blogs = App\Models\Blog::where('blog_category',$blog->blog_category)->latest()->take(5)->get();
      @endphp
      {{-- ================================ recent post ============================= --}}
      <div class="recent-post-block mt-40">
        <div class="heading7 pb-12 border-underline">Recent Posts</div>
        <div class="list-recent-post mt-24">
          @foreach ($recent_blogs as $item)
            <div class="recent-post-item d-flex item-start gap-16">
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

<div class="style-blog-detail">
<div class="list-blog pt-100 pb-100">
  <div class="container"> 
    <div class="cursor flex-center gap-12"><i class="ph ph-caret-left text-white"></i><i class="ph ph-caret-right text-white"></i></div>
    <div class="heading flex-between"> 
      <div class="heading3">Our Blogs</div><a href="{{url('blogs')}}"> 
        <u class="fw-700 text-blue-hover">View All</u></a>
    </div>
    <div class="row list mt-40"> 
      @foreach ($same_category_blogs as $item)
        <div class="item">
                  <div class="blog-item bg-line-dark overflow-hidden bora-24"><a class="main-item" href="{{url('blog/'.$item->slug)}}">
                      <div class="bg-img w-100 overflow-hidden"><img class="w-100 h-100 display-block" src="{{asset($item->blog_thumbnail)}}" alt="{{$item->title}}"/></div>
                      <div class="infor p-24">
                        <div class="heading flex-item-center gap-8"> 
                          <div class="text-button-uppercase">{{$item->blog_category}}</div><i class="ph-fill ph-dot-outline text-placehover"> </i>
                          <div class="caption1 text-placehover">{{ \Carbon\Carbon::parse($item->created_at)->format('D, M jS Y') }}</div>
                        </div>
                        <div class="heading6 mt-8">{{$item->title}}</div>
                        <div class="text-placehover mt-8">{{$item->short_description}}</div>
                      </div></a>
                  </div>
        </div>
          
      @endforeach
     
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