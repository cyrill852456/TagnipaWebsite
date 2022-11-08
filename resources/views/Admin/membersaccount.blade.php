<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{__('Tagnipa | Junkshop Accounts')}}</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/admin.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

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
                        <a class="collapse-item" href="{{route('admin.junkshops')}}">Junkshop's Account</a>
                        <a class="collapse-item" href="{{route('admin.agent')}}">Agent's Account</a>
                        <a class="collapse-item active" href="{{route('admin.member')}}">Member's Account</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
        
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
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
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
                    <h1 class="h3 mb-2 text-gray-800">Member's Accounts</h1>
                    <p class="mb-4">Ikaw na bahala diri kya rey</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phonenumber</th>
                                            <th>Profile_pic</th>
                                            <th>DateofBirth</th>
                                            <th>Gender</th>
                                            <th>Account Created_at</th>
                                            <th>Account Updated_at</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($member as $account)
                                        <tr>
                                            <td>{{$account->firstname}}</td>
                                            <td>{{$account->lastname}}</td>
                                            <td>{{$account->email}}</td>
                                            <td>{{$account->address}}</td>
                                            <td>{{$account->phonenumber}}</td>
                                            <td> <img src="{{asset('users/images/'. $account->profile_pic)}}" alt="Admin" class="rounded-circle" width="50"></td>
                                            <td>{{$account->dateofbirth}}</td>
                                            <td>{{$account->gender}}</td>
                                            <td>{{date('m/d/Y',strtotime($account->created_at))}}</td>
                                            <td>{{$account->updated_at->diffForHumans()}}</td>
                                            <td>
                                                <button type="button" value="{{$account->id}}" class="btn btn-primary editbtn">Edit</button>
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
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
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script>
    $(document).ready( function () {
    $('#dataTable').DataTable();
    $('#dataTable2').DataTable();
    } );
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