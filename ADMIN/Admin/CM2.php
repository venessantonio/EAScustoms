<?php require 'process/require/auth.php';?>
<?php require "process/require/dataconf.php";?>
<?php require "process/check/dashboardcheck.php";?>
<?php require "process/require/dataconf.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Services</title>
    <link rel="icon" href="images/Logo.png">
    <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">

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

        
        <div class="container-fluid page-body-wrapper">
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
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                      <i class="menu-icon mdi mdi-inbox"></i>
                      <span class="menu-title" style="font-size:14px;">Content </span>
                       <i class="menu-arrow"></i> 
                    </a>
                    <div class="collapse" id="ui-basic2">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="CM.php" style="font-size:14px;">Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="CM2.php" style="font-size:14px;">Latest Cars</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="CM3.php" style="font-size:14px;">Our Team</a>
                        </li>
                      </ul>
                    </div>
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
                              <li class="breadcrumb-item"><a href="CM2.php" style="font-size:18px;">Content Management</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="font-size:18px;">Latest Cars</li>
                              </ol>
                            </nav>
                          </div>
                        </div>
                      </div>

                      <?php
                      date_default_timezone_set("Asia/Calcutta");
                      //echo date_default_timezone_get();
                      ?>

                      <?php
                        if(isset($_POST['insert'])){
                          $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
                          $name = $connection->real_escape_string($_POST["name"]);
                          $query = "UPDATE `contents` SET `image`= '$file', `date` = now() where `img_name` = '$name'  ";
                          if(mysqli_query($connection, $query)){
                            // echo "success";
                          }else{
                            echo "error";
                          }
                        }
                        ?>
                    
                    <div class="row">
                        <div class="col-lg-6 grid-margin stretch-card"  >
                            <div class="card" >
                                <div class="card-body" > 
                                    <div class="container">
                                        <form enctype="multipart/form-data"  action="" id="wb_Form1" name="form" method="post">
                                            <!-- LEFT DIV -->
                                            <div class="col-md-6 col-sm-6" style="float:left;">
                                            
                                              <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                                              <?php
                                                $query = "SELECT image FROM `contents` WHERE `img_name` ='first'";
                                                $result = mysqli_query($connection, $query);
                                                while($row = mysqli_fetch_array($result)){
                                                  echo '
                                                  <tr>
                                                    <td>
                                                      <img style="width:235px; height:230px;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                                    </td>
                                                  <tr>
                                                    ';
                                                }
                                                ?>

                                              </div>
                                            </div>
                                             <!--RIGHT DIV -->
                                             <div class="col-md-6 col-sm-6" style="float:right;">
                                              <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                                                <div class="news-info">
                                                 <h3 style="font-weight:bold;">First</h3>
                                                  <br>
                                                  <input type="file" name="image" id="image"  required="required">
                                                </div>
                                              </div>
                                              <br>
                                              <input type="hidden" name="name" value="first">
                                              <button type="submit" class="btn btn-primary" value="SUBMIT" name="insert"><i class="menu-icon mdi mdi-checkbox-multiple-marked-circle-outline"></i> Submit</button>  
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container">
                                        <form enctype="multipart/form-data"  action="" id="wb_Form1" name="form" method="post">
                                             <!-- LEFT DIV -->
                                           <div class="col-md-6 col-sm-6" style="float:left;">
                                         
                                              <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                                              <?php
                                                $query = "SELECT image FROM `contents` WHERE `img_name` ='second'";
                                                $result = mysqli_query($connection, $query);
                                                while($row = mysqli_fetch_array($result)){
                                                  echo '
                                                  <tr>
                                                    <td>
                                                      <img style="width:235px; height:230px;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                                    </td>
                                                  <tr>
                                                    ';
                                                }
                                                ?>
                                              </div>
                                            </div>
                                             <!-- RIGHT DIV -->
                                             <div class="col-md-6 col-sm-6" style="float:right;">
                                         
                                              <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                                                <div class="news-info">
                                                 <h3 style="font-weight:bold;">Second</h3>
                                                 <br>
                                                  <input type="file" name="image" id="image"  required="required">
                                                </div>
                                              </div>
                                              <br>
                                              <input type="hidden" name="name" value="second">
                                              <button type="submit" class="btn btn-primary" value="SUBMIT" name="insert"><i class="menu-icon mdi mdi-checkbox-multiple-marked-circle-outline"></i> Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container">
                                      <form enctype="multipart/form-data"  action="" id="wb_Form1" name="form" method="post">
                                            <!--LEFT-->
                                             <div class="col-md-6 col-sm-6" style="float:left;">
                                                  <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                                                  <?php
                                                    $query = "SELECT image FROM `contents` WHERE `img_name` ='third'";
                                                    $result = mysqli_query($connection, $query);
                                                    while($row = mysqli_fetch_array($result)){
                                                      echo '
                                                      <tr>
                                                        <td>
                                                          <img style="width:235px; height:230px;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                                        </td>
                                                      <tr>
                                                        ';
                                                    }
                                                    ?>
                                                  </div>
                                            </div>
                                            <!--RIGHT-->
                                            <div class="col-md-6 col-sm-6" style="float:right;">
                                                <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                                                    <div class="news-info">
                                                     <h3 style="font-weight:bold;">Third</h3>
                                                     <br>
                                                      <input type="file" name="image" id="image"  required="required">
                                                    </div>
                                                </div>
                                                <br>
                                                  <input type="hidden" name="name" value="third">
                                                  <button type="submit" class="btn btn-primary" value="SUBMIT" name="insert"><i class="menu-icon mdi mdi-checkbox-multiple-marked-circle-outline"></i> Submit</button>
                                             </div>
                                        </form>    
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                     
                    
                </div>
            </div>
        </div>
    </div> 
    
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
    <script src="js/script.js"></script> 

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>
    <script type="text/javascript" src="js/events.js"></script> 
    
</body>
</html>