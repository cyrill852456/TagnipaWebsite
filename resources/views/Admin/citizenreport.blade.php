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
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>User's Accounts</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item " href="{{route('admin.junkshops')}}">Junkshop's Account</a>
                        <a class="collapse-item" href="{{route('admin.agent')}}">Agent's Account</a>
                        <a class="collapse-item" href="{{route('admin.member')}}">Member's Account</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>User's Report's</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="{{route('admin.citizenreport')}}">Citizen's Reports</a>
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
                    <h1 class="h3 mb-2 text-gray-800">Citizen's Report's</h1>
                    <p class="mb-4">Ikaw na bahala diri kya rey</p>

                    <h2>Image Reports</h2>
            
                             <div class="row">
                         @foreach ($reports as $report)
                        <div class="col-md-3 mb-5">
                            <div class="card">
                                <a href="" data-toggle="tooltip" title="Click Image to View Larger Size"><img src="{{asset('Member/CitizenReportsImage/'. $report->image)}}" class="card-img-top" alt="Fissure in Sandstone"/></a>
                                <div class="card-body">
                                    <h5 class="card-title">Sended by: <span style="color:brown; font-weight:600;">{{$report->members->firstname}} {{$report->members->lastname}}</span></h5>
                                    <h5>Location: <span style="color:darkorange; font-weight:600;">{{$report->address}}</span></h5>
                                    <h5 class="card-text mb-3">Description:<br>{{$report->comments}}</h5>
                                  <span>Date Posted: {{date('m/d/Y',strtotime($report->created_at))}}</span><br>
                                  <br><br><hr>
                                  <a href="#!" class="btn btn-primary">Make a Reply</a>
                                </div>
                              </div>
                           </div>
                           @endforeach
                    </div>
                  
               
               
                   <h2>Video Reports</h2>
            
                   <div class="row">
                    @foreach ($report_video as $report)
                     <div class="col-md-4 mb-5">
                  <div class="card">
                      
                        <video  class="embed-responsive embed-responsive-21by9" controls preload>
                            <source src="{{asset('upload')}}/{{$report['video']}}" type="video/mp4">
                        </video>
                      <div class="card-body">
                        <h5 class="card-title">Sended by: <span style="color:brown; font-weight:600;">{{$report->members->firstname}} {{$report->members->lastname}}</span></h5>
                        <h5>Location: <span style="color:darkorange; font-weight:600;">{{$report->address}}</span></h5>
                        <h5 class="card-text mb-3">Description:<br>{{$report->comments}}</h5>
                        <hr>
                        <span>Date Posted: {{date('m/d/Y',strtotime($report->created_at))}}</span><br>
                        <br><br><hr>
                        <button type="button" data-toggle="modal" data-target="#makeReply" class="btn btn-info serviEditbtn">Make A Reply</button>
                      </div>
                    </div>
                 </div>
                 @endforeach
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

     <!-- Edit  Junkshop Modal -->
     <div class="modal fade" id="makeReply" tabindex="-1" role="dialog" aria-labelledby="editJunkshop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editJunkshop">Reply Comment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form  action="{{route('send-reply')}}" method="POST" id="ints" enctype="multipart/form-data">
                    @csrf
                 
                    <div class="form-group">
                        <label for="send_reply">Select Member Account Name</label>
                            <select name="member_id" class="form-control" id="send_reply">
                                @foreach ($members as $data)
                                        <option value="{{$data->id}}">{{$data->firstname}} {{$data->lastname}}</option>  
                                @endforeach
                            </select>
                       </div>
                                        
                                    <div class="form-group" style="padding:15px 20px;">
                                        <label class="float-left" style="font-size:25px; font-weight:600;">Comments:</label>
                                        <textarea type="text" name="comments" id="comments" class="form-control" placeholder="State your reason." style="height: 25vh;" ></textarea>
                                        <span class="text-danger">@error('comments') {{$message}} @enderror</span>
                                     </div>
                                  
                                  
                                   
                                   
                              
                              
                      <!-- /.card-body -->
          
                      
                     
                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="hide">Close</button>
              <button type="submit" class="btn btn-primary">Send Reply</button>
            </div>
        </form>
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
               
      
    });
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
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