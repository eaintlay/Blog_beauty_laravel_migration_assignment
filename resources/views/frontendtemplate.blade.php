<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Beauty Blog - @yield('title')</title>

  <link href="{{ asset('frontendtemplate/instylr/img/favicon.ico')}}" rel="shortcut icon"/>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('frontendtemplate/instylr/css/bootstrap.min.css')}}"/>
  <link rel="stylesheet" href="{{ asset('frontendtemplate/instylr/css/font-awesome.min.css')}}"/>
  <link rel="stylesheet" href="{{ asset('frontendtemplate/instylr/css/owl.carousel.min.css')}}"/>

  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="{{ asset('frontendtemplate/instylr/css/style.css')}}"/>

</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header section -->
  <header class="header-section">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark site-navbar">
      <a class="navbar-brand site-logo" href="index.html#">
        <h2><span>In</span>Beauty</h2>
        <p>Beauty Blog</p>
      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <!-- Main menu -->
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{route('index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('allcategory')}}">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('aboutus')}}">Portfolio</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{route('createpost')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Post
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('index')}}">Laravel Post</a>
          <a class="dropdown-item" href="{{route('blog')}}">Another Post</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('createpost')}}">Create Post</a>
        </div>
      </li>


        
        <li class="nav-item">
          <a class="nav-link" href="{{route('blog')}}">blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </li>  

          <!-- <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>     -->
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-capitalize" href="#">Profile</a>
              
              <form action="{{ route('logout') }}" method="POST" class="pb-2">
                @csrf
                <button class="btn  text-dark" type="submit">
                 
                  Logout
                </button>
              </form>
              @csrf
            </form>
          </div>
        </li>
        @endif

        
      </ul>
        <!-- <div class="social-links my-2 my-lg-0">
          <a href="#"><i class="fa fa-pinterest"></i></a>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
        </div> -->
      </div>
    </nav>
  </header>
  <!-- Header section end-->

  <!-- Hero section -->
  <section class="hero-section">
    <div class="hero-slider owl-carousel">
      <div class="hs-item set-bg" data-setbg="{{ asset('frontendtemplate/instylr/img/slider/1.jpg')}}" data-hash="slide-1">
        <div class="container">
          <h2 class="text-secondary">Beauty is power</h2>
          <a href="{{route('readmore')}}" class="site-btn">Read More <i class="fa fa-angle-double-right"></i></a>
        </div>
        <div class="next-hs set-bg" data-setbg="{{ asset('frontendtemplate/instylr/img/slider/2.jpg')}}">
          <a href="#slide-2" class="nest-hs-btn">Next</a>
        </div>
      </div>
      <div class="hs-item set-bg" data-setbg="{{ asset('frontendtemplate/instylr/img/slider/2.jpg')}}" data-hash="slide-2">
        <div class="container">
          <h2 class="text-secondary">Beauty is power</h2>
          <a href="#" class="site-btn">Read More <i class="fa fa-angle-double-right"></i></a>
        </div>
        <div class="next-hs set-bg" data-setbg="{{ asset('frontendtemplate/instylr/img/slider/1.jpg')}}">
          <a href="#slide-1" class="nest-hs-btn">Next</a>
        </div>
      </div>
    </div>
    <div class="hero-social-warp">
      <p>Follow us on Social MEdia</p>
      <div class="hero-social-links">
        <a href="#"><i class="fa fa-behance"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
      </div>
    </div>
  </section>
  <!-- Hero section end-->
  

  @yield('content')

  <!-- Back to top -->
  <div class="container">
    <div class="backtotop">
      <div class="up-btn" id="backTotop">UP</div>
    </div>
  </div>

  

  <!-- Footer section -->
  <footer class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget fw-about">
            <nav class="navbar navbar-expand-md navbar-white bg-info site-navbar">
              <a class="brand site-logo" href="index.html#">
                <h2><span>In</span>Beauty</h2>
                
              </a>
            </nav>
            <p>Velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesu ada. In arcu justo, sagittis consequat pulvinar.</p>
            <div class="fw-social">
              <a href="#"><i class="fa fa-pinterest"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget resent-post">
            <h2 class="fw-title">Recent Posts</h2>
            <div class="rp-item">
              <h4>Paris MakeUp Week</h4>
              <span>20 January 2019</span>
            </div>
            <div class="rp-item">
              <h4>About Our Beauty App</h4>
              <span>20 January 2019</span>
            </div>
            <div class="rp-item">
              <h4>Simple Blog Post</h4>
              <span>20 January 2019</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget">
            <h2 class="fw-title">Useful Links</h2>
            <ul>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">MakeUp Tutorials</a></li>
              <li><a href="#">Reviews</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Subscribe</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget contact-widget">
            <h2 class="fw-title">Contact</h2>
            <ul>
              <li><span>Address:</span>Main Str, no 23, New York</li>
              <li><span>Phone:</span>+546 990221 123</li>
              <li><span>Mail:</span>beauty@contact.com</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    </div>
  </footer>
  <!-- Footer section end -->
  
  
  <!--====== Javascripts & Jquery ======-->
  <script src="{{ asset('frontendtemplate/instylr/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{ asset('frontendtemplate/instylr/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontendtemplate/instylr/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('frontendtemplate/instylr/js/main.js')}}"></script>

</body>
</html>
