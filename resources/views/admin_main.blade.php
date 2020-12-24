<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KSRP Admin Management System</title>

  <script src="http://www.chartjs.org/dist/2.7.3/Chart.bundle.js"></script>
  <script src="http://www.chartjs.org/samples/latest/utils.js"></script>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="img" rel="stylesheet" type="text/css">
  
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  

  <style>
  canvas {
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
  }
  </style>
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
            <a class="collapse-item" href="{{ route('admin.event') }}">Event Listing</a>
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
            <a class="nav-link" href="">
              
              <i class="fas fa-chart-bar"></i>
              <span>Chart</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="">
              
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

            

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
          </div>

          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Executive</div>
                      <div class="h5 mb-0  text-gray-600">{{$Executive}} Members</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-astronaut fa-3x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Non- Executive</div>
                      <div class="h5 mb-0  text-gray-600">{{$notExecutive}} Members</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-secret fa-3x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Budget Allocate</div>
                      <div class="h5 mb-0  text-gray-600">{{$budget}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-money-check fa-3x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <!-- Earnings (Annual) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Budget Balance</div>
                      <div class="h5 mb-0  text-gray-600">{{$balance}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-wallet fa-3x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
           

           
          <div class="row">

<!-- Area Chart -->
<div class="col-xl-8 col-lg-7">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
      
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <div class="chart-area">
        <canvas id="myBarChart"></canvas>
      </div>
    </div>
  </div>
</div>

<!-- Pie Chart -->
<div class="col-xl-4 col-lg-5">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
      
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <img class="rounded-circle shadow " style="width:70px;height:70px;" src="/img/user1.png">
        <br>
          <br>
            @auth
              <form action="{{url('logout')}}" method="GET" id="logForm" class="user" >
                <h1 class="h3 mb-1 text-gray-800">{{Auth::user()->name}}</h1>
                  <button type="submit" class="btn btn-warning pull-right">Logout</button>
                    <div class="clearfix"></div>
            @endauth    
          </div>
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
  <!-- <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/chart-bar-demo.js"></script> -->

</body>

</html>

<script>
// Bar Chart Example
var obj1 = <?php echo json_encode($NameMember ?? '', true) ?>;
var obj2 = <?php echo json_encode($allbudget ?? '', true) ?>;
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: obj1,
							datasets: [{
                
								label: obj2,
								data: obj2,
								backgroundColor: "#0000FF",
								borderColor: "#FF0000",
								fill: false,
						      // notice the gap in the data and the spanGaps: true
						      
						  
              }]
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false,
          drawBorder: false
        },
      }],
      yAxes: [{
        ticks: {
          min: 0,
          //max: 15000,
         
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return 'RM' + value;
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] || '';
          return datasetLabel;
        }
      }
    }
  }
})


  
</script>
