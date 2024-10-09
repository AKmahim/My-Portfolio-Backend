@extends('layouts.client-master')


@section('meta-title')
 <!-- Primary Meta Tags -->
 <title>XR Interactive - About | Your Interactive Solutions</title>
 <meta name="title" content="XR Interactive - About | Your Interactive Solutions" />
 <meta name="description" content="We are a dynamic and forward-thinking IT company specializing in cutting-edge technologies such as Virtual Reality (VR), Augmented Reality (AR), Mobile Game Development, Artificial Intelligence (AI), Internet of Things (IoT) and comprehensive Web Solutions." />
 
 <!-- Open Graph / Facebook -->
 <meta property="og:type" content="website" />
 <meta property="og:url" content="https://xri.com.bd/" />
 <meta property="og:title" content="XR Interactive - About | Your Interactive Solutions" />
 <meta property="og:description" content="We are a dynamic and forward-thinking IT company specializing in cutting-edge technologies such as Virtual Reality (VR), Augmented Reality (AR), Mobile Game Development, Artificial Intelligence (AI), Internet of Things (IoT) and comprehensive Web Solutions." />
 <meta property="og:image" content="https://xri.com.bd/frontend/images/components/img-3.png" />
 
 <!-- Twitter -->
 <meta property="twitter:card" content="summary_large_image" />
 <meta property="twitter:url" content="https://xri.com.bd/" />
 <meta property="twitter:title" content="XR Interactive - About | Your Interactive Solutions" />
 <meta property="twitter:description" content="We are a dynamic and forward-thinking IT company specializing in cutting-edge technologies such as Virtual Reality (VR), Augmented Reality (AR), Mobile Game Development, Artificial Intelligence (AI), Internet of Things (IoT) and comprehensive Web Solutions." />
 <meta property="twitter:image" content="https://xri.com.bd/frontend/images/components/img-3.png" />
 <meta name="keywords" content="IT company,AR development company bangladesh,WebAR,VR , VR game, AR Game,XR Interactive, XRI,xri, Game Company, Web developer,game engineer,">
 <meta name="robots" content="index, follow">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta name="language" content="English">
 <meta name="revisit-after" content=" days">
 <meta name="author" content="XR Interactive">
    
@endsection


{{-- =================================================== --}}

@section('content')
<div id="content">
    <div class="breadcrum pt-80 pb-80">
      <div class="bg-img"> <img src="{{asset('frontend')}}/images/slider/breadcrum.png" alt=""/></div>
      <div class="container"> 
        <div class="row flex-center">
          <div class="col-lg-7 col-md-8 col-sm-10">
            <div class="heading-nav flex-center gap-8"><a class="hover-underline caption1 text-placehover" href="{{url('/')}}">Home </a><i class="ph-fill ph-dot-outline text-purple"></i>
              <div class="caption1 text-white">XR INTERACTIVE</div>
            </div>
            <div class="text-nav text-center mt-12">
              <div class="heading3 text-white text-center display-inline-block">About Us
                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="46" viewbox="0 0 38 46" fill="none">
                  <path d="M10.1501 28.6324C13.835 25.1233 24.0331 16.9879 35.3457 12.5187M13.8035 40.7067C17.0357 40.4323 25.4105 40.4869 33.0524 42.9013M2.95566 19.8167C4.12796 16.7921 7.85358 9.29141 13.3777 3.48513" stroke="#7D3CF3" stroke-width="5" stroke-linecap="round"></path>
                </svg>
              </div>
              <div class="sub-heading mt-8 text-white text-center fw-400">Inovation Will Never Be The Same</div>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="about-us style-about pt-80 pb-80 bg-black-surface">
