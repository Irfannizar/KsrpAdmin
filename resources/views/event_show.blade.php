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
  <link href={{ asset('vendor/fontawesome-free/css/all.min.css')}} rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href={{ asset('css/sb-admin-2.min.css') }} rel="stylesheet" type = "text/css">
  

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
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvent" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-shapes"></i>
          <span>Events</span>
        </a>
        <div id="collapseEvent" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">select</h6>
            <a class="collapse-item " href="{{ route('admin.event') }}">Data Table</a>
            <a class="collapse-item" href="{{ route('create.event') }}">Create Event</a>
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

      <!-- Divider -->
      <hr class="sidebar-divider">



      

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
              

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">New</h1>
<p class="mb-4">Testing Form</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Event</h6>
  </div>
  <div class="card-body">
  <form action="" method = "">
  @csrf
 
  <!-- Default input -->
  <div class="form-group">
    <label>Event : {{ $event->title }}</label>
    </div>
    <div class="form-group">
    <label>Date : {{ $event->date }}</label>
    </div>
    <div class="form-group">
    <label>Venue : {{ $event->location }}</label>
    </div>
    <div class="form-group">
    <label>Members Fee : {{ $event->fee }}</label>
    </div>
    <div>
    
    <a class = " btn-rounded btn-sm my-0"
      href ="{{ route('event.email') }}">SEND EMAIL<a/> 

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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src={{ asset('vendor/jquery/jquery.min.js') }}></script>
  <script src={{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>

  <!-- Core plugin JavaScript-->
  <script src={{ asset('vendor/jquery-easing/jquery.easing.min.js') }}></script>

  <!-- Custom scripts for all pages-->
  <script src={{ asset('js/sb-admin-2.min.js') }}></script>

  <!-- Page level plugins -->
  <script src={{ asset('vendor/chart.js/Chart.min.js') }}></script>

  <!-- Page level custom scripts -->
  <script src={{ asset('js/demo/chart-area-demo.js') }}></script>
  <script src={{ asset('js/demo/chart-pie-demo.js') }}></script>
  <script src={{ asset('js/demo/chart-bar-demo.js') }}></script>

</body>

</html>
<link href={{ asset('css/sb-admin-2.min.css') }} rel="stylesheet" type = "text/css">