@extends('layouts.client-master')


@section('meta-title')
 <!-- Primary Meta Tags -->
 <title>XR Interactive | Your Interactive Solutions</title>
 <meta name="title" content="XR Interactive | Your Interactive Solutions" />
 <meta name="description" content="We are a dynamic and forward-thinking IT company specializing in cutting-edge technologies such as Virtual Reality (VR), Augmented Reality (AR), Mobile Game Development, Artificial Intelligence (AI), Internet of Things (IoT) and comprehensive Web Solutions." />
 
 <!-- Open Graph / Facebook -->
 <meta property="og:type" content="website" />
 <meta property="og:url" content="https://xri.com.bd/" />
 <meta property="og:title" content="XR Interactive | Your Interactive Solutions" />
 <meta property="og:description" content="We are a dynamic and forward-thinking IT company specializing in cutting-edge technologies such as Virtual Reality (VR), Augmented Reality (AR), Mobile Game Development, Artificial Intelligence (AI), Internet of Things (IoT) and comprehensive Web Solutions." />
 <meta property="og:image" content="https://xri.com.bd/frontend/images/components/img-3.png" />
 
 <!-- Twitter -->
 <meta property="twitter:card" content="summary_large_image" />
 <meta property="twitter:url" content="https://xri.com.bd/" />
 <meta property="twitter:title" content="XR Interactive | Your Interactive Solutions" />
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
    <div class="slider-block style-two style-three">
      <div class="slider-main">
        <div class="container h-100">
          <div class="row flex-between ">
            <div class="col-lg-8 col-md-6  ">
              <div class="text-heading" >
                <div class="heading1" style="font-size: 50px;">Elevate Reality <br> Embrace Possibilities!</div>
                <div class="heading1" style="font-size: 50px;">Elevate Reality <br> Embrace Possibilities!</div>
                <div class="cursor"></div>
              </div>
              <div class="body2 text-placehover mt-12">Creating immersive and interactive solutions that redefine the digital landscape.</div><a class="button button-yellow-hover text-on-surface mt-40" href="{{url('/about')}}"><span> <span></span></span><span class="bg-yellow">Explore more<i class="ph-bold ph-arrow-up-right fs-18 flex-center"></i></span></a>
            </div>
            <div class="col-lg-4 col-md-6 ">
              <div class="bg-img"><img class="w-100" src="{{asset('frontend')}}/images/components/home-bg-1.png" alt=""/>

              </div>
            </div>
          </div>
          <!-- <div class="list-avatar"> <img src="{{asset('frontend')}}/images/avatar/60x60.png" alt=""/><img src="{{asset('frontend')}}/images/avatar/96x96.png" alt=""/></div> -->
          <div class="list-cate"> 
            <div class="item flex-center">
              <div class="heading7 text-surface">Transform</div>
            </div>
            <div class="item flex-center">
              <div class="text-button text-surface">Innovate</div>
            </div>
            <div class="item flex-center">
              <div class="text-button text-surface">Elevate</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="about-us counter style-about style-three pt-80 pb-80 bg-black-surface">
      <div class="container"> 
        <div class="row row-gap-40 flex-between">
          <div class="col-12 col-lg-6 flex-column row-gap-20">
            <div class="heading3 scroll-left-to-right1">We Create <span>Interactive </span>
              <p>Content</p>
            </div>
            <div class="body2 text-placehover mt-16 scroll-left-to-right2">We are a dynamic and forward-thinking IT company specializing in cutting-edge technologies such as Virtual Reality (VR), Augmented Reality (AR), Mobile Game Development, Artificial Intelligence (AI), Internet of Things (IoT) and comprehensive Web Solutions.</div>
            <div class="list-service mt-32 scroll-left-to-right3">
              <div class="service-item flex-item-center"> <i class="ph-bold ph-check text-yellow fs-24"> </i>
                <div class="heading7 pl-12">Spreading Innovation Globally</div>
              </div>
              <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-yellow fs-24"> </i>
                <div class="heading7 pl-12">Craft User-friendly Solution</div>
              </div>
              <div class="service-item flex-item-center mt-12"><i class="ph-bold ph-check text-yellow fs-24"> </i>
                <div class="heading7 pl-12">Serve Sustainable Solution</div>
              </div>
            </div>
            <div class="button-block mt-32 scroll-left-to-right4"><a class="button button-yellow-hover text-on-surface" href="{{url('/about')}}"> <span> <span> </span></span><span class="bg-yellow">About us</span></a></div>
          </div>
          <div class="col-12 col-xl-5 col-lg-6 pl-65 pl-col-lg-0">
            <div class="bg-img overflow-hidden"><img class="w-100 d-block" src="{{asset('frontend')}}/images/components/about-1.png" alt=""/></div>
            <!-- <div class="count flex-between mt-20">
              <div class="item">
                <div class="flex-item-center">
                  <div class="count-number heading3 text-yellow">350</div><span class="heading3 text-yellow">+</span>
                </div>
                <div class="heading7 text-placehover mt-8">Completed projects</div>
              </div>
              <div class="item">
                <div class="flex-item-center">
                  <div class="count-number heading3 text-yellow">2500</div><span class="heading3 text-yellow">+</span>
                </div>
                <div class="heading7 text-placehover mt-8">Great photography</div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- ========================================================= service section =================  -->
    <div class="shared-bg-service">
      <div class="services-block style-three pt-100">
        <div class="container">
          <div class="heading text-center"> 
            <div class="heading3">Elevate Your Experience</div>
          </div>
          <div class="list row row-gap-32 mt-40">
            <div class="col-xl-3 col-sm-6 scroll-bottom-to-top1">
                      <div class="service-item hover-box-shadow pl-24 pr-24 pt-32 pb-40 bg-line-dark bora-24 h-100"><a class="service-item-main flex-column-center text-center" href="#">
                          <div class="heading pb-20">
                            <svg id="service-icon-svg" width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path id="service-icon-svg" d="M41.9992 56.4758C47.8269 56.4758 52.5511 51.7516 52.5511 45.9239C52.5511 40.0962 47.8269 35.3719 41.9992 35.3719C36.1715 35.3719 31.4473 40.0962 31.4473 45.9239C31.4473 51.7516 36.1715 56.4758 41.9992 56.4758Z" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                              <path id="service-icon-svg" d="M60.7581 78.6092C60.1473 74.0671 57.9093 69.9008 54.4594 66.8838C51.0095 63.8667 46.5821 62.2039 41.9991 62.2039C37.4161 62.2039 32.9887 63.8667 29.5388 66.8838C26.0889 69.9008 23.8509 74.0671 23.2401 78.6092" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                              <path id="service-icon-svg" d="M81.8093 5.39002L78.6639 6.18115" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M81.8103 63.9912L78.6696 63.2013" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M17.4853 21.1561L2.18939 16.8999V51.299L17.4853 47.0431V21.1561Z" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                              <path id="service-icon-svg" d="M57.4614 46.1504H59.1408V22.0494L24.8582 22.0493L24.8582 46.1504H26.5343" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                              <path id="service-icon-svg" d="M66.5135 21.1561L81.8093 16.8999V51.299L66.5135 47.0431V21.1561Z" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                              <path id="service-icon-svg" d="M71.1824 8.16373C69.9691 8.4689 68.7553 8.75364 67.5411 9.01794" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M60.3138 10.4278C48.1089 12.4884 35.8714 12.4884 23.6666 10.4278" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M12.7 8.13105C13.9132 8.43621 15.127 8.72093 16.3411 8.98523" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M2.18945 5.39463L5.33014 6.18457" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M71.2998 61.2548C70.0865 60.9497 68.8728 60.6649 67.6586 60.4006" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M60.3329 58.9582C57.6843 58.511 55.034 58.1608 52.3829 57.9077" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M23.686 58.9581C26.3345 58.511 28.9845 58.1608 31.6354 57.9077" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M12.8163 61.2226C14.0296 60.9175 15.2434 60.6327 16.4576 60.3684" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M2.18939 63.9958L5.33483 63.2047" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                            </svg>
                              
                          </div>
                          <div class="line"></div>
                          <div class="desc pt-20">
                            <div class="heading5">AR/VR & MR Solution</div>
                            <div class="body3 mt-8">Step into a world of limitless possibilities with our Mixed Reality development services</div>
                            <u class="display-inline-block fw-700 mt-20">Learn more</u>
                          </div></a>
                      </div>
            </div>
            <div class="col-xl-3 col-sm-6 scroll-bottom-to-top2">
                      <div class="service-item hover-box-shadow pl-24 pr-24 pt-32 pb-40 bg-line-dark bora-24 h-100"><a class="service-item-main flex-column-center text-center" href="#">
                          <div class="heading pb-20">
                            <svg id="service-icon-svg" width="74" height="75" viewBox="0 0 74 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path id="service-icon-svg"  d="M11.6245 20.8136C1.12513 23.6269 0.844699 33.0797 2.0169 37.4544C4.36131 46.2038 9.63753 50.7292 18.6577 47.0619C29.9329 42.4778 35.6612 34.6912 34.0982 28.8582C32.5353 23.0252 24.7487 17.297 11.6245 20.8136Z" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg"  d="M62.8758 2.80541C73.3752 5.6187 73.6556 15.0715 72.4834 19.4462C70.139 28.1957 64.8628 32.7211 55.8426 29.0538C44.5674 24.4696 38.8391 16.683 40.4021 10.85C41.965 5.01707 49.7516 -0.711206 62.8758 2.80541Z" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg"  d="M2.0162 37.4543L10.2216 68.0774C10.8729 70.5078 13.6336 74.9779 19.4665 73.415C25.2995 71.852 25.4553 66.6005 24.8041 64.1701L22.4596 55.4206C24.5051 50.3247 28.571 43.5222 31.7656 37.6675" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                              <path id="service-icon-svg"  d="M72.4841 19.4462L64.2787 50.0693C63.6275 52.4997 60.8668 56.9697 55.0338 55.4068C49.2009 53.8438 49.0451 48.5923 49.6963 46.1619L52.0407 37.4124C49.9953 32.3165 45.3344 24.6831 42.1397 18.8284" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                              <path id="service-icon-svg"  d="M24.4135 62.712L29.5826 61.3269C30.7546 61.0129 31.4502 59.8082 31.1361 58.6361L29.9277 54.1264C29.6142 52.9561 28.4125 52.2606 27.2416 52.5716L23.2027 53.6444" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg"  d="M50.0875 44.7036L44.9184 43.3185C43.7464 43.0045 43.0509 41.7998 43.3649 40.6277L44.5688 36.1345C44.8841 34.9578 46.0966 34.2623 47.2715 34.5842L51.2835 35.6833" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg"  d="M53 14C51.3431 14 50 12.6569 50 11C50 9.34315 51.3431 8 53 8" stroke="#7C51A1" stroke-width="1.64778"/>
                              <path id="service-icon-svg"  d="M53 14C55.2091 14 57 12.6569 57 11C57 9.34315 55.2091 8 53 8" stroke="#7C51A1" stroke-width="1.64778"/>
                              <path id="service-icon-svg"  d="M61 23C59.3431 23 58 21.433 58 19.5C58 17.567 59.3431 16 61 16" stroke="#7C51A1" stroke-width="1.64778"/>
                              <path id="service-icon-svg"  d="M61 23C63.2091 23 65 21.433 65 19.5C65 17.567 63.2091 16 61 16" stroke="#7C51A1" stroke-width="1.64778"/>
                              <path id="service-icon-svg"  d="M17.9508 28.5943C17.808 26.8243 19.1271 25.2737 20.897 25.131C22.667 24.9882 24.2176 26.3073 24.3604 28.0772" stroke="#7C51A1" stroke-width="1.64778"/>
                              <path id="service-icon-svg"  d="M17.9508 28.5942C18.0936 30.3642 19.6442 31.6833 21.4142 31.5405C23.1841 31.3977 24.5032 29.8471 24.3605 28.0771" stroke="#7C51A1" stroke-width="1.64778"/>
                              <path id="service-icon-svg"  d="M9.80851 37.373C9.66572 35.603 10.9848 34.0524 12.7548 33.9097C14.5248 33.7669 16.0753 35.086 16.2181 36.8559" stroke="#7C51A1" stroke-width="1.64778"/>
                              <path id="service-icon-svg"  d="M9.80863 37.3728C9.95141 39.1427 11.502 40.4618 13.272 40.3191C15.0419 40.1763 16.361 38.6257 16.2182 36.8557" stroke="#7C51A1" stroke-width="1.64778"/>
                            </svg>
                              
                          </div>
                          <div class="line"></div>
                          <div class="desc pt-20">
                            <div class="heading5">Game Design & Development</div>
                            <div class="body3 mt-8">Embark on a gaming adventure with our Game Development services</div>
                            <u class="display-inline-block fw-700 mt-20">Learn more</u>
                          </div></a>
                      </div>
            </div>
            <div class="col-xl-3 col-sm-6 scroll-bottom-to-top3">
                      <div class="service-item hover-box-shadow pl-24 pr-24 pt-32 pb-40 bg-line-dark bora-24 h-100"><a class="service-item-main flex-column-center text-center" href="#">
                          <div class="heading pb-20">
                            <svg id="service-icon-svg" width="77" height="77" viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path id="service-icon-svg" d="M41 25.3131C41 32.5538 39.2123 34.7149 38.3184 34.8904C37.7969 35.3467 36.4969 34.6174 35.4689 28.0501C34.1839 19.8411 35.7482 11 37.6477 11C39.5472 11 41 16.2622 41 25.3131Z" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                              <path id="service-icon-svg" d="M47.9066 47.0604C41.5034 43.3635 40.4519 40.7709 40.7266 39.9368C40.5739 39.2694 41.8441 38.5589 48.1461 41.0557C56.0236 44.1767 63.0898 49.9937 62.1763 51.5759C61.2628 53.1581 55.9106 51.6815 47.9066 47.0604Z" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                              <path id="service-icon-svg" d="M25.9371 42.0633C32.3403 38.3664 35.1113 38.7521 35.6963 39.407C36.3506 39.6085 36.3309 41.0637 31.0176 45.273C24.3759 50.5347 15.8052 53.7457 14.8917 52.1635C13.9782 50.5812 17.9331 46.6844 25.9371 42.0633Z" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                              <circle id="service-icon-svg" cx="38.5" cy="38.5" r="37.5" stroke="#7C51A1" stroke-width="1.64778"/>
                              <circle id="service-icon-svg" cx="38.5" cy="38.5" r="32.5" stroke="#7C51A1" stroke-width="1.64778"/>
                              <path id="service-icon-svg" d="M15 38C15 25.9959 24.2142 16.1296 36 15" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M50.224 17.822C60.8952 23.983 64.968 37.1837 59.9633 48.1713" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M50.0409 59.0112C39.3149 65.0764 25.8744 61.8828 18.9495 51.9923" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M23 38C23 30.6412 28.0102 24.4993 34.6771 23.0614C34.7568 23.043 34.933 23.005 35 23" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M46.2748 24.6626C52.8835 28.4781 55.6981 36.3415 53.395 43.3128L53.3252 43.5287" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M46.1521 52.1364C39.5095 55.8926 31.3061 54.3249 26.4695 48.8011L26.2579 48.5504" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                            </svg>
                              
                          </div>
                          <div class="line"></div>
                          <div class="desc pt-20">
                            <div class="heading5">Event Activation Campaign</div>
                            <div class="body3 mt-8">Expand your reach and cater to a global audience ...</div>
                            <u class="display-inline-block fw-700 mt-20">Learn more</u>
                          </div></a>
                      </div>
            </div>
            <div class="col-xl-3 col-sm-6 scroll-bottom-to-top4">
                      <div class="service-item hover-box-shadow pl-24 pr-24 pt-32 pb-40 bg-line-dark bora-24 h-100"><a class="service-item-main flex-column-center text-center" href="#">
                          <div class="heading pb-20">
                            <svg id="service-icon-svg" width="85" height="69" viewBox="0 0 85 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path id="service-icon-svg" d="M1 5.89407C1 3.46729 2.96729 1.5 5.39407 1.5H79.6059C82.0327 1.5 84 3.46729 84 5.89407V56.1059C84 58.5327 82.0327 60.5 79.6059 60.5H5.39407C2.96729 60.5 1 58.5327 1 56.1059V5.89407Z" stroke="#7C51A1" stroke-width="1.64778"/>
                              <path id="service-icon-svg" d="M26 67.5C24.8954 67.5 24 67.2761 24 67C24 66.7239 24.8954 66.5 26 66.5" stroke="#7C51A1" stroke-width="1.64778"/>
                              <path id="service-icon-svg" d="M26 67.5C26 67.5 26 67.2761 26 67C26 66.7239 26 66.5 26 66.5" stroke="#7C51A1" stroke-width="1.64778"/>
                              <path id="service-icon-svg" d="M33 66.5H58" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M32.25 26.38L22.4928 31.3497C22.1904 31.5037 22 31.8144 22 32.1537V43.7263C22 44.0657 22.1904 44.3763 22.4928 44.5304L31.8405 49.2914C32.0978 49.4225 32.4022 49.4225 32.6595 49.2914L42.0905 44.4879C42.3478 44.3569 42.6522 44.3569 42.9095 44.4879L52.3405 49.2914C52.5978 49.4225 52.9022 49.4225 53.1595 49.2914L62.5072 44.5304C62.8096 44.3763 63 44.0657 63 43.7263V32.1537C63 31.8144 62.8096 31.5037 62.5072 31.3497L52.75 26.38M52.75 26.3993V14.2737C52.75 13.9343 52.5596 13.6237 52.2572 13.4696L42.9095 8.70859C42.6522 8.57754 42.3478 8.57754 42.0905 8.70859L32.7428 13.4696C32.4404 13.6237 32.25 13.9343 32.25 14.2737V26.3993" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M32 26.5L42.5 31.5L53 26.5" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M22 31.6228L32.1231 36.5L42.5001 31.5L52.877 36.5L63 31.6224" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M52 14.5L42 19.5L32 14.5" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M32 36.5V48.5" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M42 19.5V43.5" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                              <path id="service-icon-svg" d="M53 36.5V48.5" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                            </svg>
                              
                          </div>
                          <div class="line"></div>
                          <div class="desc pt-20">
                            <div class="heading5">Application & Software</div>
                            <div class="body3 mt-8">Engage and assist your website visitors with our intelligent</div>
                            <u class="display-inline-block fw-700 mt-20">Learn more</u>
                          </div></a>
                      </div>
            </div>
          </div>
        </div>
      </div>
      <div class="list-partner-slide style-three pt-40 pb-40">
        <div class="list">
          <div class="item"> 
            <div class="text">Where Innovation Meets Immersion, Redefining Digital Experiences!</div>
          </div>
          <div class="item"> 
            <div class="text">Where Innovation Meets Immersion, Redefining Digital Experiences!</div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========================================================= service section end =================  -->


    <div class="testimonial-block style-three pt-100 pb-100">
      <div class="container"> 
        <div class="row flex-between row-gap-40">
          <div class="col-lg-6 col-md-8 pr-80 pr-col-lg-0">
            <div class="bg-img"><img class="w-100" src="{{asset('frontend')}}/images/components/img-3.png" alt=""/>
            </div>
          </div>
          <div class="col-lg-6 pl-0 pl-col-lg-0">
            <div class="heading3" style="font-size:35px;">Wondering if AR & VR projects are something worth considering?</div>
            <div class="swiper list-comment-two">
              <div class="swiper-wrapper mt-40">
                <div class="swiper-slide"> 
                  <div class="main-content bora-24">
                    <div class="heading6 fw-500 mt-16">“We offer various 3D solutions for companies. From augmented and virtual  reality through 3D web solutions and product configurators to Corporate Events and campaigns .”</div>
                    
                    <div class="infor flex-item-center item-start gap-20 border-line-top">
                      <div class="desc">
                        <a class="button button-yellow-hover text-on-surface mt-40" href="{{url('/contact')}}"><span> <span></span></span><span class="bg-yellow">Let’s discuss it<i class="ph-bold ph-arrow-up-right fs-18 flex-center"></i></span></a>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide"> 
                  <div class="main-content bora-24">
                    <div class="heading6 fw-500 mt-16">“We offer various 3D solutions for companies. From augmented and virtual  reality through 3D web solutions and product configurators to Corporate Events and campaigns .”</div>
                    
                    <div class="infor flex-item-center item-start gap-20 border-line-top">
                      <div class="desc">
                        <a class="button button-yellow-hover text-on-surface mt-40" href="{{url('/contact')}}"><span> <span></span></span><span class="bg-yellow">Let’s discuss it<i class="ph-bold ph-arrow-up-right fs-18 flex-center"></i></span></a>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide"> 
                  <div class="main-content bora-24">
                    <div class="heading6 fw-500 mt-16">“We offer various 3D solutions for companies. From augmented and virtual  reality through 3D web solutions and product configurators to Corporate Events and campaigns .”</div>
                    
                    <div class="infor flex-item-center item-start gap-20 border-line-top">
                      <div class="desc">
                        <a class="button button-yellow-hover text-on-surface mt-40" href="{{url('/contact')}}"><span> <span></span></span><span class="bg-yellow">Let’s discuss it<i class="ph-bold ph-arrow-up-right fs-18 flex-center"></i></span></a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =========================================== gallery section ================================  -->
    <div class="style-three">
      <div class="projects-block pt-100"> 
        <div class="container"> 
          <div class="bg-blur"></div>
          <div class="heading text-center">
            <div class="heading3 text-center">A world where every moment is unforgettable</div>
            <div class="list-nav flex-center mt-24">
              <div class="nav-item text-button pt-8 pb-8 pl-16 pr-16 bora-44 pointer active" data-name="all">All</div>
              <div class="nav-item text-button pt-8 pb-8 pl-16 pr-16 bora-44 pointer" data-name="AR">AR</div>
              <div class="nav-item text-button pt-8 pb-8 pl-16 pr-16 bora-44 pointer " data-name="VR">VR</div>
              <div class="nav-item text-button pt-8 pb-8 pl-16 pr-16 bora-44 pointer" data-name="Event">Event</div>
              <div class="nav-item text-button pt-8 pb-8 pl-16 pr-16 bora-44 pointer" data-name="Campaign">Campaign</div>
            </div>
          </div>
          <div class="list row row-gap-32 mt-40">
            <!-- ========================================== VR Gallery =============================  -->
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1"  data-name="VR">
                      <div class=" item">
                        <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/G1.png" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                          <div class="text-button-uppercase text-secondary">VR Game</div>
                          <div class="heading7 text-on-surface mt-4">Playing VR Game</div></a>
                      </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="VR">
                      <div class=" item">
                        <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/G5.png" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                          <div class="text-button-uppercase text-secondary">VR Game</div>
                          <div class="heading7 text-on-surface mt-4">Playing VR Game</div></a>
                      </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="VR">
                      <div class=" item">
                        <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/G4.png" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                          <div class="text-button-uppercase text-secondary">VR Game</div>
                          <div class="heading7 text-on-surface mt-4">Playing VR Game</div></a>
                      </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="VR">
                      <div class=" item">
                        <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/G2.png" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                          <div class="text-button-uppercase text-secondary">VR Game</div>
                          <div class="heading7 text-on-surface mt-4">Playing VR Game</div></a>
                      </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="VR">
                      <div class=" item">
                        <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/G3.png" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                          <div class="text-button-uppercase text-secondary">VR Game</div>
                          <div class="heading7 text-on-surface mt-4">Playing VR Game</div></a>
                      </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="VR" data-name="all">
                      <div class=" item">
                        <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/G6.png" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                          <div class="text-button-uppercase text-secondary">VR Game</div>
                          <div class="heading7 text-on-surface mt-4">Playing VR Game</div></a>
                      </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="VR">
                      <div class=" item">
                        <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/G7.png" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                          <div class="text-button-uppercase text-secondary">VR Game</div>
                          <div class="heading7 text-on-surface mt-4">Playing VR Game</div></a>
                      </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="VR">
                      <div class=" item">
                        <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/G8.png" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                          <div class="text-button-uppercase text-secondary">VR Game</div>
                          <div class="heading7 text-on-surface mt-4">Playing VR Game</div></a>
                      </div>
            </div>
            <!-- =================================== AR Gallery ===========================  -->
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="AR">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/AR/2.PNG" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">AR Filter</div>
                      <div class="heading7 text-on-surface mt-4">Trying AR Filter</div></a>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="AR">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/AR/4.PNG" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">AR Filter</div>
                      <div class="heading7 text-on-surface mt-4">Trying AR Filter</div></a>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="AR">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/AR/5.PNG" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">AR Filter</div>
                      <div class="heading7 text-on-surface mt-4">Trying AR Filter</div></a>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="AR">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/AR/6.PNG" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">AR Filter</div>
                      <div class="heading7 text-on-surface mt-4">Trying AR Filter</div></a>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="AR">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/AR/A3.jpg" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">AR Filter</div>
                      <div class="heading7 text-on-surface mt-4">Trying AR Filter</div></a>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="AR">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/AR/A5.jpg" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">AR Filter</div>
                      <div class="heading7 text-on-surface mt-4">Trying AR Filter</div></a>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="AR">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/AR/A6.jpg" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">AR Filter</div>
                      <div class="heading7 text-on-surface mt-4">Trying AR Filter</div></a>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="AR">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/AR/A8.jpg" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">AR Filter</div>
                      <div class="heading7 text-on-surface mt-4">Trying AR Filter</div></a>
                  </div>
            </div>
            <!-- ============================================ event gallery =========================  -->
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="Event">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/Event/E1.jpg" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">Event Activation</div>
                      <div class="heading7 text-on-surface mt-4">Event Activation  VR Cricket</div></a>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="Event">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/Event/E2.jpg" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">Event Activation</div>
                      <div class="heading7 text-on-surface mt-4">Event Activation  VR Cricket</div></a>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="Event">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/Event/E3.jpg" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">Event Activation</div>
                      <div class="heading7 text-on-surface mt-4">VR Travel</div></a>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="Event">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/Event/E4.jpg" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">Event Activation</div>
                      <div class="heading7 text-on-surface mt-4">VR Distribution</div></a>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="Event">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/Event/E5.jpg" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">Event Activation</div>
                      <div class="heading7 text-on-surface mt-4"></div></a>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="Event">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/Event/E6.jpg" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">Event Activation</div>
                      <div class="heading7 text-on-surface mt-4"></div></a>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="Event">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/Event/E7.jpg" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">Event Activation</div>
                      <div class="heading7 text-on-surface mt-4">VR Tour</div></a>
                  </div>
            </div>
            <div class="col-lg-3 col-sm-6 item-filter scroll-bottom-to-top1" data-name="Event">
                  <div class=" item">
                    <div class="bg-img bora-20 overflow-hidden"><img class="w-100" src="{{asset('frontend')}}/images/gallery/Event/E8.jpg" alt="AI financial management"/></div><a class="infor p-12" href="{{url('/about')}} ">
                      <div class="text-button-uppercase text-secondary">Event Activation</div>
                      <div class="heading7 text-on-surface mt-4">VR Boi-Mela</div></a>
                  </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- =========================================== gallery section end ================================  -->

    <div class="counter-block style-three pt-100 pb-100 bg-black-surface"> 
      <div class="container"> 
        <div class="row row-gap-32 flex-between">
          <div class="col-lg-6"> 
            <div class="heading3">We create captivating, high-quality experiences</div>
            <div class="count mt-40">
              <div class="item flex-item-center gap-24 pb-20">
                <div class="heading3 text-yellow">
                  <svg width="73" height="67" viewBox="0 0 73 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="43.7607" cy="24.1155" r="5.19556" stroke="#7C51A1" stroke-width="3.45562"/>
                    <path d="M55.6845 29.9837L54.5685 31.3027L54.5685 31.3027L55.6845 29.9837ZM56.006 33.8415L54.687 32.7255V32.7255L56.006 33.8415ZM51.8267 30.3052L50.5077 29.1891V29.1891L51.8267 30.3052ZM47.6597 33.3159L47.088 31.6855V31.6855L47.6597 33.3159ZM39.2478 32.3059L38.498 33.8625L39.2478 32.3059ZM19.8992 35.3035L18.2999 34.6497V34.6497L19.8992 35.3035ZM21.3973 38.8731L22.0511 37.2737L22.0511 37.2737L21.3973 38.8731ZM24.9669 37.375L23.3675 36.7212L23.3675 36.7212L24.9669 37.375ZM34.0071 36.066L35.2288 37.2877C35.6528 36.8637 35.8267 36.2503 35.6882 35.6669C35.5497 35.0835 35.1186 34.6136 34.5493 34.4254L34.0071 36.066ZM16.9719 53.1011L18.1937 54.3229L18.1937 54.3229L16.9719 53.1011ZM16.9719 56.9724L18.1937 55.7506H18.1937L16.9719 56.9724ZM20.8431 56.9724L19.6214 55.7506H19.6214L20.8431 56.9724ZM30.9237 46.8918L31.272 45.1995C30.7028 45.0823 30.1128 45.2591 29.7019 45.6701L30.9237 46.8918ZM34.4175 47.7663L33.8935 49.4127L34.4175 47.7663ZM36.8025 48.8146L38.1576 49.8866C38.4527 49.5135 38.581 49.0352 38.5121 48.5646C38.4433 48.0939 38.1834 47.6724 37.7938 47.3995L36.8025 48.8146ZM33.5178 51.3276L34.3994 52.8135H34.3994L33.5178 51.3276ZM32.5604 55.0785L31.0745 55.9602L31.0745 55.9602L32.5604 55.0785ZM36.3114 56.0359L35.4297 54.5499V54.55L36.3114 56.0359ZM41.9493 50.8545L40.3871 50.1163L40.3871 50.1163L41.9493 50.8545ZM42.3005 47.4518L43.9681 47V47L42.3005 47.4518ZM40.6461 44.8846L39.4968 46.1747L40.6461 44.8846ZM36.0776 42.5493L36.6015 40.9029L36.6015 40.9029L36.0776 42.5493ZM35.4557 42.3598L34.2339 41.138C33.8023 41.5696 33.6305 42.197 33.7819 42.7883C33.9332 43.3796 34.3853 43.8472 34.9712 44.0183L35.4557 42.3598ZM39.5005 38.315L40.0509 36.6772C39.4291 36.4682 38.7426 36.6294 38.2787 37.0933L39.5005 38.315ZM49.4714 38.4822L48.8997 36.8517L49.4714 38.4822ZM54.5685 31.3027C54.9941 31.6628 55.0472 32.2998 54.687 32.7255L57.325 34.9576C58.9179 33.075 58.6831 30.2576 56.8006 28.6647L54.5685 31.3027ZM53.1457 31.4212C53.5058 30.9956 54.1428 30.9425 54.5685 31.3027L56.8006 28.6647C54.918 27.0718 52.1006 27.3066 50.5077 29.1891L53.1457 31.4212ZM48.2315 34.9464C50.5998 34.1159 52.2102 32.5268 53.1457 31.4212L50.5077 29.1891C49.7573 30.076 48.6284 31.1453 47.088 31.6855L48.2315 34.9464ZM38.498 33.8625C42.708 35.8905 45.8995 35.7642 48.2315 34.9464L47.088 31.6855C45.7045 32.1706 43.4637 32.4189 39.9977 30.7492L38.498 33.8625ZM21.4986 35.9572C22.3175 33.954 24.2455 32.3827 27.1794 31.8153C30.1247 31.2456 34.0417 31.7158 38.498 33.8625L39.9977 30.7492C35.0323 28.3573 30.3562 27.6812 26.5232 28.4225C22.6789 29.166 19.6435 31.3629 18.2999 34.6497L21.4986 35.9572ZM22.0511 37.2737C21.5349 37.0628 21.2876 36.4733 21.4986 35.9572L18.2999 34.6497C17.3668 36.9324 18.4608 39.5393 20.7435 40.4724L22.0511 37.2737ZM23.3675 36.7212C23.1566 37.2373 22.5672 37.4847 22.0511 37.2737L20.7435 40.4724C23.0262 41.4055 25.6331 40.3115 26.5662 38.0288L23.3675 36.7212ZM34.5493 34.4254C27.8384 32.2074 24.1436 34.8228 23.3675 36.7212L26.5662 38.0288C26.4149 38.3991 27.8024 35.835 33.4649 37.7065L34.5493 34.4254ZM32.7853 34.8442L15.7502 51.8794L18.1937 54.3229L35.2288 37.2877L32.7853 34.8442ZM15.7502 51.8794C14.0064 53.6232 14.0064 56.4503 15.7502 58.1941L18.1937 55.7506C17.7994 55.3564 17.7994 54.7171 18.1937 54.3229L15.7502 51.8794ZM15.7502 58.1941C17.4939 59.9379 20.3211 59.9379 22.0649 58.1941L19.6214 55.7506C19.2271 56.1449 18.5879 56.1449 18.1937 55.7506L15.7502 58.1941ZM22.0649 58.1941L32.1454 48.1135L29.7019 45.6701L19.6214 55.7506L22.0649 58.1941ZM30.5754 48.5841C31.6874 48.813 32.8522 49.0814 33.8935 49.4127L34.9414 46.1198C33.7266 45.7332 32.4222 45.4362 31.272 45.1995L30.5754 48.5841ZM33.8935 49.4127C34.9777 49.7577 35.576 50.065 35.8112 50.2298L37.7938 47.3995C37.1422 46.943 36.1631 46.5086 34.9414 46.1198L33.8935 49.4127ZM35.4474 47.7427C35.2625 47.9764 34.5598 48.7002 32.6361 49.8416L34.3994 52.8135C36.5 51.5672 37.6029 50.5878 38.1576 49.8866L35.4474 47.7427ZM32.6361 49.8416C30.5153 51.1 29.8161 53.8393 31.0745 55.9602L34.0464 54.1969C33.7618 53.7174 33.9199 53.098 34.3994 52.8135L32.6361 49.8416ZM31.0745 55.9602C32.3328 58.081 35.0722 58.7802 37.193 57.5218L35.4297 54.55C34.9502 54.8345 34.3309 54.6764 34.0463 54.1969L31.0745 55.9602ZM37.193 57.5218C39.9543 55.8835 42.3779 53.9918 43.5115 51.5926L40.3871 50.1163C39.7238 51.5201 38.0959 52.968 35.4297 54.5499L37.193 57.5218ZM43.5115 51.5926C44.1577 50.2248 44.4098 48.6301 43.9681 47L40.6328 47.9037C40.8281 48.6247 40.7372 49.3752 40.3871 50.1163L43.5115 51.5926ZM43.9681 47C43.5494 45.4545 42.6323 44.34 41.7954 43.5945L39.4968 46.1747C40.0087 46.6308 40.4424 47.2012 40.6328 47.9037L43.9681 47ZM41.7954 43.5945C40.2283 42.1984 38.1481 41.395 36.6015 40.9029L35.5537 44.1958C37.0056 44.6578 38.4983 45.2852 39.4968 46.1747L41.7954 43.5945ZM36.6015 40.9029C36.3811 40.8327 36.1603 40.7656 35.9401 40.7013L34.9712 44.0183C35.1671 44.0755 35.3615 44.1346 35.5537 44.1958L36.6015 40.9029ZM36.6774 43.5815L40.7222 39.5368L38.2787 37.0933L34.2339 41.138L36.6774 43.5815ZM48.8997 36.8517C46.5194 37.6865 43.5785 37.8628 40.0509 36.6772L38.95 39.9528C43.1767 41.3734 46.9081 41.2121 50.0432 40.1126L48.8997 36.8517ZM54.687 32.7255C53.6433 33.9589 51.7517 35.8516 48.8997 36.8517L50.0432 40.1126C53.7231 38.8222 56.0961 36.41 57.325 34.9576L54.687 32.7255Z" fill="#7C51A1"/>
                    <path d="M11.1695 18.2104H12.8973C12.8973 17.4489 12.3987 16.7772 11.6698 16.5566L11.1695 18.2104ZM61.6555 18.2104L61.1552 16.5566C60.4263 16.7772 59.9277 17.4489 59.9277 18.2104H61.6555ZM59.9277 62.0848C59.9277 63.039 60.7013 63.8126 61.6555 63.8126C62.6098 63.8126 63.3833 63.039 63.3833 62.0848H59.9277ZM9.44166 62.097C9.44166 63.0512 10.2152 63.8248 11.1695 63.8248C12.1237 63.8248 12.8973 63.0512 12.8973 62.097H9.44166ZM3.72781 11.6511C3.72781 11.2105 4.06296 10.3928 5.65913 9.33445C7.18845 8.32041 9.51541 7.34022 12.5458 6.49035C18.5824 4.79736 27.0212 3.72781 36.4125 3.72781V0.27219C26.7983 0.27219 18.0308 1.3631 11.6126 3.16311C8.41553 4.05974 5.70289 5.15919 3.74948 6.45442C1.86291 7.70534 0.27219 9.42651 0.27219 11.6511H3.72781ZM36.4125 3.72781C45.8038 3.72781 54.2426 4.79736 60.2792 6.49035C63.3096 7.34022 65.6365 8.32041 67.1659 9.33445C68.762 10.3928 69.0972 11.2105 69.0972 11.6511H72.5528C72.5528 9.42651 70.9621 7.70534 69.0755 6.45442C67.1221 5.15919 64.4095 4.05974 61.2124 3.16311C54.7942 1.3631 46.0267 0.27219 36.4125 0.27219V3.72781ZM11.6698 16.5566C8.9093 15.7214 6.81168 14.7796 5.44236 13.82C4.02291 12.8252 3.72781 12.067 3.72781 11.6511H0.27219C0.27219 13.7678 1.7165 15.4285 3.45912 16.6498C5.25187 17.9062 7.73898 18.9777 10.6691 19.8642L11.6698 16.5566ZM69.0972 11.6511C69.0972 12.067 68.8021 12.8252 67.3826 13.82C66.0133 14.7796 63.9157 15.7214 61.1552 16.5566L62.1559 19.8642C65.086 18.9777 67.5731 17.9062 69.3659 16.6498C71.1085 15.4285 72.5528 13.7678 72.5528 11.6511H69.0972ZM59.9277 18.2104V62.0848H63.3833V18.2104H59.9277ZM9.44166 18.2104V62.097H12.8973V18.2104H9.44166Z" fill="#7C51A1"/>
                    <path d="M2 11.747V55.5447C2 60.8749 17.407 65.1958 36.4125 65.1958C55.418 65.1958 70.825 60.8749 70.825 55.5447V11.7982" stroke="#7C51A1" stroke-width="3.45562" stroke-linecap="round"/>
                    <path d="M70.8245 33.2402C70.8245 35.7973 67.36 38.1275 61.6756 39.8817" stroke="#7C51A1" stroke-width="3.45562" stroke-linecap="round"/>
                    <path d="M20.77 3.10547V11.7468" stroke="#7C51A1" stroke-width="3.45562" stroke-linecap="round"/>
                    <path d="M52.0544 3.10547V11.7468" stroke="#7C51A1" stroke-width="3.45562" stroke-linecap="round"/>
                    <path d="M2 33.2402C2 35.8017 5.47636 38.1355 11.1781 39.8907" stroke="#7C51A1" stroke-width="3.45562" stroke-linecap="round"/>
                  </svg>
                    
                </div>
                <div class="body2 text-placehover">We offer a level of engagement and interaction that goes beyond the ordinary</div>
              </div>
              <div class="line-dark"></div>
              <div class="item flex-item-center gap-24 pt-20">
                <div class="heading3 text-yellow">
                  <svg width="75" height="68" viewBox="0 0 75 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 47.5038C2 37.7518 9.44657 29.614 19.1602 28.7505L24.8585 28.244C33.0664 27.5144 41.3228 27.5144 49.5307 28.244L55.2204 28.7498C64.9389 29.6136 72.3892 37.7555 72.3892 47.5124V49.5479C72.3892 56.6742 67.7064 62.9535 60.8761 64.986V64.986C54.9588 66.7469 48.5518 65.3336 43.9244 61.2468L40.6082 58.3179C38.6597 56.5971 35.7333 56.6013 33.7898 58.3278L30.5592 61.1977C25.9257 65.3139 19.4951 66.7458 13.5529 64.9844V64.9844C6.7005 62.9532 2 56.6573 2 49.5103V47.5038Z" stroke="#7C51A1" stroke-width="3.45562"/>
                    <path d="M16.7476 28.989V12.7617L37.1948 2L57.6421 12.7617V28.989" stroke="#7C51A1" stroke-width="3.45562" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.728 13.1309L37.2651 24.2575L57.703 13.1309" stroke="#7C51A1" stroke-width="3.45562" stroke-linejoin="round"/>
                    <path d="M37.1675 49.3518L37.1675 44.1704" stroke="#7C51A1" stroke-width="3.45562" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M37.1675 37.5102L37.1675 35.1743" stroke="#7C51A1" stroke-width="3.45562" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M52.2622 41.4219L57.6431 38.5899V36.6216" stroke="#7C51A1" stroke-width="3.45562" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M31.814 46.5195L37.1948 49.3516L42.5757 46.5195" stroke="#7C51A1" stroke-width="3.45562" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M22.1284 41.4219L16.7476 38.5899V36.6216" stroke="#7C51A1" stroke-width="3.45562" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                    
                </div>
                <div class="body2 text-placehover">Immerse your audience in a world where every moment is unforgettable.</div>
              </div>
            </div><a class="button button-yellow-hover text-on-surface mt-40" href="{{url('/about')}}"> <span> <span> </span></span><span class="bg-yellow">Explore more</span></a>
          </div>
          <div class="col-xxl-5 col-lg-6 list-img pr-80 pr-col-lg-0">
            <div class="bg-img">
              <div class="logo">
               

                <xml  encoding="utf-8"?>
                  <!-- Generator: Adobe Illustrator 24.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                  <svg  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  width="150" height="80" viewBox="0 0 73.31 40.31" fill="none" style="enable-background:new 0 0 73.31 40.31;" xml:space="preserve">
                  <style type="text/css">
                    .st0{fill:#71529C;}
                    .st1{fill:none;stroke:#AC86B8;stroke-width:0.5;stroke-linecap:round;stroke-miterlimit:10;}
                    .st2{fill:#71529C;stroke:#AC86B8;stroke-width:0.5;stroke-linecap:round;stroke-miterlimit:10;}
                    .st3{fill:none;stroke:#FFFFFF;stroke-width:0.5;stroke-linecap:round;stroke-miterlimit:10;}
                    .st4{fill:none;stroke:#FFFFFF;stroke-width:0.5;stroke-miterlimit:10;}
                  </style>
                  <path class="st0" d="M25.78,32.91c0,0,3.86,2.43,5.97,2.82c1.15,0.21,4.03,0.62,5.12,0.64c1.67,0.03,5.79-0.41,8.07-1.21
                    c2.22-0.78,3.26-1.79,3.26-1.79s-1.23,2.45-3.71,3.56c-2.06,0.92-5.54,1.77-7.15,1.77c-1.26,0-3.85-0.59-4.88-0.89
                    C30.07,37.14,25.78,32.91,25.78,32.91z"/>
                  <g>
                    <path class="st1" d="M24.6,31.62c0,0,4.68,4.76,12.6,4.76c8.89,0,11.61-3.84,11.61-3.84"/>
                    <path class="st1" d="M24.6,31.62c0,0,4.68,7.09,12.6,7.09c8.89,0,11.61-6.17,11.61-6.17"/>
                  </g>
                  <path class="st2" d="M4.16,1.68h64.57c1.62,0,2.93,1.31,2.93,2.93v21.21c0,1.61-1.3,2.92-2.91,2.93l-26.1,0.06
                    c-1.04,0.01-2.04-0.43-2.74-1.21l-1.02-1.14c-1.17-1.3-3.19-1.35-4.42-0.12l-1.35,1.35c-0.76,0.76-1.8,1.2-2.88,1.2L4.18,29.2
                    c-1.63,0.01-2.95-1.3-2.95-2.93V4.61C1.23,3,2.54,1.68,4.16,1.68z"/>
                  <g id="Font">
                    <line class="st3" x1="8.98" y1="11.71" x2="5.24" y2="20.26"/>
                    <line class="st3" x1="5.24" y1="11.74" x2="8.98" y2="20.26"/>
                    <line class="st3" x1="18.96" y1="11.63" x2="18.96" y2="20.18"/>
                    <path class="st3" d="M20.52,20.15v-8.52c0-0.07,0.1-0.1,0.13-0.03l3.48,8.54c0.03,0.07,0.13,0.05,0.13-0.03v-8.52"/>
                    <polyline class="st3" points="25.82,11.59 29.01,11.59 29.57,11.59 	"/>
                    <polyline class="st3" points="41.81,15.87 44.99,15.87 45.55,15.87 	"/>
                    <line class="st3" x1="31.19" y1="11.59" x2="34.95" y2="11.59"/>
                    <polyline class="st3" points="31.13,15.89 34.32,15.89 34.89,15.89 	"/>
                    <polyline class="st3" points="31.19,20.22 34.37,20.22 34.93,20.22 	"/>
                    <line class="st3" x1="27.7" y1="20.15" x2="27.7" y2="11.59"/>
                    <polyline class="st3" points="52.49,11.59 55.67,11.59 56.23,11.59 	"/>
                    <line class="st3" x1="54.36" y1="20.15" x2="54.36" y2="11.59"/>
                    <line class="st3" x1="57.79" y1="20.17" x2="57.79" y2="11.61"/>
                    <line class="st3" x1="31.13" y1="20.18" x2="31.13" y2="11.59"/>
                    <line class="st3" x1="64.71" y1="11.59" x2="68.47" y2="11.59"/>
                    <polyline class="st3" points="64.65,15.89 67.85,15.89 68.41,15.89 	"/>
                    <polyline class="st3" points="64.71,20.22 67.89,20.22 68.46,20.22 	"/>
                    <line class="st3" x1="64.65" y1="20.18" x2="64.65" y2="11.59"/>
                    <polyline class="st3" points="47.17,11.58 50.36,11.58 50.93,11.58 	"/>
                    <polyline class="st3" points="47.17,20.2 50.35,20.2 50.92,20.2 	"/>
                    <line class="st3" x1="47.11" y1="20.17" x2="47.11" y2="11.58"/>
                    <path class="st4" d="M40.48,20.15"/>
                    <path class="st3" d="M10.54,20.1v-7.76c0-0.44,0.36-0.8,0.8-0.8h2.15c0.44,0,0.8,0.36,0.8,0.8v2.69c0,0.44-0.36,0.8-0.8,0.8h-2.25
                      l3.05,4.28"/>
                    <path class="st3" d="M36.5,20.15v-7.76c0-0.44,0.36-0.8,0.8-0.8h2.15c0.44,0,0.8,0.36,0.8,0.8v2.69c0,0.44-0.36,0.8-0.8,0.8H37.2
                      l3.05,4.28"/>
                    <path class="st3" d="M41.81,20.18v-7.76c0-0.44,0.36-0.8,0.8-0.8h2.15c0.44,0,0.8,0.36,0.8,0.8v7.76"/>
                    <path class="st3" d="M63.1,11.59l-1.08,7.77c0,0.44-0.36,0.8-0.8,0.8l0,0c-0.44,0-0.76-0.28-0.8-0.8l-1.08-7.77"/>
                  </g>
                  </svg>
              </div>
              <div class="list-avatar"> 
                <div class="avatar">   
                  <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g clip-path="url(#clip0_1_206)">
                    <rect width="96" height="96" fill="url(#pattern0)"/>
                    <circle cx="48" cy="48" r="48" fill="#D9D9D9"/>
                    <path d="M37.6809 52.9964C39.6787 52.5935 44.1456 52.1428 48.3639 52.1428C52.5823 52.1428 57.0492 52.5935 59.047 52.9964C59.5391 53.0956 59.9485 53.4163 60.166 53.8688C61.8713 57.4167 62.969 64.6393 62.9194 67.7379C62.8663 71.0528 60.5919 72.9559 57.721 72.9363C54.1399 72.9118 53.1099 67.7332 52.3485 65.9762H44.3797C43.6183 67.7332 42.5881 72.9119 39.0069 72.9363C36.136 72.9558 33.8616 71.0528 33.8085 67.7379C33.7588 64.6393 34.8565 57.4167 36.5619 53.8688C36.7794 53.4163 37.1887 53.0956 37.6809 52.9964Z" fill="#7C51A1" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M42.3407 56.7283V61.2727" stroke="#C1C1C1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M44.6125 59.0005L40.068 59.0005" stroke="#C1C1C1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M48.48 40.908V52.0881" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M30.6365 35.2293H31.4603C31.4603 34.8662 31.2226 34.5459 30.875 34.4407L30.6365 35.2293ZM66.092 35.2293L65.8535 34.4407C65.5059 34.5459 65.2682 34.8662 65.2682 35.2293H66.092ZM65.2682 50.5615C65.2682 51.0165 65.637 51.3854 66.092 51.3854C66.5471 51.3854 66.9159 51.0165 66.9159 50.5615H65.2682ZM29.8126 50.45C29.8126 50.905 30.1814 51.2738 30.6365 51.2738C31.0915 51.2738 31.4603 50.905 31.4603 50.45H29.8126ZM25.0208 30.6228C25.0208 30.1123 25.3977 29.4362 26.5514 28.6712C27.6732 27.9274 29.3508 27.2255 31.4978 26.6234C35.7803 25.4224 41.7437 24.6689 48.3643 24.6689V23.0211C41.6375 23.0211 35.5173 23.7848 31.0529 25.0369C28.8264 25.6613 26.9648 26.42 25.6408 27.2979C24.3486 28.1547 23.373 29.2616 23.373 30.6228H25.0208ZM48.3643 24.6689C54.9848 24.6689 60.9482 25.4224 65.2307 26.6234C67.3777 27.2255 69.0553 27.9274 70.1771 28.6712C71.3308 29.4362 71.7077 30.1123 71.7077 30.6228H73.3555C73.3555 29.2616 72.3799 28.1547 71.0877 27.2979C69.7637 26.42 67.9021 25.6613 65.6756 25.0369C61.2112 23.7848 55.091 23.0211 48.3643 23.0211V24.6689ZM30.875 34.4407C28.9172 33.8484 27.4002 33.1723 26.3908 32.4649C25.3575 31.7408 25.0208 31.1066 25.0208 30.6228H23.373C23.373 31.9176 24.2578 32.9822 25.4451 33.8143C26.6564 34.6632 28.3592 35.4011 30.3979 36.0179L30.875 34.4407ZM71.7077 30.6228C71.7077 31.1066 71.371 31.7408 70.3377 32.4649C69.3283 33.1723 67.8112 33.8484 65.8535 34.4407L66.3306 36.0179C68.3693 35.4011 70.0721 34.6632 71.2834 33.8143C72.4707 32.9822 73.3555 31.9176 73.3555 30.6228H71.7077ZM65.2682 35.2293V50.5615H66.9159V35.2293H65.2682ZM29.8126 35.2293V50.45H31.4603V35.2293H29.8126Z" fill="#7C51A1"/>
                    <path d="M72.5318 30.7263L72.7058 45.8955C72.7058 47.6997 70.1923 49.3392 66.0937 50.5537" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                    <path d="M30.6436 42.9903C35.0647 41.6252 41.4445 40.7681 48.538 40.7681C55.4522 40.7681 61.6882 41.5824 66.0933 42.8877" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                    <path d="M54.8316 61.1975C53.6182 61.1975 52.6346 60.2139 52.6346 59.0005C52.6346 57.7871 53.6182 56.8035 54.8316 56.8035" stroke="#C1C1C1" stroke-width="1.64778"/>
                    <path d="M54.8315 61.1975C56.0448 61.1975 57.0285 60.2139 57.0285 59.0005C57.0285 57.7871 56.0448 56.8035 54.8315 56.8035" stroke="#C1C1C1" stroke-width="1.64778"/>
                    <path d="M24.1969 30.6901L24.3709 45.8953C24.3709 47.6492 26.7462 49.2475 30.6438 50.4509" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                    </g>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_1_206" transform="scale(0.0104167)"/>
                    </pattern>
                    <clipPath id="clip0_1_206">
                    <rect width="96" height="96" fill="white"/>
                    </clipPath>
                    <image id="image0_1_206" width="96" height="96" xlink:href="data:image/png;base64,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"/>
                    </defs>
                  </svg>
                    
                </div>
                <div class="avatar">
                  <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g clip-path="url(#clip0_1_211)">
                    <rect width="96" height="96" fill="url(#pattern0)"/>
                    <circle cx="48" cy="48" r="48" fill="#D9D9D9"/>
                    <path d="M33.414 59.0857C32.4338 60.4212 31.8865 61.91 31.8865 63.4798C31.8865 69.2434 39.2639 73.9157 48.3643 73.9157C57.4647 73.9157 64.8421 69.2434 64.8421 63.4798C64.8421 61.91 64.2948 60.4212 63.3146 59.0857" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                    <path d="M29.689 51.8592V34.7335C29.689 33.9428 30.1139 33.2131 30.8016 32.8228L47.2793 23.4705C47.9519 23.0888 48.7757 23.0888 49.4483 23.4705L65.926 32.8228C66.6137 33.2131 67.0386 33.9428 67.0386 34.7335V51.8592C67.0386 52.6499 66.6137 53.3796 65.926 53.7699L49.4483 63.1222C48.7757 63.5039 47.9519 63.5039 47.2793 63.1222L30.8016 53.7699C30.1139 53.3796 29.689 52.6499 29.689 51.8592Z" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M48.3637 63.1885V44.0535" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M66.7191 33.6357L48.3642 44.0534L30.0093 33.6357" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M48.3637 23.7976V26.5439" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M48.3637 30.3887V33.135" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M48.3637 36.9797V39.726" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M33.5296 50.9341L30.2126 52.7783" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M36.8253 49.0636L40.1209 47.1931" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M46.7121 43.4077L43.6912 45.1669" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M49.7326 43.4597L52.7535 45.2189" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M59.6193 49.1156L56.3238 47.2451" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M62.9149 50.9863L66.5154 52.9881" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_1_211" transform="scale(0.0104167)"/>
                    </pattern>
                    <clipPath id="clip0_1_211">
                    <rect width="96" height="96" fill="white"/>
                    </clipPath>
                    <image id="image0_1_211" width="96" height="96" xlink:href="data:image/png;base64,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"/>
                    </defs>
                  </svg>
                    
                </div>
                <div class="avatar">
                  <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g clip-path="url(#clip0_1_210)">
                    <rect width="96" height="96" fill="url(#pattern0)"/>
                    <circle cx="48" cy="48" r="48" fill="#D9D9D9"/>
                    <path d="M58.6544 72.5753C66.961 71.382 72.7213 68.7777 72.7213 65.7571C72.7213 61.6079 61.852 58.2443 48.444 58.2443C35.036 58.2443 24.1667 61.6079 24.1667 65.7571C24.1667 69.9064 35.036 73.27 48.444 73.27L51.3421 73.211" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                    <path d="M46.1639 68.0195L51.3561 73.2115L46.1639 78.4034" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M42.664 45.7745L42.664 46.7152C42.6639 49.8321 45.1907 52.3589 48.3077 52.3589C51.4246 52.3589 53.9514 49.8321 53.9514 46.7152L53.9514 45.7746C53.9514 42.6576 51.4246 40.1309 48.3077 40.1309C45.1907 40.1309 42.664 42.6576 42.664 45.7745Z" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M42.6639 46.7153L42.6639 35.4279C42.6639 32.311 45.1907 29.7842 48.3076 29.7842C50.7649 29.7842 53.1766 31.3546 53.9514 33.5466" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M61.1599 35.2706V46.8716C61.1599 49.9019 63.6165 52.3585 66.6468 52.3585H66.9604C69.9907 52.3585 72.4473 49.9019 72.4473 46.8716V35.2706C72.4473 32.2403 69.9907 29.7837 66.9604 29.7837H66.6468C63.6165 29.7837 61.1599 32.2403 61.1599 35.2706Z" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M24.1667 48.596C24.9414 50.7881 27.353 52.3585 29.8104 52.3585C32.9273 52.3585 35.4541 49.8318 35.4541 46.7148V45.7742C35.4541 42.6573 32.9273 40.1305 29.8104 40.1305H29.6222C32.3236 40.1305 34.5134 37.9407 34.5134 35.2393V34.4868C34.5134 31.8893 32.4078 29.7837 29.8104 29.7837C28.2717 29.7837 26.9056 30.5226 26.0475 31.6649" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_1_210" transform="scale(0.0104167)"/>
                    </pattern>
                    <clipPath id="clip0_1_210">
                    <rect width="96" height="96" fill="white"/>
                    </clipPath>
                    <image id="image0_1_210" width="96" height="96" xlink:href="data:image/png;base64,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"/>
                    </defs>
                  </svg>
                    
                </div>
                <div class="avatar">
                  <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g clip-path="url(#clip0_1_209)">
                    <rect width="96" height="96" fill="url(#pattern0)"/>
                    <circle cx="48" cy="48" r="48" fill="#D9D9D9"/>
                    <path d="M18.927 27.0551L44.9747 14V25.8682L33.1347 31.8024L48 39.2529L62.8653 31.8024L51.026 25.8685V14.0003L77.073 27.0551C78.8669 27.9542 80 29.792 80 31.8024V63.3499L69.4102 57.2212V40.3903L53.2949 48.4673V69.1045L66.4489 62.5117L77.4231 68.8628C77.3095 68.9309 77.1927 68.9951 77.073 69.0551L50.368 82.4397C48.8773 83.1868 47.1227 83.1868 45.632 82.4397L18.927 69.0551C18.8068 68.9948 18.6895 68.9304 18.5754 68.8619L29.5494 62.5109L42.7051 69.1045V48.4673L26.5898 40.3903V57.2194L16 63.3481V31.8024C16 29.792 17.1331 27.9542 18.927 27.0551Z" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_1_209" transform="scale(0.0104167)"/>
                    </pattern>
                    <clipPath id="clip0_1_209">
                    <rect width="96" height="96" fill="white"/>
                    </clipPath>
                    <image id="image0_1_209" width="96" height="96" xlink:href="data:image/png;base64,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"/>
                    </defs>
                  </svg>
                    
                </div>
                <div class="avatar">
                  <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g clip-path="url(#clip0_1_208)">
                    <rect width="96" height="96" fill="url(#pattern0)"/>
                    <circle cx="48" cy="49" r="48" fill="#D9D9D9"/>
                    <path d="M38.979 59.4541V37.5455C38.9809 37.179 39.0797 36.8194 39.2653 36.5033C39.451 36.1872 39.7169 35.9258 40.0361 35.7456C40.3553 35.5654 40.7165 35.4728 41.0831 35.4772C41.4496 35.4816 41.8085 35.5828 42.1233 35.7705L60.8877 46.6741C61.2036 46.8567 61.4659 47.1191 61.6483 47.4351C61.8307 47.7512 61.9267 48.1096 61.9267 48.4745C61.9267 48.8393 61.8307 49.1978 61.6483 49.5138C61.4659 49.8298 61.2036 50.0923 60.8877 50.2748L42.1233 61.2291C41.8085 61.4169 41.4496 61.5181 41.0831 61.5225C40.7165 61.5268 40.3553 61.4342 40.0361 61.254C39.7169 61.0738 39.451 60.8124 39.2653 60.4963C39.0797 60.1802 38.9809 59.8207 38.979 59.4541Z" fill="#7C51A1" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M24.6291 32.376H25.453C25.453 32.0129 25.2153 31.6926 24.8677 31.5874L24.6291 32.376ZM72.3705 32.376L72.1319 31.5874C71.7843 31.6926 71.5466 32.0129 71.5466 32.376H72.3705ZM71.5466 73.8652C71.5466 74.3202 71.9155 74.689 72.3705 74.689C72.8255 74.689 73.1944 74.3202 73.1944 73.8652H71.5466ZM23.8052 73.8767C23.8052 74.3317 24.1741 74.7006 24.6291 74.7006C25.0841 74.7006 25.453 74.3317 25.453 73.8767H23.8052ZM16.782 26.1733C16.782 25.3385 17.3933 24.3535 18.9707 23.3075C20.5163 22.2827 22.8072 21.3278 25.7118 20.5132C31.5098 18.8872 39.5668 17.8708 48.4998 17.8708V16.223C39.4605 16.223 31.2467 17.2496 25.2669 18.9266C22.2827 19.7636 19.8079 20.7753 18.0601 21.9342C16.3442 23.072 15.1342 24.4878 15.1342 26.1733H16.782ZM48.4998 17.8708C57.4328 17.8708 65.4898 18.8872 71.2878 20.5132C74.1924 21.3278 76.4833 22.2827 78.0289 23.3075C79.6063 24.3535 80.2176 25.3385 80.2176 26.1733H81.8654C81.8654 24.4878 80.6554 23.072 78.9395 21.9342C77.1917 20.7753 74.7169 19.7636 71.7327 18.9266C65.7529 17.2496 57.5391 16.223 48.4998 16.223V17.8708ZM24.8677 31.5874C22.2175 30.7856 20.1426 29.8646 18.7485 28.8876C17.3304 27.8938 16.782 26.9653 16.782 26.1733H15.1342C15.1342 27.7763 16.2307 29.1352 17.8028 30.2369C19.3988 31.3555 21.6594 32.3383 24.3905 33.1646L24.8677 31.5874ZM80.2176 26.1733C80.2176 26.9653 79.6692 27.8938 78.2511 28.8876C76.857 29.8646 74.7821 30.7856 72.1319 31.5874L72.6091 33.1646C75.3402 32.3383 77.6008 31.3555 79.1968 30.2369C80.7689 29.1352 81.8654 27.7763 81.8654 26.1733H80.2176ZM71.5466 32.376V73.8652H73.1944V32.376H71.5466ZM23.8052 32.376V73.8767H25.453V32.376H23.8052Z" fill="#7C51A1"/>
                    <path d="M15.9581 26.2641V67.6807C15.9581 72.7211 30.5275 76.8071 48.4998 76.8071C66.4721 76.8071 81.0415 72.7211 81.0415 67.6807V26.3125" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                    <path d="M81.0409 46.5889C81.0409 49.007 77.7647 51.2105 72.3894 52.8693" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                    <path d="M30.5645 60.2749C28.3914 60.6778 26.4011 61.1517 24.636 61.685" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                    <path d="M66.4343 60.2749C68.6074 60.6778 70.5977 61.1517 72.3628 61.685" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                    <path d="M33.7076 18.0928V26.2643" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                    <path d="M63.2913 18.0928V26.2643" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                    <path d="M15.9581 46.5889C15.9581 49.0111 19.2455 51.218 24.6373 52.8778" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round"/>
                    </g>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_1_208" transform="scale(0.0104167)"/>
                    </pattern>
                    <clipPath id="clip0_1_208">
                    <rect width="96" height="96" fill="white"/>
                    </clipPath>
                    <image id="image0_1_208" width="96" height="96" xlink:href="data:image/png;base64,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"/>
                    </defs>
                  </svg>
                    
                </div>
                <div class="avatar">
                  <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g clip-path="url(#clip0_1_207)">
                    <rect width="96" height="96" fill="url(#pattern0)"/>
                    <circle cx="48" cy="48" r="48" fill="#D9D9D9"/>
                    <path d="M64.6033 61.4435V39.7739L43.882 28.0132" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M64.6393 39.7549L73.2816 34.8499" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M52.5939 23.7271V26.827" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M52.5939 31.167V34.2669" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M52.5939 38.6067V41.7066" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M53.8184 23.3579L72.4179 33.9143C73.1942 34.3549 73.6738 35.1786 73.6738 36.0711V55.4018C73.6738 56.2945 73.194 57.1183 72.4177 57.5588L65.8272 61.2982C65.068 61.7289 64.1383 61.7289 63.3792 61.298L44.7794 50.7414C44.0033 50.3008 43.5237 49.4772 43.5236 48.5847L43.5225 29.2561C43.5225 28.3635 44.0021 27.5397 44.7783 27.0992L51.3702 23.3579C52.1294 22.927 53.0592 22.927 53.8184 23.3579Z" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M69.0232 54.4165L73.1672 56.7205" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M65.3035 52.3054L61.5836 50.1941" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M54.1441 45.9211L57.554 47.9068" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M50.7341 45.8623L47.3242 47.848" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M70.6892 63.1697C68.6878 65.8448 64.3855 67.6948 59.401 67.6948C52.506 67.6948 46.9165 64.1548 46.9165 59.7879C46.9165 58.7432 47.2364 57.7457 47.8177 56.8328" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M23.9517 67.8303C23.6908 68.2828 23.5485 68.7713 23.5485 69.2809C23.5485 71.6166 26.5381 73.51 30.226 73.51C33.9139 73.51 36.9035 71.6166 36.9035 69.2809C36.9035 68.7922 36.7725 68.3228 36.5317 67.886" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M30.2264 48.8823C32.5698 48.8823 34.4695 46.9826 34.4695 44.6392C34.4695 42.2957 32.5698 40.396 30.2264 40.396C27.8829 40.396 25.9832 42.2957 25.9832 44.6392C25.9832 46.9826 27.8829 48.8823 30.2264 48.8823Z" fill="#D9D9D9" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M37.6519 56.3076C37.6519 54.3382 36.8696 52.4495 35.4771 51.057C34.0845 49.6644 32.1958 48.8821 30.2264 48.8821C28.2571 48.8821 26.3683 49.6644 24.9758 51.057C23.5832 52.4495 22.8009 54.3382 22.8009 56.3076V59.49H25.9833L27.0441 67.9763H33.4088L34.4696 59.49H37.6519V56.3076Z" stroke="#7C51A1" stroke-width="1.64778" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_1_207" transform="scale(0.0104167)"/>
                    </pattern>
                    <clipPath id="clip0_1_207">
                    <rect width="96" height="96" fill="white"/>
                    </clipPath>
                    <image id="image0_1_207" width="96" height="96" xlink:href="data:image/png;base64,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"/>
                    </defs>
                  </svg>
                    
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="video-block"> 
      <div class="bg-img w-100 h-100"><img src="{{asset('frontend')}}/images/components/video-bg.jpg" alt=""/></div>
      <div class="play-btn"> <i class="ph-fill ph-play fs-36 text-white"></i></div>
    </div>
    <div class="faqs-block pt-100 pb-100">
      <div class="bg-blur"></div>
      <div class="container">
        <div class="row flex-center"> 
          <div class="col-lg-6 col-md-9 col-sm-10">
            <div class="heading3 text-center">FAQs</div>
          </div>
          <div class="col-12 col-lg-9 col-sm-10 mt-40">
            <div class="list-question"> 
                    <div class=" question-item pt-24 pb-24 pointer">
                      <div class="question-item-main flex-between heading7 text-placehover">How can we integrate your brand into the game environment?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                      <div class="content-question">
                        <div class="text-placehover pt-16">You can access our service from any device with an internet connection.</div>
                      </div>
                    </div>
                    <div class=" question-item pt-24 pb-24 pointer">
                      <div class="question-item-main flex-between heading7 text-placehover">Can we customize the game's storyline to align with your brand message?<i class="ph-bold ph-plus fs-20 p-8"></i></div>
                      <div class="content-question">
                        <div class="text-placehover pt-16">Our products and services include [describe your products/services briefly].</div>
                      </div>
                    </div>
                    
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="form-contact section-contact bg-line-dark"> 
      <div class="bg-img"> <img class="w-100 h-100 " src="{{asset('frontend')}}/images/components/brand-2.png" alt=""/></div>
      <div class="container">
        <div class="bg-blur"></div>
        <div class="form-block pt-60 pb-60">
          <form>
            <div class="heading3">Delighted to Work Together</div>
            <div class="row row-gap-20 mt-40">
              <div class="heading6">
                We have developed over 100 projects so far. Will yours be next?
              </div>
            </div>
            <a href="./{{url('/contact')}}" class="button bg-yellow button-yellow-hover text-on-surface mt-32"> <span> <span> </span></span><span class="bg-yellow">Message<i class="ph-bold ph-arrow-up-right text-on-surface fs-20 flex-center"></i></span></a>
          </form>
        </div>
      </div>
    </div>
    <div class="list-partner bg-yellow pt-20 pb-20"> 
      <div class="container gap-32 row-gap-32 flex-between flex-wrap">
        <div class="list-partner-slide style-three pt-20 pb-20">
          <div class="list">
            <div class="item"> 
              <div class="text">If you are wondering how we can help your business reach out to us and schedule a free consultation with our Business Expert. </div>
            </div>
            <div class="item"> 
              <div class="text">If you are wondering how we can help your business reach out to us and schedule a free consultation with our Business Expert. </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <div class="style-yellow">
      <div id="preload"> 
        <div class="main-content flex-center">
          <div class="circle flex-center"><span></span>
            <div class="circle-child"></div>
          </div>
          <div class="circle flex-center"></div>
        </div>
      </div>
    </div>
    <div class="js-video-modal">
      <div class="js-video-modal-container">
        <div class="video-block">
          <iframe src="https://www.youtube.com/embed/VCPGMjCW0is?si=8Isn9pB4fIgvrrG4" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="allowfullscreen"></iframe>
        </div>
      </div>
    </div>
    <a class="scroll-to-top-btn" href="#header"><i class="ph-bold ph-caret-up"></i></a>
  </div>


@endsection
