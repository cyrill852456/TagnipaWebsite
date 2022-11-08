<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{__('Tagnipa | Junkshop Accounts')}}</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/admin.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <style>
    #showpass{
    position: absolute;
    right: 20px;
    transform:translate(0,-50%);
    top:87%;
    cursor: pointer;
}
#showpass .fa{
    font-size: 20px;
    color:#7a797e;
}

    </style>
</head>

<body id="page-top">
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
            <li class="nav-item">
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
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>User's Accounts</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="{{route('admin.junkshops')}}">Junkshop's Account</a>
                        <a class="collapse-item" href="{{route('admin.agent')}}">Agent's Account</a>
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

                        <!-- Heading -->
                        <div class="sidebar-heading">
                            Addons
                        </div>
            <!-- Heading -->
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                  

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                      

                      
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
                    <h1 class="h3 mb-2 text-gray-800">Junkshop's Accounts</h1>
                    <p class="mb-4">Ikaw na bahala diri kya rey</p>
                    <a href="#" data-toggle="modal" data-target="#Junkshops"   class="btn btn-primary btn-icon-split  mb-5">
                        <span class="icon text-white-50">
                            <i class="fas fa-user-plus"></i>
                        </span>
                        <span class="text">Add Junkshop Account</span>
                    </a>
                    <a href="#"  data-toggle="modal" data-target="#addInformation" class="btn btn-primary btn-icon-split  mb-5">
                        <span class="icon text-white-50">
                            <i class="fas fa-id-badge"></i>
                          
                        </span>
                        <span class="text">Add Junkshop Owner Information</span>
                    </a>
                    <!-- DataTales Example -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a  class="nav-link active" id="segre-agent" data-toggle="tab" role="tab"   href="#junkshop-account">Junkshop Accounts</a></li>
                        <li class="nav-item"><a  class="nav-link"  role="tab" id="segre-record" data-toggle="tab" href="#junkshop-ownerinformation">Junkshop Owner Information</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="junkshop-account" id="junkshop-account">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                  
                                                    <th>Junkshop Name</th>
                                                    <th>Junkshop Email</th>
                                                    <th>Junkshop Profile</th>
                                                    <th>Role</th>
                                                    <th>Create_at</th>
                                                    <th>Updated_at</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($junkshop as $account)
                                                <tr>
                                                    <input type="hidden" class="delete_val" value="{{$account->id}}">
                                                    <td>{{$account->name}}</td>
                                                    <td>{{$account->email}}</td>
                                                    <td><img src="/LGUProfiles/Junkshop_Image_profiles/{{$account->profile_pic}}" alt="Admin" class="rounded-circle" width="50"></td>
                                                    <td>{{$account->role}}</td>
                                                    <td>{{date('m/d/Y',strtotime($account->created_at))}}</td>
                                                    <td>{{$account->updated_at->diffForHumans()}}</td>
                                                    <td>
                                                        <button type="button" value="{{$account->id}}" class="btn btn-info editBtn">Edit</button>
                                                        <button type="button" class="btn btn-danger deletebtn" style="color:#fff;">Delete</button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" role="tabpanel" aria-labelledby="junkshop-account" id="junkshop-ownerinformation">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Junkshop Name</th>
                                                    <th>Owner name</th>
                                                 
                                                    <th>Email</th>
                                                    <th>Junkshop Location</th>
                                                    <th>Phonenumber</th>
                                                    <th>BirthDate</th>
                                                    <th>Gender</th>
                                                    <th>Created_at</th>
                                                    <th>Updated_at</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ownerinfo as $account)
                                                    
                                           
                                                <tr>
                                                    <td>{{$account->users->name}}</td>
                                                    <td>{{$account->firstname}} {{$account->lastname}}</td>
                                                    <td>{{$account->email}}</td>
                                                    <td>{{$account->address}}</td>
                                                    <td>{{$account->phonenumber}}</td>
                                                    <td>{{$account->birthDate}}</td>
                                                    <td>{{$account->gender}}</td>
                                                    <td>{{date('m/d/Y',strtotime($account->created_at))}}</td>
                                                    <td>{{$account->updated_at->diffForHumans()}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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

       <!-- Add  Junkshop Modal -->
       <div class="modal fade" id="Junkshops" tabindex="-1" role="dialog" aria-labelledby="Junkshops" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="Junkshops">Add Junkshops Account</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form  action="{{route('add-junkshop')}}" method="POST" id="ints" enctype="multipart/form-data">
                    @csrf
                     
                    
                            
                                      <div class="form-group">
                                         <label class="float-left">Junkshop Name:</label>
                                         <input type="text" name="name" id="name" class="form-control" placeholder="junkshop name" value="{{old('name')}}">
                                         <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                      </div> 
                                 
                                  
                                      <div class="form-group">
                                         <label class="float-left">Junkshop Email:</label>
                                         <input type="email" name="email"  id="email" class="form-control" placeholder="email" value="{{old('email')}}">
                                         <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                      </div>
                                  
                                  
                                     <div class="form-group">
                                        <label class="float-left">Upload Image</label><br>
                                        <input class="form-control" type="file" id="formFile" name="profile_pic">
                                        <span class="text-danger">@error('profile_pic') {{$message}} @enderror</span>
                                        <div class="col-md-12 mb-2">
                                            <img id="preview-Photoimage-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                alt="preview image" style="max-height: 250px;">
                                        </div>
                                     </div>
                                     
                                
                                      
                                      <div class="form-group">
                                        <label class="float-left">Password</label>
                                        <input type="password" name="password"  id="password" class="form-control" placeholder="password" value="{{old('password')}}">
                                        <span class="showpass"><i class="fa fa-eye" aria-hidden="true" id="showpass" onclick="showers()"></i></span>
                                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
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



       <!-- Edit  Junkshop Modal -->
       <div class="modal fade" id="editJunkshop" tabindex="-1" role="dialog" aria-labelledby="editJunkshop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editJunkshop">Edit Junkshops Account</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form  action="{{url('update-junkshop')}}" method="POST" id="ints" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                 
                                    <input type="hidden" name="junkshop_id" id="junkshop_id" />
                            
                                      <div class="form-group">
                                         <label class="float-left">Junkshop Name:</label>
                                         <input type="text" name="name" id="name_junkshop"  class="form-control"  >
                                         <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                      </div> 
                                 
                                  
                                      <div class="form-group">
                                         <label class="float-left">Junkshop Email:</label>
                                         <input type="email" name="email"  id="email_junkshop"  class="form-control">
                                         <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                      </div>
                                  
                                   
                                   
                              
                              
                      <!-- /.card-body -->
          
                      
                     
                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="hide">Close</button>
              <button type="submit" class="btn btn-primary">Update Account</button>
            </div>
        </form>
          </div>
        </div>
      </div>
    

     <!-- Add  Junkshop Owner information Modal -->
     <div class="modal fade" id="addInformation" tabindex="-1" role="dialog" aria-labelledby="Information" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="JInformation">Add Junkshops Account</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form  action="{{route('add-ownerinformation')}}" method="POST" id="ints" enctype="multipart/form-data">
                    @csrf
                     
                    
                    <div class="form-group">
                        <label for="junkshopers">Select Junkshop Account Name</label>
                            <select name="junkshop_id" class="form-control" id="junkshopers">
                                @foreach ($junkshop as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>  
                                @endforeach
                            </select>
                       </div>
                               
                                      <div class="form-group">
                                         <label class="float-left">First Name:</label>
                                         <input type="text" name="firstname" id="name" class="form-control"  placeholder="firstname here..."value="{{old('firstname')}}">
                                         <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                                      </div> 
                                      
                                      <div class="form-group">
                                        <label class="float-left">Last Name:</label>
                                        <input type="text" name="lastname" id="name" class="form-control" placeholder="lastname here..." value="{{old('lastname')}}">
                                        <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                                     </div> 
                                
                                  
                                      <div class="form-group">
                                         <label class="float-left">Email:</label>
                                         <input type="email" name="email"  id="email" class="form-control" placeholder="email here..." value="{{old('email')}}">
                                         <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label class="float-left">Google Map Location:</label>
                                        <input type="text" name="address" id="name" class="form-control" placeholder="Google map location...." value="{{old('address')}}">
                                        <span class="text-danger">@error('address') {{$message}} @enderror</span>
                                     </div> 
                                
                                      <div class="form-group">
                                        <label class="float-left">Phonenumber:</label>
                                        <input type="number" name="phonenumber"  id="phonenumber" class="form-control" placeholder="phonenumber here...." >
                                        <span class="text-danger">@error('phonenumber') {{$message}} @enderror</span>
                                     </div>
                                     <div class="form-group">
                                        <label class="label" for="genders">Gender</label>
                                        <select class="form-select form-control form-select-lg mb-3" id="genders" name="gender">
                                            <option value="" selected>--- Choose Gender -----</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <span class="text-danger">@error('gender') {{$message}} @enderror</span>
                                    </div>
                                     <div class="form-group">
                                        <label class="float-left">BirthDate</label>
                                        <input type="date" name="birthDate" id="birthDate"   class="form-control">
                                        <span class="text-danger">@error('birthDate') {{$message}} @enderror</span>
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

    <!-- Bootstrap core JavaScript-->

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    var state = false;
   function showers(){
        if(state)
        {
            document.getElementById('password').setAttribute("type","password");
            document.getElementById('showpass').style.color='#7a797e';
            state = false;
        }
        else
        {
            document.getElementById('password').setAttribute("type",'text');
            document.getElementById('showpass').style.color='#5887ef';
            state = true;
        }
   }
    $(document).ready( function () {
    $('#dataTable').DataTable();
    $('#dataTable2').DataTable();
    $('#formFile').change(function(){
                        
        let reader = new FileReader();
                     
        reader.onload = (e) => { 
                     
        $('#preview-Photoimage-before-upload').attr('src', e.target.result); 
        }
                     
        reader.readAsDataURL(this.files[0]); 
                       
        });
               
        $(document).on('click','.editBtn', function (){
            var junkshop_id = $(this).val();
            $('#editJunkshop').modal('show');

            $.ajax({    
            type:"GET",
            url:"/edit-junkshop/"+junkshop_id,
            success: function(response){
            //console.log(response);
            $("#name_junkshop").val(response.junkshop.name);
            $('#email_junkshop').val(response.junkshop.email);
            $('#junkshop_id').val(junkshop_id);
              
            }
            })
        });
    });
 /* Delete Function */
 $(document).ready(function(){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $('.deletebtn').click(function(e){
        e.preventDefault();
        var delete_account = $(this).closest("tr").find('.delete_val').val();
        //alert(delete_account);

        Swal.fire({
        title: 'Are you sure?',
        text: "Once Deleted, You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        })
        .then((result) => {
        if (result.isConfirmed) {
            var data = {
                "_token": $('input[name="_token"]').val(),
                "id": delete_account,
            };
            $.ajax({
                type:"DELETE",
                url:'/account-delete/'+delete_account,
                data: data,
                success: function (response) {
                    swal.fire(
                        'Successfully Deleted!',
                        'Junkshop Account has been deleted.',
                        'success',
                        response.status
                    )
                    .then((result) => {
                        location.reload();
                    });
                }
            });
            
        }
        });
    });
 });
</script>
    
    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
     <!-- Core plugin JavaScript-->
     <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

     <!-- Custom scripts for all pages-->
     <script src="{{asset('js/admin.min.js')}}"></script>
 

</body>

</html>