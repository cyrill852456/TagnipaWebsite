<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{__('Tagnipa Webiste')}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link rel="shortcut icon" type="x-icon" href="{{asset('img/earth.png')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.cs')}}s" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/landingpage.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eStartup - v4.9.0
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  .content-blog p{
  text-align: justify;
  display: -webkit-box;
  -webkit-line-clamp: 5;
  -webkit-box-orient: vertical;   
  overflow: hidden;
  color:#333;
  padding:5px 10px;
}
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div id="logo">
        <h1><a href="#"><img src="{{asset('img/earth.png')}}" alt=""  width="50"  title="" /> <span>Tagnipa</span> Website</a></h1>
       
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('news&updates')}}">News & Announcement</a></li>
          <li><a class="nav-link scrollto" href="{{route('videos')}}">Tutorial Videos</a></li>
          <li><a class="nav-link scrollto" href="#about-us">About Us</a></li>
          <li><a class="nav-link scrollto" href="{{route('MemberLogin')}}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-in">
      <img src="{{asset('img/earth.png')}}" alt="Hero Imgs" width="80" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to Tagnipa</h1>
      <br>
      <h2>Tagnipa is a website that you can search and exchange garbage to items.<br>
        You can also know how to resegregate garabage and use garabage to purpose.</h2>
      
      <a href="{{route('MemberLogin')}}" class="btn-get-started scrollto">Get Started Now</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

     <!-- ======= Blog Section ======= -->
     <section id="blog" class="padd-section">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Latest News & Announcements</h2>
          <p class="separator">ikaw na bahala diri kya rey
          </p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          @foreach ($post as $posts)
          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"><img src="{{Storage::url($posts->image)}}" class="img-responsive" alt="img"></a>
              <div class="content-blog">
                <h4>{{$posts->title}}</h4>
                <p class="bodys">{{$posts->body}}</p>
                <span>{{date('m/d/Y',strtotime($posts->date))}}</span>
                <a class="float-end readmore" href="{{route('news&updates')}}" target="_blank">read more</a>
              </div>
            </div>
          </div>
          @endforeach
      

         

      

        </div>
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us padd-section">
        <div class="row justify-content-center">
          <!--- Section 1-->
          <div class="col-md-5 col-lg-3">
            <img src="{{asset('img/recycling.gif')}}" alt="About" data-aos="zoom-in" data-aos-delay="100">
          </div>
          <div class="col-md-7 col-lg-5">
            <div class="about-content" data-aos="fade-left" data-aos-delay="100">
              <h2>What is <span>Tagnipa Website?</span></h2>
              <p class="section-pag">is designed to persuade waste producers to reuse and recycle more wastes by giving rewards to members who actively participate in the waste management campaign.
                At present, waste problem is still prevalent. The government is in continuous search for the solution of the arising waste management problem. 
                One of the major factor that contributes to waste management problem is the behaviour of the public or the waste producers in managing their own waste.
                Most of the people do not practice recycling for their recyclable waste materials and do not dispose their garbage properly.
                The local government must have an effective system to encourage the public to be more mindful of their own wastes.
                To address the problems mentioned above, the city  proposed a Recyclable Management with Reward System to encourage waste producer communities to engage in recycling activities and make use of different junkshops and recycling centers.
              </p>
            </div>
          </div>
        
         <!-- End Secton 1-->
        </div>
     
</section>
<section id="about-us" class="about-us padd-section">
      <div class="row justify-content-center">
       

       <!-- Section 2 -->
       
        <div class="col-md-7 col-lg-5">
          <div class="about-content" data-aos="fade-left" data-aos-delay="100">
            <h2>Tagnipa Website also <span>Features</span></h2>
            <h3>Segregation Report & Citizen Report</h3>
            <br>
            <p class="section-pag">Tagnipa will give rewards to those people who are following segregation & 
              also the people who report improper waste disposal.
            </p>
          </div>
        </div>
        <div class="col-md-5 col-lg-3">
          <img src="{{asset('img/segregate.gif')}}" alt="About" data-aos="zoom-in" data-aos-delay="100">
        </div>
        <!-- End Section 2-->

      </div>
   
  </section>

  <section id="about-us" class="about-us padd-section">
    <div class="row justify-content-center">
     

     <!-- Section 3 -->
     <div class="col-md-5 col-lg-3">
      <img src="{{asset('img/rewards.gif')}}" alt="About" data-aos="zoom-in" data-aos-delay="100">
    </div>
      <div class="col-md-7 col-lg-5">
        <div class="about-content" data-aos="fade-left" data-aos-delay="100">
          <h2>Exchange garbage to <span>Item</span></h2>
          <h3>Get Reward Points & Exchange Reward</h3>
          <br>
          <p class="section-pag">Tagnipa will give rewards to those people who are following segregation & also the people who report improper waste disposal.
          </p>
        </div>
      </div>
      <!-- End Section 3-->

    </div>
 
</section>
    
    <!-- End About Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Tutorial Videos</h2>
          <p class="separator">ikaw na bahala diri kya rey</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          @foreach ($video as $videos)
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset($videos->video_image)}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$videos->video_name}}</h5>
              <p class="card-text">{{$videos->video_description}}</p>
              <p>{{$videos->date_posted}}</p>
              <a href="{{route('videos')}}"  target="_blank" class="btn btn-primary">Learn Now!</a>
            </div>
          </div>
          @endforeach
         

  
        

        </div>
      </div>
    </section><!-- End Features Section -->

    

    <!-- ======= Video Section ======= -->
    <section id="video" class="text-center">
      <div class="overlay">
        <div class="container-fluid container-full" data-aos="zoom-in">

          <div class="row">
            <div class="bg-tagnipa">
              <h1>Join us & Be a Tagnipa Member</h1>
              <br><br><br>
              <a href="#">Join Now</a>
            </div>
       
          </div>

        </div>
      </div>
    </section><!-- End Video Section -->

    

  

   

  

   

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">Tagnipa Website</a>
            <p>ikaw na bahala diri kya rey</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

      
       

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Partnership By</h4>

            <ul class="list-unstyled">
              <li><img src="{{asset('img/tagnipa.png')}}" alt="logo" width="50"></li>
              <li><img src="{{asset('img/ellogo.png')}}" alt="logo" width="50"></li>
              <li><img src="{{asset('img/misamis.png')}}" alt="logo" width="50"></li>
          
            </ul>

          </div>
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights Tagnipa Website. All rights reserved.</p>
        <p class="explore">You can visit el salvador website for more information <a href="https://elsalvadorcity.gov.ph/">Explore Here</a></p>
      </div>
    </div>

  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.j')}}s"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>