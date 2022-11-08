<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    @vite(['resources/js/app.js'])
    <link rel="shortcut icon" type="x-icon" href="{{asset('/img/earth.png')}}">
    <title>{{__('Tagnipa | Annoucememt & News Updates')}}</title>
        <!-- Bootstrap CSS -->
        <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
           <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('/css/news.css')}}">
            <!-- endinject -->
</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
      <div id="loader"></div>

      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>

  </div>
  <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
              <img src="{{asset('img/earth.png')}}" alt="" width="50">
              Tagnipa News & Announcement 
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link nav-link-1" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav-link-2 active" href="{{route('news&updates')}}" target="_blank" aria-current="page">News & Announcements</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav-link-3 " href="{{url('/tutorialvideos')}}" aria-current="page">Video Tutorials</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link nav-link-4" href="{{route('MemberLogin')}}">Login</a>
              </li>
          </ul>
          </div>
      </div>
  </nav>
    <livewire:news/> 
    @livewireScripts
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  
   
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/responsive.bootstrap4.min.js')}}"></script>  
    <script>
     $(window).on("load", function() {
            $('body').addClass('loaded');
        });
  
    </script> 
</body>
</html>