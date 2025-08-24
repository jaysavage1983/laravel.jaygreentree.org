<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') | JayGreentree</title>
  <!-- Styles -->
    <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
  <link href="{{ asset('assets/vendor/fontawesome/css/all.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/prism/prism.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/bootstrap-social.css') }}" rel="stylesheet">

  <style>
   .blueBorder {
    height: 0.2rem;
    border: none;
    color: #1b8880;
    background-color: #1b8880;
    width: 10%;
    margin-top: 0px;
    margin-bottom: 2rem;
  }
  .campusImages {
    max-width: 100%; 
    height: 120px; 
    margin-bottom: 1rem;
  }
  .campusImage:hover {
    box-shadow: 0px 0px 20px lightgray; 
  }
  .blueBtn {
    background-color: #1b8880;
    border-color: #1b8880;
    color: white;
    border-radius: 0.5rem;
  }
  .blueBtn:hover {
    background-color: white;
    border-color: #1b8880;
    color: #1b8880;
  }
  .imageSquare {
    min-width: 80%; 
    background-position: 50% 50%; 
    border-radius: 8px;
    background-repeat: no-repeat; 
    background-size: cover;
  }
  .imageSquare:hover {
    box-shadow: 4px 4px 20px lightslategray;
  }
  .imageSquareText {
    position: absolute; 
    padding-right: 2rem; 
    bottom: 0; 
    right: 0;
    max-width: 70%;
  }
  .imageSquareText > h6 {
    font-size: 1.5rem;
  }
  .onlineSection a {
    color: white; 
    text-decoration: none;
  }
  @media (max-width: 900px) {
    .videoSectionSmall {
      width: 100%; 
      display: block;
      background-color: #d6d3cc; 
    }
    .videoSectionWide {
      display: none !important;
    }
  }
  @media (min-width: 900px) {
    .videoSectionWide {
      width: 100%;
      display: block;
      background-color: #d6d3cc;
    }
    .videoSectionSmall {
      display: none !important;
    }
  }
  .link a {
    color: black;
  }
  .icon-youtube-play {
    color: white; 
  }
  .youtubeLink:hover {
    cursor: pointer;
  }
  .link:hover h5 {
    text-shadow: 0px 0px 15px white;
  }
  @media (max-width: 576px) {
    .campusImage {
      border: 2px solid #FC4D0F;
      margin: 5px 0 5px 0;
    }
  }
  .recentMessage:hover {
    text-decoration: underline;
  }
  </style>


    <link rel="alternate" type="application/rss+xml" href="{{ url('feeds/articles.xml') }}">
    <link rel="alternate" type="application/rss+xml" href="{{ url('feeds/livestreams.xml') }}">  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<!-- Body -->
<body>

<!-- Navbar -->
<header id="header" class="header d-flex align-items-center">
  <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-end">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <h4 class="text-uppercase">
          JayGreentree
        </h4>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li>
            <a href="/" class="{{ request()->is('') ? 'btn btn-dark' : ''}}">
              Home
            </a>
          </li>
          <li>
            <a href="/about" class="{{ request()->is('about') ? 'btn btn-dark text-white' : ''}}">
              About
            </a>
          </li>
          <li>
            <a href="/articles" class="{{ request()->is('articles') ? 'btn btn-dark' : ''}}">
              Articles
            </a>
          </li>
          <li class="btn">
            <a href="/contact" class="{{ request()->is('contact') ? 'btn btn-dark' : ''}}">
              Contact
            </a>
          </li>
          <li>
            <a href="javascript:;" data-bs-toggle="collapse" data-bs-target="#searchbar"><i class="bi bi-search"></i></a>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">
          @yield('title')
        </h1>

        
        <nav class="breadcrumbs">
          
          <ol>
            <li>
              <a href="/">
                <i class="fa-solid fa-house"></i>
              </a>
            </li>
            
            <li>
              
              @if(View::hasSection('title'))
              <a href="@yield('title')">
                @yield('title')
              </a>
              @endif
            </li>
            
          </ol>
        
        </nav>
      </div>
    </div><!-- End Page Title -->
      <div class="container">
        <div class="row">
          <span id="countdown"></span>
        </div>
      </div>


<main class="main">
  @yield('content')
</main>

<!-- Footer -->
  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">

        <div class="col-lg-3 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">
              JayGreentree
            </span>
          </a>
          
          <div class="footer-contact pt-3">
            
              <p>
                street1
              </p>
                <p>City, State Zip</p>

            <p class="mt-3">
              <strong>Phone:</strong>
              <span>
                
              </span>
            </p>
            <p>
              <strong>Email:</strong>
              <span>
                
              </span>
            </p>

          </div>
          <div class="social-links d-flex mt-4">
            <a href="//twitter.com/jaysavage1983" target="_blank"><i class="bi bi-twitter-x"></i></a>
            <a href="//facebook.com/jaysavage1983" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="//instagram.com/jaysavage1983" target="_blank"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 footer-links">
          <h4>Pages</h4>
          <ul>
            
            <li class="">
              <a href="page.url">page.title</a>
            </li>
            
          </ul>
        </div>

        <div class="col-lg-3 col-md-3 footer-links">
          <h4>Articles</h4>
          <ul>
            
            <li>
              <a href="article.url">
                article.title
                <small>
                 {{  date("M d, y") }}
                </small>
              </a>
            </li>
            
          </ul>
        </div>

        <div class="col-lg-3 col-md-3 footer-links">
          <h4>Recent Livestreams</h4>
          <ul>
          
            <li>
              <a href="stream.url">
                stream.title
              </a>
            </li>
          
          </ul>
        </div>


      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>
        <span>Copyright</span>
        &copy; {{ date('Y') }}
        <strong class="px-1 sitename">
          JayGreentree
        </strong> 
        <span>All Rights Reserved</span>
      <span class="credits">

      </span>
      </p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="javascript:;" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <script src="{{ asset('assets/vendor/prism/prism.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('assets/js/chopNew.js') }}"></script>

</body>
</html>