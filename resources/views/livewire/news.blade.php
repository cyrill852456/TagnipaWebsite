<div class="container-scroller">
     
    <div class="main-panel">
    <!-- partial:partials/_navbar.html -->
    <header id="header">
        <div class="container">
         
        </div>
      </header>
      <div class="flash-news-banner">
        <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <span class="badge badge-dark mr-3">Tagnipa News & Announcement Updates Page</span>
                <p class="mb-0" style="color:#ffff;">
                  This page will post every annoucement & New's from LGU's
                </p>
              </div>
            </div>
          </div>
      </div>
      <div class="content-wrapper">
        
        <div class="container">
          <div class="row" data-aos="fade-up">
            <div class="col-xl-8 stretch-card grid-margin">
              <div class="position-relative">
                <img
                  src="{{asset('img/hotline.png')}}"
                  alt="banner"
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-xl-4 stretch-card grid-margin">
              <div class="card bg-warning text-dark">
                <div class="card-body">
                  <h2 style="font-weight: 600">El Salvador links</h2>
                
                  <div
                    class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between"
                  >
                    <div class="pr-3">
                      <h5 style="font-weight: 600;">Goverment El Salvador Page</h5>
                      <div class="fs-12">
                        <span><i class="fa fa-link">   www.elsalvador.com</i></span>
                        <span class="mr-2"></span>
                      </div>
                    </div>
                  </div>
                  
                  <div
                  class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between"
                >
                  <div class="pr-3">
                    <h5 style="font-weight: 600">Facebook Page</h5>
                    <div class="fs-12">
                      <span><i class="fa fa-link"> www.facebookpage.com</i></span>
                      <span class="mr-2"></span>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row" data-aos="fade-up">
            <div class="col-lg-12 stretch-card grid-margin">
               <div class="card bg-dark text-white">
                  <div class="card-body">
                    <h2 style="font-weight: 600">Latest News & Announcements <i class="fas fa-fire" style="color:red;"></i></h2>
                    @foreach($posts as $post)
                  <div
                    class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between"
                  >
                    <div class="pr-3">
                      <h3 style="font-weight: 600">{{$post->title}}</h3>
                      <div class="fs-12">
                        <span><i class="fas fa-street-view"></i>/ LGU Tagnipa / Date: {{date('m/d/Y',strtotime($post->date))}}/</span>
                        <span class="mr-2">Posted: {{$post->created_at->diffForHumans()}}</span>
                      </div>
                    </div>
                    <div class="rotate-img">
                      <img
                        src="{{Storage::url($post->image)}}"
                        alt="thumb"
                        class="img-fluid img-lg"
                        
                      />
                    </div>
                  </div>
                  @endforeach
                  </div>
               </div>
            </div>
          </div>
          <div class="row" data-aos="fade-up">

            <div class="col-lg-12 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  @foreach ($news as $newster)
                  <div class="row">
                    <div class="col-sm-4 grid-margin">
                      <div class="position-relative">
                        <div class="rotate-img">
                          <img
                            src="{{Storage::url($newster->image)}}"
                            alt="thumb"
                            class="img-fluid"
                            
      
                         
                          />
                        </div>
                        <div class="badge-positioned">
                          <span class="badge badge-danger font-weight-bold"
                            >Flash news</span
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-8  grid-margin">
                      <h2 class="mb-2 font-weight-600">
                        {{$newster->title}}
                      </h2>
                      <div class="fs-13 mb-2" style="color:#3D8361;">
                        <span><i class="fa fa-person"> / LGU Tagnipa / Date: {{date('m/d/Y',strtotime($post->date))}} /</i></span>
                        <span class="mr-2">Posted: {{$newster->created_at->diffForHumans()}}</span>
                      </div>
                      <p class="mb-0">
                       {{$newster->body}}
                      </p>
                    </div>
                  </div>
                  @endforeach
                </div>
               
                <div class="row p-5">
                    <div class="col-7">
                        Showing {{$news->firstItem()}} - {{$news->lastItem()}} of {{$news->total()}}
                    </div>  
                    <div class="col-5">
                        <div class="links float-end">
                           <div class="p-10">
                                {{$news->links()}}
                           </div>
                        </div>
                    </div>
                </div>
               
              
                 
               
                
             
              </div>
            </div>
          </div>
          
          
          


    </div>
</div>
<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <h1 class="font-weight-600">Tagnipa.com</h1>
          <h5 class="font-weight-normal mt-4 mb-5">
            Newspaper is your news, entertainment, music fashion website. We
            provide you with the latest breaking news and videos straight from
            the entertainment industry.
          </h5>
          <ul class="social-media mb-3">
            <li>
              <a href="#">
                <i class="mdi mdi-facebook"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="mdi mdi-youtube"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="mdi mdi-twitter"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-sm-4">
          <h3 class="font-weight-bold mb-3">PARTNERSHIP BY</h3>
          <div class="row">
            <div class="col-sm-12">
              <div class="footer-border-bottom pb-2">
                <div class="row">
                  <div class="col-3">
                    <img
                      src="{{asset('img/tagnipa.png')}}"
                      alt="thumb"
                      class="img-fluid"
                    />
                  </div>
                  <div class="col-9">
                    <h5 class="font-weight-600">
                      Tagnipa.com
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="footer-border-bottom pb-2 pt-2">
                <div class="row">
                  <div class="col-3">
                    <img
                      src="{{asset('img/ellogo.png')}}"
                      alt="thumb"
                      class="img-fluid"
                    />
                  </div>
                  <div class="col-9">
                    <h5 class="font-weight-600">
                      El Salvador City Misamiz Oriental
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div>
                <div class="row">
                  <div class="col-3">
                    <img
                      src="{{asset('img/misamis.png')}}"
                      alt="thumb"
                      class="img-fluid"
                    />
                  </div>
                  <div class="col-9">
                    <h5 class="font-weight-600 mb-3">
                      Misamiz Oriental Province
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="d-sm-flex justify-content-between align-items-center">
            <div class="fs-14 font-weight-600">
              © 2022 @ <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">Tagnipa Website.com</a> All rights reserved.
            </div>
            <div class="fs-14 font-weight-600">
              Handcrafted by <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">Tagnipa Creators</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
