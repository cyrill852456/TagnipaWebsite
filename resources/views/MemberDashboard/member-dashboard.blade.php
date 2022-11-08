<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{__('Tagnipa Website')}}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendor/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('vendor/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/memberdashboard.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('img/earth.png')}}" />
  <style>
    .displayer{
    text-align: justify;
  display: -webkit-box;
  -webkit-line-clamp: 7;
  -webkit-box-orient: vertical;   
  overflow: hidden;
  color:#fff;
  padding:2px;
    }
  </style>
</head>
<body>
  @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{asset('img/earth.png')}}" alt="logo"> Tagnipa</a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('img/earth.png')}}" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              @if($user->notifications->count())
              <span class="badge badge-danger badge-counter">{{$user->unreadNotifications->count()}}</span>
              @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              @foreach($user->unreadNotifications as $notify)
              <a class="dropdown-item preview-item nav-settings">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-email mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">LGU Send a Message</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                   {{$notify->data['comments']}}
                  </p>
                </div>
              </a>
              @endforeach

              @foreach($user->readNotifications as $notify)
              <a class="dropdown-item preview-item nav-settings" style="background: #f9f9f9;">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-email mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content" >
                  <p>{{$notify->created_at->diffForHumans()}}</p>
                  <h6 class="preview-subject font-weight-normal" >LGU Agent Send a Message</h6>
                  <p class="font-weight-light mb-0">
                   view message...
                  </p>
                  <hr>
                </div>
                <br>
              </a>
              @endforeach
              <a href="{{route('markasread')}}" type="button" class="float-right mr-4">Mark as Read</a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('users/images/'. $data->profile_pic)}}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                <i class="ti-user text-primary"></i>
                {{$data->firstname}} {{$data->lastname}}
              </a>
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
            
            
              <a class="dropdown-item" href="{{route('logoutmember')}}">
                <i class="ti-power-off text-primary"></i>
                {{__('Logout')}}
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
     
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">Message</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section" aria-expanded="true">Tagnipa Events</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
         
            <h4 class="px-3 text-muted font-weight-light mb-0">Latest Message</h4>
            @foreach ($message as $item)
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <span class="profile"><img src="{{asset('LGUProfiles/software-engineer.png')}}" width="50" alt="image"> LGU Administrator</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Message:</p>
              <h4 class="text-gray mb-0">{{$item->comments}}</h4>
              <span>{{date('m/d/Y',strtotime($item->created_at))}}</span>
              <hr>
            </div>
            @endforeach
          </div>
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <span class="profile"> LGU Administrator</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Message:</p>
              <h4 class="text-gray mb-0">sadsada</h4>
              <span>1/12/22</span>
              <hr>
            </div>
            
          </div>
          <!-- chat tab ends -->
        </div>

     
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('MemberDashboard')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('member-junkshops')}}">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Junkshop</span>
            
            </a>
           
          </li>

          <li class="nav-item">
            <a class="nav-link"  href="{{route('baylobasura')}}">
              <i class="ti-location-pin menu-icon"></i>
              <span class="menu-title">BayloBasuraStations</span>
            
            </a>
           
          </li>
         
            <li class="nav-item">
            <a class="nav-link"  href="{{route('transaction-history')}}">
              <i class="ti-receipt menu-icon"></i>
              <span class="menu-title">Transaction History</span>
            
            </a>
           
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{route('userprofile')}}">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Profile</span>
            
            </a>
           
          </li>
  
           <li class="nav-item">
            <a class="nav-link"  href="{{route('ex-rewards')}}">
              <i class="ti-shopping-cart-full menu-icon"></i>
              <span class="menu-title">Exchange Rewards</span>
            
            </a>
           
          </li>
        
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome {{$data->firstname}} {{$data->lastname}}</h3>
                  <h6 class="font-weight-normal mb-0">Tagnipa Family Welcome's You! You have <span class="text-primary">3 unread alerts!</span></h6>
                </div>
             
              </div>
            </div>
          </div>
          <div class="row">
           
            <div class="col-md-6 grid-margin stretch-card">
              
              <div class="card position-relative">
                     
                <div class="card-body">
                  <h3 style="padding:10px 15px;"><i class="ti-pulse icon-md" style="color:red;"></i> Latest News & Announcements </h3>
                  <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                      
                      <div class="carousel-inner" style="border-radius: 15px;">
                        @php $i = 1; @endphp
                      @foreach ($news as $post)
                        <div class="carousel-item {{$i == '1' ? 'active' : ''}}">
                          @php $i++; @endphp
                          <div class="carousel-caption d-none d-md-block text-justify">
                            <h3 class="text-danger" style="font-weight: 600">{{$post->title}}</h3>
                            <h4 class="displayer">{{$post->body}}</h4>
                            <a href="{{route('news&updates')}}" target="_blank"><button type="button" class="btn btn-outline-info btn-fw">Explore More</button></a>
                          </div>
                         <img src="{{Storage::url($post->image)}}" class="images-news">
                      
                      
                         
                        </div>
                        @endforeach
                      </div>
                     
                    <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
       
            <div class="col-md-6 grid-margin transparent">
              <h3>Reward & Garbage Collection</h3><br>
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4 ">Your Total Points</p>
                      <p class="mb-2 text-warning" style="font-size:45px; font-weight: 600;">4006</p>
                      <p class="fs-30 mt-5">Reward's Points</p>
                    </div>  
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Your Total GarbageCollection</p>
                      <p class="mb-2" style="font-size:45px; font-weight: 600;">61344</p>
                        <p class="fs-30 mt-5">Garbage Collection</p>
                    </div>
                  </div>
                </div>
              </div>
              <h3 style="font-weight: 600">Make A <span style="color:darkcyan;">Report</span></h3>
              <p>Ikaw na bahala diri kya Rey</p>
              <br>
              <div class="row">
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-blue text-center">
                    <div class="card-body ">
                      <h3 class="mb-4">Make Citizen Report</h3>
                      <img src="{{asset('img/article.png')}}"  width="70"  alt="Citizen Report"><br><br>
                      <button type="button" data-toggle="modal" data-target="#Citizen-Report-image" class="btn btn-warning" style="font-weight: 500;">Send A Picture</button>
                      <button type="button" data-toggle="modal" data-target="#Citizen-Report-video" class="btn btn-danger" style="font-weight: 500;">Send A Video</button>

                    </div>
                  </div>
                </div>

                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger text-center">
                    <div class="card-body">
                      <h3 class="mb-4">Make Segregation Report</h3>
                      <img src="{{asset('img/test.png')}}"  width="70"  alt="Segregation Report" ><br><br>
                     <button type="button" data-toggle="modal" data-target="#Segregation-Report" class="btn btn-info" style="font-weight: 500;">Make Segregation Report</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
            <h2>Garbage Pickup <span style="color:coral">Schedules</span></h2>
          <div class="row" style="margin-top:10px;">

             <div class="col-md-3 grid-margin stretch-card">
              <div class="card text-center">
                <div class="card-body">
                  <h2 class="card-title">Monday & Friday</h2>
                  <div class="media">
                 
                    <div class="media-body">
                        <img src="{{asset('img/biodegradable.png')}}" width="60" alt="Biodegradable">
                      <h3 class="card-text" style="margin-top:15px;">Malata (BIODEGRADABLE)</h3>
             
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card text-center">
                <div class="card-body">
                  <h2 class="card-title">Tuesday & Wednesday</h2>
                  <div class="media">
        
                    <div class="media-body">
                              <img src="{{asset('img/residue.png')}}" width="60" alt="">
                      <h3 class="card-text" style="margin-top:15px;">Dili Mapuslan (Residuals)</h3>
            
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card text-center">
                  <div class="card-body">
                  <h2 class="card-title">Thursday</h2>
                  <div class="media">
        
                    <div class="media-body">
                              <img src="{{asset('img/plastic.png')}}" width="60" alt="">
                      <h3 class="card-text" style="margin-top:15px;">Dili Malata & Mapuslan Pa (Biodegradable & Recylable)</h3>
              
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-md-3 grid-margin stretch-card">
              <div class="card text-center">
                  <div class="card-body">
                  <h2 class="card-title">Last Wednesday Of The Month</h2>
                  <div class="media">
        
                    <div class="media-body">
                       <img src="{{asset('img/biomedical-waste.png')}}" width="60" alt="">
                      <h3 class="card-text" style="margin-top:15px;">Hazardous & Special Waste</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 by Tagnipa Website. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


  <!-- Segregation Report Modal -->
       <div class="modal fade" id="Segregation-Report" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalCenterTitle">Post Segregation-Report   <img src="{{asset('img/test.png')}}" class=""  width="50"  alt="Segregation Report" ></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form   action="" method="POST" id="ints" enctype="multipart/form-data">
                    @csrf
                     
                 
                    
                                <input type="hidden" class="delete_val" value="{{$data->firtstname}}{{$data->lastname}}">
                                 
                                  
                                      <div class="form-group">
                                         <label class="float-left">Location/ Brg. Name/ Brg. Street</label>
                                         <input type="text" name="address"  id="address" class="form-control" placeholder="Location/Address" >
                                         <span class="text-danger">@error('address') {{$message}} @enderror</span>
                                      </div>
                                  
                                  
                                     <div class="form-group">
                                        <label class="float-left">Date</label>
                                        <input type="date" name="date" id="date"   class="form-control">
                                        <span class="text-danger">@error('date') {{$message}} @enderror</span>
                                     </div>
                              
                                  
                                   
                                   
                                      <div class="form-group">
                                         <label class="float-left">Upload Photo </label>
                                         <div class="mb-3">
                                            <input class="form-control" type="file" name="filenames" id="formFile">
                                          </div>
                                          <span class="text-danger">@error('filenames') {{$message}} @enderror</span>
                                          <div class="col-md-12 mb-2">
                                            <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                alt="preview image" style="max-height: 250px;">
                                        </div>
                                      </div>
                                  
      
                                   
                                     <div class="form-group">
                                         <label class="float-left">Comments</label>
                                         <textarea type="text" name="comments" id="com" class="form-control" placeholder="State your reason." style="height: 15vh;" ></textarea>
                                         <span class="text-danger">@error('comments') {{$message}} @enderror</span>
                                      </div>
                              
                              
                      <!-- /.card-body -->
          
                      
                     
                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Post Report</button>
            </div>
        </form>
          </div>
        </div>
      </div>