<div class="container"> 
  <div class="row row-gap-40 flex-between">
    <div class="col-12 col-lg-6 flex-column row-gap-20">
      <div class="heading3"><span>Who Are We</span></p>
      </div>
      <div class="body2 text-placehover mt-16">We are a dynamic and forward-thinking IT company specializing in cutting-edge technologies such as Virtual Reality (VR), Augmented Reality (AR), Mobile Game Development, Artificial Intelligence (AI), Internet of Things (IoT) and comprehensive Web Solutions.</div>
      <div class="body2 text-placehover mt-16">In 2011, we embarked on our journey as CPSD Technologies Ltd. Our initial vision was to establish a comprehensive solution hub for our clients. In 2022, we realized this vision by consolidating all our expertise and capabilities under one roof. Today, our team comprises over 37 full-time staff members, bringing diverse backgrounds in education, culture, and work experiences. Our innovative approach, commitment to teamwork, and extensive experience collaborating with both local and global partners have significantly strengthened our ability to deliver top-notch services.</div>

      <!-- <div class="list-service mt-32">
        <div class="service-item flex-item-center"><i class="ph-bold ph-check text-purple fs-24"> </i>
          <div class="heading7 pl-12">Free Live Chat Software</div>
        </div>
        <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-purple fs-24"> </i>
          <div class="heading7 pl-12">Real Time Language Translation</div>
        </div>
        <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-purple fs-24"> </i>
          <div class="heading7 pl-12">18,000+ Websites Used Aizan</div>
        </div>
      </div> -->
      <div class="button-block mt-32"><a class="button bg-purple button-purple-hover text-white" href="https://www.facebook.com/xrinteractivebd"> <span> <span> </span></span><span class="bg-purple">Find out more</span></a></div>
    </div>
    <div class="col-12 col-xl-5 col-lg-6 pl-65 pl-col-lg-0">
      <div class="bg-img bora-16 overflow-hidden"><img class="w-100 d-block" src="{{asset('frontend')}}/images/components/man_6.png" alt=""/></div>
      <!-- <div class="count flex-between mt-20">
        <div class="item">
          <div class="heading3 text-purple">350<span>+</span></div>
          <div class="heading7 text-placehover mt-8">Completed projects</div>
        </div>
        <div class="item">
          <div class="heading3 text-purple">2500<span>+</span></div>
          <div class="heading7 text-placehover mt-8">Great photography</div>
        </div>
      </div> -->
    </div>
  </div>
</div>
</div>


<div class="style-purple">
<div class="counter bg-surface pt-80 pb-80"> 
  <div class="container"> 
    <div class="row flex-between row-gap-40">
      <div class="col-lg-5 pr-16 pr-col-lg-0">
        <div class="heading3 text-on-surface">We Provide brilliant Ideas & Adding</div>
        <div class="body2 text-secondary mt-24">We are a full-service creative agency that helps businesses build brands, tell stories, and engage audiences through bold and strategic design.</div>
      </div>
      <div class="col-lg-6 pl-0 pl-col-lg-0 flex-between gap-16">
        <div class="item">
          <div class="icon flex-center w-60 h-60 bg-green bora-50 d-inline-flex"> <i class="ph-bold ph-check fs-24 text-white"></i></div>
          <div class="count-number heading2 text-on-surface mt-20">100</div>
          <div class="body1 text-secondary mt-8">Completed projects</div>
        </div>
        <!-- <div class="item">
          <div class="icon flex-center w-60 h-60 bg-green bora-50 d-inline-flex"> <i class="ph-bold ph-check fs-24 text-white"></i></div>
          <div class="count-number heading2 text-on-surface mt-20">2500</div>
          <div class="body1 text-secondary mt-8">Great photography</div>
        </div> -->
        <div class="item">
          <div class="icon flex-center w-60 h-60 bg-green bora-50 d-inline-flex"><i class="ph-bold ph-check fs-24 text-white"></i></div>
          <div class="flex-item-center mt-20">
            <div class="count-number heading2 text-on-surface">150</div><span class="heading2 text-on-surface">+</span>
          </div>
          <div class="body1 text-secondary mt-8">Satisfied users</div>
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