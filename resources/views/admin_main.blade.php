<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KSRP Admin Management System</title>

  
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="img" rel="stylesheet" type="text/css">
  
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top" class>

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
            <a class="collapse-item" href="{{ route('admin.event') }}">Data Table</a>
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

            

        </nav>
        <!-- End of Topbar -->

         <!-- Begin Page Content -->
         <div class="container-fluid">

<!-- Page Heading -->


<div class="row">

  <div class="col-lg-6">

    <!-- Circle Buttons -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Admin Details</h6>
      </div>
      <div class="card-body">

      
      <img class="rounded-circle" style="width:70px;height:70px;" src="/img/test.jpg">
      <br>
      <br>
      
      <h1 class="h3 mb-1 text-gray-800">KSRP Sekretariat</h1>
          <p class="mb-2">Name : Muhammad Irfan Nizar bin Anuar</p>
          <p class="mb-2">Position : Intern Staff</p>
          <p class="mb-2">Duration : 1 September - 15 January</p>
          <p class="mb-2">Location : KSRP Concourse Level, Tower 1 KLCC Tower, Kuala Lumpur</p>
          <button data-toggle="modal" data-target="#logoutModal" type="" class="btn btn-warning pull-right">Logout</button>
          <div class="clearfix"></div>

          
          <!--
            <p class="mb-4">Kelab Sukan & Rekreasi PETRONAS</a>.</p>
            -->
      

      
        
      </div>
    </div>

    <!-- Brand Buttons -->
    <div class="card shadow mb-4" >
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Brand Buttons</h6>
      </div>
      <div class="card-body">
        <p>Google and Facebook buttons are available featuring each company's respective brand color. They are used on the user login and registration pages.</p>
        <p>You can create more custom buttons by adding a new color variable in the <code>_variables.scss</code> file and then using the Bootstrap button variant mixin to create a new style, as demonstrated in the <code>_buttons.scss</code> file.</p>
        <a href="#" class="btn btn-google btn-block"><i class="fab fa-google fa-fw"></i> .btn-google</a>
        <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f fa-fw"></i> .btn-facebook</a>

      </div>
    </div>

  </div>

 
</div>

</div>
<!-- /.container-fluid -->

</div>

          
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>All Right Reserved @ Kelab Rekreasi & Petronas KSRP</span>
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
          <a class="btn btn-primary" href="{{url('logout')}}">Logout</a>
        </div>
      </div>
    </div>
  </div>

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

</body>

</html>