<!-- End Segregation Report -->
    

<!-- Citizen Report- Image Modal -->
       <div class="modal fade" id="Citizen-Report-image" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-dark text-white">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalCenterTitle">Post Citizens-Report   <img src="{{asset('img/article.png')}}" class=""  width="50"  alt="Segregation Report" ></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form   action="{{route('send-citizenreport')}}" method="POST" id="ints" enctype="multipart/form-data">
                    @csrf
                     
                 
                    
                
                    
                      <div class="form-group">
                        <label class="float-left" for="CItizenFile" style="font-size:25px; font-weight:600;">Upload Photo </label>
                        <div class="mb-3">
                           <input class="form-control" type="file" name="image" id="CitizenFile">
                         </div>
                         <span class="text-danger">@error('image') {{$message}} @enderror</span>
                         <div class="col-md-12 mb-2">
                           <img id="preview-Citizenimage-before-upload" src="{{asset('img/images.png')}}"
                               alt="preview image" style="max-height: 250px;" class="img-fluid">
                       </div>
                      </div>
                  
                                 
                                  
                                      <div class="form-group" style="padding:15px 20px;">
                                         <label class="float-left mb-3" style="font-size:25px; font-weight:600;">Location/ Brg. Name/ Brg. Street</label>
                                         <input type="text" name="address"  id="address" style="font-size:25px;" class="form-control" placeholder="Location/Address" >
                                         <span class="text-danger">@error('address') {{$message}} @enderror</span>
                                      </div>
                                  
                                  
                                     <div class="form-group" style="padding:15px 20px;">
                                        <label class="float-left mb-3" style="font-size:25px; font-weight:600;">Date</label><br><br>
                                        <input type="date" name="date" id="date"  style="width:50%; font-size:25px;" class="form-control">
                                        <span class="text-danger">@error('date') {{$message}} @enderror</span>
                                     </div>
                              
                                     <hr>
                                   
                               
                                   
                                         
                                      
                                     
                                  
                                      <hr>
                                   
                                     <div class="form-group" style="padding:15px 20px;">
                                         <label class="float-left" style="font-size:25px; font-weight:600;">Comments:</label>
                                         <textarea type="text" name="comments" id="com" class="form-control" placeholder="State your reason." style="height: 25vh;" ></textarea>
                                         <span class="text-danger">@error('comments') {{$message}} @enderror</span>
                                      </div>
                              
                              
                      <!-- /.card-body -->
          
                      
                     
                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Post Report</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      <!-- End Citizen Report Modal-->








      <!-- Citizen Report- Image Modal -->
      <div class="modal fade" id="Citizen-Report-video" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-dark text-white">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalCenterTitle">Post Citizens-Report   <img src="{{asset('img/article.png')}}" class=""  width="50"  alt="Segregation Report" ></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form   action="{{route('send-citizenreport-video')}}" method="POST" id="ints" enctype="multipart/form-data">
                    @csrf
                     
                 
                    
                  
                      <div class="form-group">
                        <label class="float-left" for="CitizenVideo" style="font-size:25px; font-weight:600;">Upload Video </label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" name="video" id="Videos">
                            <span class="text-danger">@error('video') {{$message}} @enderror</span>
                            <br>
                            <h4>Video Preview:</h4>
                            <video width="320" height="240" controls src="https://www.riobeauty.co.uk/images/product_image_not_found.gif">
                              Your Browser Don't Support This Functions.
                            </video>
                        </div>
                      </div>
                                 
                                  
                                      <div class="form-group" style="padding:15px 20px;">
                                         <label class="float-left mb-3" style="font-size:25px; font-weight:600;">Location/ Brg. Name/ Brg. Street</label>
                                         <input type="text" name="address"  id="address" style="font-size:25px;" class="form-control" placeholder="Location/Address" >
                                         <span class="text-danger">@error('address') {{$message}} @enderror</span>
                                      </div>
                                  
                                  
                                     <div class="form-group" style="padding:15px 20px;">
                                        <label class="float-left mb-3" style="font-size:25px; font-weight:600;">Date</label><br><br>
                                        <input type="date" name="date" id="date"  style="width:50%; font-size:25px;" class="form-control">
                                        <span class="text-danger">@error('date') {{$message}} @enderror</span>
                                     </div>
                              
                                     <hr>
                                   
                               
                                   
                                         
                                      
                                     
                                  
                                      <hr>
                                   
                                     <div class="form-group" style="padding:15px 20px;">
                                         <label class="float-left" style="font-size:25px; font-weight:600;">Comments:</label>
                                         <textarea type="text" name="comments" id="com" class="form-control" placeholder="State your reason." style="height: 25vh;" ></textarea>
                                         <span class="text-danger">@error('comments') {{$message}} @enderror</span>
                                      </div>
                              
                              
                      <!-- /.card-body -->
          
                      
                     
                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Post Report</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      <!-- End Citizen Report Modal-->
  <!-- plugins:js -->
  <script src="{{asset('vendor/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('vendor/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('vendor/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
  <script src="{{asset('js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('js/dashboard.js')}}"></script>
  <script src="{{asset('js/Chart.roundedBarCharts.js')}}"></script>
  <script>
  $(document).ready(function (e) {
       
         
      $('#formFile').change(function(){
                
        let reader = new FileReader();
     
        reader.onload = (e) => { 
     
        $('#preview-image-before-upload').attr('src', e.target.result); 
        }
     
        reader.readAsDataURL(this.files[0]); 
       
       });

       $('#CitizenFile').change(function(){
                
                let reader = new FileReader();
             
                reader.onload = (e) => { 
             
                $('#preview-Citizenimage-before-upload').attr('src', e.target.result); 
                }
             
                reader.readAsDataURL(this.files[0]); 
               
               });
       
    });
  
document.getElementById("Videos")
.onchange = function(event) {
  let file = event.target.files[0];
  let blobURL = URL.createObjectURL(file);
  document.querySelector("video").src = blobURL;
}

  </script>
  <!-- End custom js for this page-->
</body>

</html>

