<?php require 'process/require/auth.php';?>
<?php require "process/require/dataconf.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Services</title>
  <link rel="icon" href="images/Logo.png">
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/custom.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include "includes/navbar.php";?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
        
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav" style="position:fixed;">
        <hr class="style2">
            
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="menu-icon mdi mdi-view-dashboard"></i>
              <span class="menu-title" style="font-size:14px;">Dashboard</span>
            </a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-inbox"></i>
              <span class="menu-title" style="font-size:14px;">Data Entry</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="appointments.php" style="font-size:14px;">Appointment</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="administratormanagement.php" style="font-size:14px;">Administrators</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="makeseriesmanagement.php" style="font-size:14px;">Make Series</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sparepartsmanagement.php" style="font-size:14px;">Spare Parts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="servicesmanagement.php" style="font-size:14px;">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="scopeofworkmanagement.php" style="font-size:14px;">Scope of Work</a>
                </li>
              </ul>
            </div>
          </li>
            
          <!-- <li class="nav-item">
            <a class="nav-link" href="dailytaskform.php">
              <i class="menu-icon mdi mdi-file"></i>
              <span class="menu-title" style="font-size:14px;">Daily Task Form</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link"  href="chargeinvoice.php">
              <i class="menu-icon mdi mdi-receipt"></i>
              <span class="menu-title" style="font-size:14px;">Charge Invoice</span>
            </a>
          </li> -->
            
          <li class="nav-item">
            <a class="nav-link" href="accountmanagement.php">
              <i class="menu-icon mdi mdi-account-multiple"></i>
              <span class="menu-title" style="font-size:14px;">Account Management</span>
            </a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" href="vehicle.php">
              <i class="menu-icon mdi mdi-car-side"></i>
              <span class="menu-title" style="font-size:14px;">Vehicle</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="CM.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title" style="font-size:14px;">Content Management</span>
            </a>
          </li>
            
        </ul>
      </nav>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-lg-12 grid-margin  stretch-card">
              <div class="card">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php" style="font-size:18px;">Date Entry</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="font-size:18px;">Services</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <div class="row">   
              <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                    
                  <p class="card-title" style="font-size:20px;">Services</p>
                  Create services
                  <br>
                 <br>
                    
                <div class="form-group">
                 <form action="process/addservice_process.php" method="POST">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Service Name</label>
                              <input type="text" class="form-control" name="servicename" required>
                            </div>
                          </div>
                            
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Service Type</label>
                              <input type="text" class="form-control" name="servicetype">
                            </div>
                          </div>
                        </div>

                            <br>
                            <button type="submit" class="btn btn-darkred" name="submit-service" style="float:right"><i class="menu-icon mdi mdi-car-side"></i> Add Service</button>


                            <div class="clearfix"></div>
                                        
                </form>   
                </div>
                  
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include "includes/footer.php";?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->

  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <script src="js/sb-admin-datatables.min.js"></script>

  
     
</body>

</html>

<script>
  var table = $('#doctables').DataTable({
    // PAGELENGTH OPTIONS
    "lengthMenu": [[ 10, 25, 50, 100, -1], [ 10, 25, 50, 100, "All"]]

});
</script>

<script>
  var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
    $('#Submit').prop('disabled',false);
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
    $('#Submit').prop('disabled',true);
    }
  }
</script>