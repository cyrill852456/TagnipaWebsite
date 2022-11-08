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
  <style>
   
  </style>
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('img/earth.png')}}" />
</head>
<body>
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
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
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
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              
            
            </ul>
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
            <a class="nav-link"  href="{{route('member-junkshops')}}">
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
          <li class="nav-item active">
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
          <div class="container">
            <div class="main-body">
            
            
                  <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{asset('users/images/'. $data->profile_pic)}}" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                              <h4> {{$data->firstname}} {{$data->lastname}}</h4>
                              <p class="text-secondary mb-1">Tagnipa Member</p>
                              <p class="text-muted font-size-sm">{{$data->address}}</p>
                              <button class="btn btn-primary">Edit Profile Picture</button>
                           
                            </div>
                          </div>
                        </div>
                      </div>
                   
                      <div class="card mt-3">
                        <h3 class="mt-3 text-center">Social Media Links</h3>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                            <span class="text-secondary"></span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                            <span class="text-secondary"></span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                            <span class="text-secondary"></span>
                          </li>
                        </ul>
                     
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="card mb-3">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{$data->firstname}} {{$data->lastname}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{$data->email}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Phone/Mobile</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{$data->phonenumber}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{$data->address}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Gender</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{$data->gender}}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">DateofBirth</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {{$data->dateofbirth}}
                            </div>
                          </div>
                          <div class="row mt-5">
                            <div class="col-sm-12">
                              <button class="btn btn-primary">Edit Information's</button>
                            </div>
                          </div>
                        </div>
                      </div>
        
                      <div class="row gutters-sm">
                        <div class="col-md-6 mb-3">
                         
                            <div class="card card-tale">
                              <div class="card-body text-center">
                                <p class="fs-30 ">Total Point's Earned</p>
                                <p class="mt-4 text-warning" style="font-size:45px; font-weight: 600;">4006</p>
                             
                              </div>  
                            </div>
                         
                        </div>
                        <div class="col-sm-6 mb-3">
                          <div class="card card-dark-blue">
                            <div class="card-body text-center">
                              <p class="fs-30">Garbage Collected</p>
                              <p class="mt-4" style="font-size:45px; font-weight: 600;">61344</p>
                            </div>
                          </div>
                      </div>
                      
        
        
                    </div>
                    
                  </div>
        
                </div>
            </div>
            <h2 class="mt-3">Segregation-Report's</h2>
            <div class="row mt-5">
            
              <div class="col-lg-4 mb-4 stretch-card transparent">
                  <div class="card" style="width:18rem;">
                      <img src="{{asset('img/bg.jpg')}}" alt="card-img-top" alt="....">
                      <div class="card-body">
                          <h5 class="card-title">Posted_at: June 25 2022</h5>
                          <p class="card-text"><span style="font-weight: 600;">Your Reason:</span><br>
                          Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p><span style="font-weight: 600;">Reply by Admin:</span><br>sadsasasadsadsadsadsadsadsadsadsadsa</p>
                          <p style="font-size:13px;">Posted_at: 12min ago</p>
                      </div>
                      <div class="card-footer">
                          <p>Created_at: 54 minutes ago</p> 
                      </div>
                  </div>
                  
                </div>
                
                
         
        </div>
        <h2 class="mt-5">Citizen Report's</h2>
        <div class="row mt-5">
            
          <div class="col-lg-4 mb-4 stretch-card transparent">
              <div class="card" style="width:18rem;">
                  <img src="{{asset('img/bg.jpg')}}" alt="card-img-top" alt="....">
                  <div class="card-body">
                      <h5 class="card-title">Posted_at: June 25 2022</h5>
                      <p class="card-text"><span style="font-weight: 600;">Your Reason:</span><br>
                      Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p><span style="font-weight: 600;">Reply by Admin:</span><br>sadsasasadsadsadsadsadsadsadsadsadsa</p>
                      <p style="font-size:13px;">Posted_at: 12min ago</p>
                  </div>
                  <div class="card-footer">
                      <p>Created_at: 54 minutes ago</p> 
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

  
 <!-- End Google Map Modal -->
  <!-- container-scroller -->
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
  <script src="{{asset('js/popper.min.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>

