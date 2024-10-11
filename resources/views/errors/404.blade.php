<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Page not found</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap"/>
    <link rel="shortcut icon" href="{{asset('frontend')}}/images/xri-logo.svg"/>
    <link rel="stylesheet" href="{{asset('frontend')}}/css/animate.min.css"/>
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('frontend')}}/css/slick.css"/>
    <link rel="stylesheet" href="{{asset('frontend')}}/icons/style.css"/>
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css"/>
    <link rel="stylesheet" href="{{asset('frontend')}}/css/swiper-bundle.min.css"/>
  </head>
  <body> 
    <div id="header">
    </div>
    <div id="content">
      <div class="page-not-found-block flex-center">
        <div class="container">
          <div class="row flex-center row-gap-40">
            <div class="col-lg-6 col-md-10">
              <div class="bg-img scroll-left-to-right3"><img class="w-100" src="{{asset('admin')}}/img/error.jpg" alt=""/>
              </div>
              <div class="text-content animate__animated animate__bounceInDown animate__delay-1s text-purple"><span class="text-purple"><span class="text-purple">4</span><span class="text-purple">0</span><span class="text-purple">4</span><span>E</span><span>R</span><span>R</span><span>0</span><span>R</span></div>
            </div>
            <div class="col-lg-6">
              <div class="content"> 
                <div class="text text-white scroll-right-to-left1">Oh no! error 404</div>
                <div class="text-placehover mt-24 scroll-right-to-left2">The page you are looking for cannot be found. take a break before trying again </div>
                <div class="block-button d-inline-block scroll-right-to-left3 mt-24"> <a class="button bg-purple button-purple-hover text-white" href="{{url('/')}}"><span> <span> </span></span><span class="bg-purple">Back to hompage</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="footer">
    </div>
    <script src="{{asset('frontend')}}/js/jquery-3.7.0.js"></script>
    <script src="{{asset('frontend')}}/js/jquery-migrate-3.4.1.js"></script>
    <script src="{{asset('frontend')}}/js/slick.min.js"></script>
    <script src="{{asset('frontend')}}/js/scrollreveal.js"></script>
    <script src="{{asset('frontend')}}/js/swiper-bundle.min.js"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend')}}/js/countUp.min.js"></script>
    <script src="{{asset('frontend')}}/js/waypoints.min.js"></script>
    <script src="{{asset('frontend')}}/js/phosphor-icons.js"></script>
    <script src="{{asset('frontend')}}/js/main.min.js"></script>
  </body>
</html>