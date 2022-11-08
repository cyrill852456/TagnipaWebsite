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
    #cards:hover{
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        transition: 0.3s;
        cursor: pointer;
    }
    #cards{
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

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
          <li class="nav-item">
            <a class="nav-link"  href="{{route('userprofile')}}">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Profile</span>
            
            </a>
           
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="ti-email menu-icon"></i>
              <span class="menu-title">Report History</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item "> <a class="nav-link" href="{{route('segregation-report')}}">Segregation Report</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{route('citizen-report')}}">Citizen Report</a></li>
              </ul>
            </div>
          </li>
           <li class="nav-item active">
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
                  <h2 class="font-weight-bold" style="color:darkgreen;">Exchange Points To Item's</h2>
                  <h6 class="font-weight-normal mb-5">asdsadsadsads</h6>
                </div>
             
                <div class="container p-5 mt-2">
                    <div class="row d-flext justify-content-center mb-5">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" placeholder="Search....." class="form-control" id="inp">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary btn-icon-text" id="search">
                                        <i class="ti-search btn-icon-prepend"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4 mb-4 text-center transparent ">
                            <div class="card card-tale">
                              <div class="card-body">
                                <p class="mb-4 ">Reward's Points Earned</p>
                                <p class="mb-2 text-warning" style="font-size:45px; font-weight: 600;">4006</p>
                                <p class="fs-30 mt-5">Your Total Points</p>
                              </div>  
                            </div>
                          </div>
                    </div>
                  
                    <div class="row p-5" id="panel">
                        
                        <h1 class="display-3  text-muted" id="not_find_any_thing"></h1>
                    <div class="col-md-3 mt-5">
                        <div class="card p-2" id="cards">
                            <img src="{{asset('img/head&shouldershampo.jpg')}}" class="card-img-top" alt="product_pic">
                           <hr>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">Head & Shoulder Shampoo</h5>
                                    <span class="ml-2 text-danger">270 Points</span>
                                </div>
                     
                                <p class="card-text" style="font-size:14px;">
                                 Already Pack Shampoo
                                </p>
                                <hr>
                                <div class="d-flext justify-content-between">
                                    <button type="button" class="btn btn-info btn-icon-text">Exchange Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-md-3 mt-5">
                        <div class="card p-2" id="cards">
                            <img src="{{asset('img/beplop.jpg')}}" class="card-img-top" alt="product_pic">
                           <hr>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">Holiday Beef Loaf</h5>
                                    <span class="ml-2 text-danger">70 Points</span>
                                </div>
                                <p class="card-text" style="font-size:14px;">
                                3 Beplop Can's
                                </p>
                                <hr>
                                <div class="d-flext justify-content-between">
                                    <button type="button" class="btn btn-info btn-icon-text">Exchange Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mt-5">
                        <div class="card p-2" id="cards">
                            <img src="{{asset('img/rice.jpg')}}" class="card-img-top" alt="product_pic">
                           <hr>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">Princess Bea Rice</h5>
                                    <span class="ml-2 text-danger">570 Points</span>
                                </div>
                                <p class="card-text" style="font-size:14px;">
                                 12 kilos Princess Bea Rice
                                </p>
                                <hr>
                                <div class="d-flext justify-content-between">
                                    <button type="button" class="btn btn-info btn-icon-text">Exchange Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-5">
                        <div class="card p-2" id="cards">
                            <img src="{{asset('img/rice.jpg')}}" class="card-img-top" alt="product_pic">
                           <hr>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">Princess Bea Rice</h5>
                                    <span class="ml-2 text-danger">50 Points</span>
                                </div>
                                <p class="card-text" style="font-size:14px;">
                                 1 kilos Princess Bea Rice
                                </p>
                                <hr>
                                <div class="d-flext justify-content-between">
                                    <button type="button" class="btn btn-info btn-icon-text">Exchange Now</button>
                                </div>
                            </div>
                        </div>
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

  <!--- Google Map Modal -->
  <div class="modal" id="GoogleMap" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-dark">
                <div class="card">
                    <div class="card-body text-center bg-dark">
                        <img src="{{asset('img/store.png')}}" width="50" alt=""><br><br>
                        <h3 class="card-title text-white">Barangay TayTay Location</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1293.375393995387!2d124.5466034!3d8.5352734!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32fff55004b166d9%3A0x856667f1ad9eb6b0!2sTAYTAY!5e1!3m2!1sen!2sph!4v1665556096154!5m2!1sen!2sph" width="1670" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <a href="https://www.embedgooglemap.net"></a>
                    </div>
                    <button type="button" class="close btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-label="Close">
                        <i class="ti-shift-right"></i> Close
                      </button>
                </div>
           
      </div>
    </div>
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
  <script src="{{asset('js/Chart.roundedBarCharts.js')}}"></script>
  <script  type="text/javascript">
  $(document).ready(function(){


    $('#search').click(function(){
            var checker = 0;

            for (var i = 0; i < 4; i++){
                var card = $('div').filter('.col-md-3')[i];
                var title = $('h5').filter('.card-title')[i].innerText.toUpperCase();
            
            if (title.indexOf($("#inp").val().toUpperCase()) > -1){
                card.style.display = 'block';
                checker++;
            }
            else{
                card.style.display = 'none';
            }
          
        }
        if (checker > 0){
            $("#not_find_any_thing").text("");
          
         
        }
        else{
            $("#not_find_any_thing").text("No Result Found").fadeIn();
        }
        });
    });
  </script>
  <!-- End custom js for this page-->
</body>

</html>

