<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="img/earth.png">
    <title>{{__('Tagnipa Tutorial Videos')}}</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
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
                Tagnipa Video-Tutorials
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
                    <a class="nav-link nav-link-2" href="{{route('news&updates')}}" target="_blank" aria-current="page">News & Announcements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3 active" href="{{url('/tutorialvideos')}}" aria-current="page">Video Tutorials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="contact.html">Login</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    
    <div class="tm-hero d-flex justify-content-center align-items-center" id="tm-video-container">
        <video autoplay muted loop id="tm-video">
            <source src="{{asset('img/elsalvador.mp4')}}" type="video/mp4">
        </video>  
        <i id="tm-video-control-button" class="fas fa-pause"></i>
        <form class="d-flex position-absolute tm-search-form">
            <input class="form-control tm-search-input" type="text" placeholder="🌐 Tagnipa Tutorial Videos" aria-label="Search" readonly>
           
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Latest Videos
            </h2>
          
        </div>
     
            
    
     
        <div class="row tm-mb-90 tm-gallery">
            @foreach ($video as $videos)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{asset($videos->video_image)}}" alt="Image" class="img-fluid" >
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>{{$videos->video_name}}</h2>
                        <a class="video-btn" data-toggle="modal" data-target="#{{$videos->id}}">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span>{{$videos->video_name}}</span>
                    <span>Posted at:{{$videos->created_at->diffForHumans()}}</span>
                </div>
        
            </div>
            @endforeach
        </div> <!-- row -->
        {{$video->links('layouts.pagination')}}
    </div> <!-- container-fluid, tm-container-content -->

    <div class="tm-bg-gray pt-5 pb-3 tm-text-gray">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4">About Tagnipa.Com</h3>
                    <p class="text-justify">is designed to persuade waste producers to reuse and recycle more wastes by giving rewards to members who actively participate in the waste management campaign.
                        At present, waste problem is still prevalent. The government is in continuous search for the solution of the arising waste management problem. 
                        One of the major factor that contributes to waste management problem is the behaviour of the public or the waste producers in managing their own waste.
                        Most of the people do not practice recycling for their recyclable waste materials and do not dispose their garbage properly.
                        The local government must have an effective system to encourage the public to be more mindful of their own wastes.
                        To address the problems mentioned above, the city  proposed a Recyclable Management with Reward System to encourage waste producer communities to engage in recycling activities and make use of different junkshops and recycling centers.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4">Partnership By</h3>
                    <ul class="tm-footer-links pl-0">
                        <li><a href="#"><img src="{{asset('img/tagnipa.png')}}" alt="logo" width="100"></a></li>
                        <li><a href="#"><img src="{{asset('img/ellogo.png')}}" alt="logo" width="100"></a></li>
                        <li><a href="#"> <img src="{{asset('img/misamis.png')}}" alt="logo" width="100"></a></li>
                    </ul>
                </div>
              
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2023 Tagnipa.com. All rights reserved.
                </div>
            </div>
        </div>
    </div>
       <!-- Modal 1 -->
      

     
       @if ($video->count()>0)

       @foreach ($video as $videos)
    
           <div class="modal fade" id="{{$videos->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
               <div class="modal-dialog modal-lg modal-dialog-centered">
                 <div class="modal-content" id="player">
                       <div class="embed-responsive embed-responsive-16by9">
                           <iframe
                           class="embed-responsive-item yvideo"
                           
                           src="{{$videos->video_link}}"
                           width="100%"
                           height="540"
                           frameborder="0"
                           allow="mute=1; encrypted-media"
                           allowfullscreen
                           
                         ></iframe>
                       </div>
                  
                 
                   <div class="modal-footer d-flex justify-content-center">
                       <button type="button" class="btn btn-primary"  data-dismiss="modal">Close</button>
                   </div>
                 </div>
               </div>
             </div>
      
     @endforeach
     @endif
     
      <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
      {{-- <script src="{{asset('js/plugins.js')}}"></script> --}}
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
    
      <script src="https://www.youtube.com/iframe_api"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });

        $(function(){
            /************** Video background *********/

            function setVideoSize() {
                const vidWidth = 1280;
                const vidHeight = 720;
                const maxVidHeight = 400;
                let windowWidth = window.innerWidth;
                let newVidWidth = windowWidth;
                let newVidHeight = windowWidth * vidHeight / vidWidth;
                let marginLeft = 0;
                let marginTop = 0;
            
                if (newVidHeight < maxVidHeight) {
                    newVidHeight = maxVidHeight;
                    newVidWidth = newVidHeight * vidWidth / vidHeight;
                }
            
                if(newVidWidth > windowWidth) {
                    marginLeft = -((newVidWidth - windowWidth) / 2);
                }
            
                if(newVidHeight > maxVidHeight) {
                    marginTop = -((newVidHeight - $('#tm-video-container').height()) / 2);
                }
            
                const tmVideo = $('#tm-video');
            
                tmVideo.css('width', newVidWidth);
                tmVideo.css('height', newVidHeight);
                tmVideo.css('margin-left', marginLeft);
                tmVideo.css('margin-top', marginTop);
            }

            setVideoSize();

            // Set video background size based on window size
            let timeout;
            window.onresize = function () {
                clearTimeout(timeout);
                timeout = setTimeout(setVideoSize, 100);
            };

            // Play/Pause button for video background      
            const btn = $("#tm-video-control-button");

            btn.on("click", function (e) {
                const video = document.getElementById("tm-video");
                $(this).removeClass();

                if (video.paused) {
                    video.play();
                    $(this).addClass("fas fa-pause");
                } else {
                    video.pause();
                    $(this).addClass("fas fa-play");
                }
            });
            
        });

$(function(){
  $("body").on('hidden.bs.modal', function (e) {
    var $iframes = $(e.target).find("iframe");
    $iframes.each(function(index, iframe){
      $(iframe).attr("src", $(iframe).attr("src"));
    });
  });
});

</script>
</body>
</html>