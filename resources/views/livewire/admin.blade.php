<div>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
       <!-- Page Wrapper -->
       <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="{{asset('img/earth.png')}}" width="50" alt="">
                <div class="sidebar-brand-text">Tagnipa Website</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin_dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>User's Accounts</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('admin.junkshops')}}">Junkshop's Account</a>
                        <a class="collapse-item" href="{{route('admin.member')}}">Agent's Account</a>
                        <a class="collapse-item" href="{{route('admin.member')}}">Member's Account</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>User's Report's</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('admin.citizenreport')}}">Citizen's Reports</a>
                        <a class="collapse-item" href="utilities-border.html">Segregation's Reports</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                More Features
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-map-marker-alt"></i>
                    <span>BayloBasura Station's</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#rewards"
                    aria-expanded="true" aria-controls="rewards">
                    <i class="fas fa-fw fa-award"></i>
                    <span>Reward's Settings</span>
                </a>
                <div id="rewards" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="utilities-color.html">Reward's Point's</a>
                        <a class="collapse-item" href="utilities-border.html">Reward's Item's</a>
                    </div>
                </div>
            </li>


            <!-- Posted View's -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#post"
                    aria-expanded="true" aria-controls="post">
                    <i class="fas fa-fw fa-blog"></i>
                    <span>Posted File's</span>
                </a>
                <div id="post" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="utilities-color.html">News&Announcements</a>
                        <a class="collapse-item" href="utilities-border.html">Tutorial Video's</a>
                    </div>
                </div>
            </li>
          
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

         

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                  

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                @if($user->notifications->count())
                                <span class="badge badge-danger badge-counter">{{$user->unreadNotifications->count()}}</span>
                                @endif
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Notifications
                                </h6>
                                @foreach($user->unreadNotifications as $notify)
                                <a class="dropdown-item d-flex align-items-center" href="{{route('admin.citizenreport')}}">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <img src="{{asset('users/images/'. $notify->data['profile_pic'])}}" alt="Admin" class="rounded-circle" width="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">{{$notify->created_at->diffForHumans()}}</div>
                                        <span class="font-weight-bold">{{$notify->data['firstname']}}{{$notify->data['lastname']}} Send A Citizen Report</span>
                                    </div>
                                </a>
                                @endforeach
                                @foreach($user->readNotifications as $notify)
                                <a class="dropdown-item d-flex bg-secondary align-items-center" href="{{route('admin.citizenreport')}}">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                        <img src="{{asset('users/images/'. $notify->data['profile_pic'])}}" alt="Admin" class="rounded-circle" width="50">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">{{$notify->created_at->diffForHumans()}}</div>
                                        <span class="font-weight-bold">{{$notify->data['firstname']}}{{$notify->data['lastname']}} Send A Citizen Report</span>
                                    </div>
                                </a>
                                @endforeach
                            
                                <a class="dropdown-item text-center small text-gray-500" href="{{route('markAsRead')}}">Mark as Read</a>


                            </div>
                        </li>

                      

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                                <img class="img-profile rounded-circle"
                                src="/LGUProfiles/Junkshop_Image_profiles/{{Auth::user()->profile_pic}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                      
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                                                Tagnipa Members</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$member}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-md font-weight-bold text-success text-uppercase mb-1">
                                               Accredited Junkshops</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$junkshops}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-warehouse   fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-md font-weight-bold text-info text-uppercase mb-1">Tagnipa Agents
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$agents}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-md font-weight-bold text-warning text-uppercase mb-1">
                                                BayloBasura Stations</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$stations}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-map-marker fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Latest Reward Points</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                   <div class="table-responsive">
                                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Garbage_Type</th>
                                                    <th>Reward_Points</th>
                                                    <th>Action</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($reward as $item)
                                                <tr>
                                                    <td><img alt="reward_image" src="{{asset($item->image)}}" class="rounded-circle" width="50"></td>
                                                    <td>{{$item->garbage_type}}</td>
                                                    <td>{{$item->points}}</td>
                                                    <td>
                                                    <a href="#" class="btn btn-success btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                        <span class="text">Update Reward</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                        <span class="text">Delete Reward</span>
                                                    </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                              
                                              
                                            </tbody>
                                        </table>
                                   </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Post News & Announcements</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    @if (session()->has('message'))
                                    <span class="alert alert-success"> {{session('message')}}</span>
                                       
                                    @endif
                                    <form wire:submit.prevent="storePost" class="forms-sample">
                                        <div class="form-group">
                                          <label for="post_title">Post Title:</label>
                                          <input type="text" class="form-control" id="post_title" name="title" wire:model.lazy="title" placeholder="title here....">
                                          @error('title')<span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="date">Post Date:</label>
                                                <input type="date" class="form-control" id="post_date" wire:model.lazy="date" name="date">
                                                @error('date')<span class="text-danger">{{$message}}</span> @enderror
                                              </div>
                                        </div>
                                      
                                        <div class="form-group" >
                                          <label for="exampleInputPassword1">Upload Photo:</label>
                                          <input type="file" class=" m-2" id="formFile"  wire:model="newImage" name="image"><br>
                                          @error('newImage')<span class="text-danger">{{$message}}</span> @enderror
                                          @if($newImage)
                                          Photo Preview:
                                          <br><br>
                                          <img src="{{$newImage->temporaryUrl()}}" alt="" width="100">
                                           @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="float-left">Comments</label>
                                            <textarea type="text" name="body" id="com" wire:model.lazy="body" class="form-control" placeholder="State your reason." style="height: 15vh;" ></textarea>
                                            @error('body') <span class="text-danger">{{$message}}</span> @enderror
                                         </div>
                                     
                                        <button type="submit" class="btn btn-primary mr-2">Post Now..</button>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Shortcut's Features</h6>
                                </div>
                                <div class="d-flex justify-content-center"  >
                                    @if(count($errors)>0)
                                    @foreach ($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                    @endforeach
                                    @endif
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 mb-4">
                                            <div class="card bg-primary text-white text-center shadow">
                                                <div class="card-body">
                                                   <h3 class="card-text" style="font-weight:800;">Baylo Basura Station</h3>
                                                   <img src="{{asset('img/store.png')}}" width="50" alt="">
                                                    <div class="text-white-50 small mt-3">
                                                        <a href="#" data-toggle="modal" data-target="#addBasuraStation"class="btn btn-success btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                            </span>
                                                            <span class="text">Add Baylobasura Location</span>
                                                        </a>
    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <div class="card bg-danger text-white text-center shadow">
                                                <div class="card-body">
                                                    <h3 class="card-text" style="font-weight:800;">Tutorial Videos</h3>
                                                    <img src="{{asset('img/online-video.png')}}" width="50" alt="">
                                                    <div class="text-white-50 small mt-3">
                                                        <a href="#" data-toggle="modal" data-target="#addVideo" class="btn btn-info btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fab fa-youtube"></i>
                                                            </span>
                                                            <span class="text">Add Tutorial Videos</span>
                                                        </a>
    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                          <div class="col-md-3 mb-4">
                                            
                                            <div class="card bg-dark text-white text-center shadow">
                                                <div class="card-body">
                                                    <h3 class="card-text" style="font-weight:800;">Set New Reward Points</h3>
                                                    <img src="{{asset('img/warehouse.png')}}" width="50" alt="">
                                                    <div class="text-white-50 small mt-3">
                                                        <a href="#" data-toggle="modal" data-target="#addRewardPoints" class="btn btn-warning btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-boxes"></i>
                                                            </span>
                                                            <span class="text">Add New Junkshop Account</span>
                                                        </a>
    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <div class="card bg-info text-white text-center shadow">
                                                <div class="card-body">
                                                    <h3 class="card-text" style="font-weight:800;">Add New Reward Items</h3>
                                                    <img src="{{asset('img/technical-support.png')}}" width="50" alt="">
                                                    <div class="text-white-50 small mt-3">
                                                        <a href="#" class="btn btn-danger btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-user-tie"></i>
                                                            </span>
                                                            <span class="text">Add New Agents</span>
                                                        </a>
    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>

                          

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
      
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                  
                </div>
            </div>
        </div>
    </div>
     <!-- Add  Video  Modal -->
     <div class="modal fade" id="addVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Add Video Tutorial</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form  action="{{route('add-videos')}}" method="POST" id="ints" enctype="multipart/form-data">
                    @csrf
                     
                                      <div class="form-group">
                                         <label class="float-left">Video Name:</label>
                                         <input type="text" name="video_name" id="name" class="form-control" placeholder="video name...." value="{{old('video_name')}}">
                                         <span class="text-danger">@error('video_name') {{$message}} @enderror</span>
                                      </div> 
                                 
                                  
                                      <div class="form-group">
                                         <label class="float-left">Video Link:</label>
                                         <input type="text" name="video_link"   class="form-control" placeholder="link here...." value="{{old('video_link')}}">
                                         <span class="text-danger">@error('video_link') {{$message}} @enderror</span>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label class="float-left">Date:</label>
                                        <input type="date" name="date_posted"   class="form-control"  value="{{old('date_posted')}}">
                                        <span class="text-danger">@error('date_posted') {{$message}} @enderror</span>
                                     </div>
                                     
                                     <div class="form-group">
                                        <label class="float-left">Video Description:</label>
                                        <textarea type="text" name="video_description" id="com" class="form-control" placeholder="description here..." style="height: 15vh;" ></textarea>
                                        <span class="text-danger">@error('video_description') {{$message}} @enderror</span>
                                     </div>
                                     <div class="form-group">
                                        <label class="float-left">Upload Image</label><br>
                                        <input class="form-control" type="file" id="File" name="video_image">
                                        <span class="text-danger">@error('video_image') {{$message}} @enderror</span>
                                        <div class="col-md-12 mb-2">
                                            <img id="preview-Photoimage-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                alt="preview image" style="max-height: 250px;">
                                        </div>
                                     </div>
                                     
                                
                                   
                                   
                      <!-- /.card-body -->
          
                      
                     
                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      <!--- End Add Videos Modal -->





       <!-- Add  Reward Points  Modal -->
       <div class="modal fade" id="addRewardPoints" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Set Reward's Points</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form  action="{{route('set-reward')}}" method="POST" id="ints" enctype="multipart/form-data">
                    @csrf
                     
                                      <div class="form-group">
                                         <label class="float-left">Garbage Type:</label>
                                         <input type="text" name="garbage_type" id="name" class="form-control" placeholder="garbage type...." value="{{old('garbage_type')}}">
                                         <span class="text-danger">@error('garbage_type') {{$message}} @enderror</span>
                                      </div> 
                                 
                                  
                                      <div class="form-group">
                                         <label class="float-left">Points:</label>
                                         <input type="number" name="points"   class="form-control" placeholder="link here...." value="{{old('points')}}">
                                         <span class="text-danger">@error('points') {{$message}} @enderror</span>
                                      </div>
                                      
                                     <div class="form-group">
                                        <label class="float-left">Upload Image</label><br>
                                        <input class="form-control" type="file" id="Points" name="image">
                                        <span class="text-danger">@error('image') {{$message}} @enderror</span>
                                        <div class="col-md-12 mb-2">
                                            <img id="preview-pointsimage-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                alt="preview image" style="max-height: 250px;">
                                        </div>
                                     </div>
                                     
                                
                                   
                                   
                      <!-- /.card-body -->
          
                      
                     
                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      <!--- End Set Reward Model-->





        
       <!-- Add  Reward Points  Modal -->
       <div class="modal fade" id="addBasuraStation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Add BayloBasura Station</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form  action="{{route('add-location')}}" method="POST" id="ints" enctype="multipart/form-data">
                    @csrf
                     
                                      <div class="form-group">
                                         <label class="float-left">Barangay Name:</label>
                                         <input type="text" name="station_name" id="name" class="form-control" placeholder="barangay name...." value="{{old('station_name')}}">
                                         <span class="text-danger">@error('station_name') {{$message}} @enderror</span>
                                      </div> 
                                 
                                  
                                      <div class="form-group">
                                         <label class="float-left">Google Map Link:</label>
                                         <input type="text" name="location"   class="form-control" placeholder="link here...." value="{{old('location')}}">
                                         <span class="text-danger">@error('location') {{$message}} @enderror</span>
                                         <span>To get the goggle map link you need to use embeded Map</span>
                                      </div>
                                      
                                     <div class="form-group">
                                        <label class="float-left">Upload Picture of Barangay:</label><br>
                                        <input class="form-control" type="file" id="baylosbasura" name="station_image">
                                        <span class="text-danger">@error('station_image') {{$message}} @enderror</span>
                                        <div class="col-md-12 mb-2">
                                            <img id="preview-baylosbasuraimage-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                alt="preview image" style="max-height: 250px;">
                                        </div>
                                     </div>
                                     
                                
                                   
                                   
                      <!-- /.card-body -->
          
                      
                     
                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      <!--- End Add Baylobasura location Model->
</div>