<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KSRP Admin Management System</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  @notifyCss
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.main') }}">
        <div class="sidebar-brand-icon rotate-n-0">
          <img class="rounded-circle" style="width:50px;height:50px;" src="/img/KSRP.jpg" alt="">
          <div class="sidebar-brand-text mx-3">KSRP <sup></sup></div>
          <!--
            <p class="mb-4">Kelab Sukan & Rekreasi PETRONAS</a>.</p>
            -->
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Section
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvent" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-shapes"></i>
          <span>Events</span>
        </a>
        <div id="collapseEvent" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">select</h6>
            <a class="collapse-item " href="{{ route('admin.event') }}">Data Table</a>
            <a class="collapse-item active" href="{{ route('create.event') }}">Create Event</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-cannabis"></i>
          <span>Tickets</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">select</h6>
            <a class="collapse-item" href="">Create Ticket</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
                    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePayment" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-receipt"></i>
                    <span>Payment</span>
                    </a>
                    <div id="collapsePayment" class="collapse" aria-labelledby="paymentUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">select</h6>
                            <a class="collapse-item" href="{{ route('payment.lists') }}">All Status</a>
                        </div>
                    </div>
                </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        ADD ON
      </div>

      <li class="nav-item">
                    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseMember" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-users"></i>
                    <span>Members</span>
                    </a>
                    <div id="collapseMember" class="collapse" aria-labelledby="membertUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">select</h6>
                            <a class="collapse-item" href="{{ route('admin.member') }}">Members List</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.main') }}">
                    
                    <i class="fas fa-chart-bar"></i>
                    <span>Chart</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.calendar') }}">
                    
                    <i class="fas fa-calendar-week"></i>
                    <span>Calendar</span></a>
                </li>




      

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
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            

           

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              @auth
              
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                <img class="img-profile rounded-circle" src="img/ksrp.jpg">
              </a>
             
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                
                <a class="dropdown-item" href="{{url('logout')}}" data-toggle="" data-target="">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
              
              @endauth  
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Create New Event</h1>
<p class="mb-4">Please fill in the form</a>.</p>

<!-- Content Row -->
<div class="row">

<!-- Grow In Utility -->
<div class="col-lg-6">


<!-- DataTales Example -->
<div class="card position-relative">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Event</h6>
  </div>
  <div class="card-body">
  <form action="{{route('store.event')}}" method = "POST" enctype="multipart/form-data">
  @csrf
 
  <!-- Default input -->
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name = "title" required>
  </div>

  <div class="form-group">
    <label>Start_Date</label>
    <input type="date" class="form-control" name = "date" required>
  </div>

  <div class="form-group">
    <label>End_Date</label>
    <input type="date" class="form-control" name = "end_date" required>
  </div>

  <div class="form-group">
    <label>Location</label>
    <input type="text" class="form-control" name = "location" required>
  </div>

  <div class="form-group">
    <label>Limit Register</label>
    <input type="int" class="form-control" name = "limit_register" required>
  </div>

  <div class="form-group">
    <label>Fee(RM x 100)</label>
    <input type="text" class="form-control" name = "fee" required>
  </div>

  <div class="form-group">
  <label>Event Poster</label>
    <div class = "custom-file">
      <input type = "file" name = "image" id="image" class="custome-file-input" accept = ".jpg,.jpeg,.png">
      <label class = "custome-file-label">*Please upload the right format (eg: .jpej/.jpg)</label>  
  </div>

  

  <button type="submit" class="btn btn-primary pull-right">Create</button>
    <div class="clearfix"></div>
  </div>
</div>
</div>
</div>
<!-- Fade In Utility -->
<div class="col-lg-6">

<div class="card position-relative">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Purpose</h6>
  </div>
  <div class="card-body">
  <div class="form-group">
    <label>Event Budget (RM)</label>
    <input type="int" class="form-control" name = "budgets" required>
  </div>
    
  <div class="form-group">
  <label>Please select Region</label>
    <select class="form-control" name = "regions" required>
      <option value="">Select Region</option>
      <option value="Tengah">Tengah</option>
      <option value="Selatan">Selatan</option>
      <option value="Utara">Utara</option>
      <option value="Sabah & Labuan">Sabah & Labuan</option>
      <option value="Sarawak">Sarawak</option>
      <option value="Pantai Timur">Pantai Timur</option>
    </select>
   
    <p class="mb-0 small">Note: Please select region accordingly as this will notify all the members after event was blasted to avoid miscommunication!</p>
  </div>
</div>

</div>

</div>
</div>
</div>


</form>
<!-- End of Main Content -->
          
     
   

 

    
              
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  

 

  <!-- Bootstrap core JavaScript-->

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>
  @notifyJs
  <x:notify-messages />
</body>

</html>
