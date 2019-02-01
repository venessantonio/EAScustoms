<?php require 'process/require/auth.php';?>
<?php require "process/require/dataconf.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
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
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link href="css/dataTables.bootstrap4.css" rel="stylesheet">


   <link rel="stylesheet" href="css/normalize.css"  type="text/css"/>
   <link rel="stylesheet" href="css/datepicker.css"  type="text/css"/> 
    
    
     <!-- DatePicker dont move to another line -->

     <!-- Notification Jquery Library -->
     
     <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
     <script> 
      var $jq171 = jQuery.noConflict(true);
      </script>


     <script> 
      window.jQuery = $jq171;
     </script>
     <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>
    
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
              <span class="menu-title" style="font-size:14px;">Appointment</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="appointments.php" style="font-size:14px;">Create Appointment</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="request.php" style="font-size:14px;">Request</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="overdue.php" style="font-size:14px;">Overdue</a>
                </li>
              </ul>
            </div>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" href="calendar.php">
              <i class="menu-icon mdi mdi-calendar"></i>
              <span class="menu-title" style="font-size:14px;">Calendar</span>
            </a>
          </li>
            
          <!-- <li class="nav-item">
            <a class="nav-link" href="dailytaskform.php">
              <i class="menu-icon mdi mdi-file"></i>
              <span class="menu-title" style="font-size:14px;">Daily Task Form</span>
            </a>
          </li> -->

          <li class="nav-item">
            <a class="nav-link"  href="chargeinvoice.php">
              <i class="menu-icon mdi mdi-receipt"></i>
              <span class="menu-title" style="font-size:14px;">Sales Invoice</span>
            </a>
          </li>
            
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
            <a class="nav-link" href="sparepartsmanagement.php">
              <i class="menu-icon mdi mdi-wrench"></i>
              <span class="menu-title" style="font-size:14px;">Spare Parts</span>
            </a>
          </li>
            
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <!-- Start of BreadCrumbs -->
          <div class="row">
            <div class="col-lg-12 stretch-card grid-margin ">
              <div class="card">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page" style="font-size:18px;">Create Appointments</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <!-- End of BreadCrumbs -->

          <!-- Start of BreadCrumbs -->
          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title" style="font-size:20px;">Create appointment</p>
                <form method="post" action="process/appointment_walkin_insert.php">
                  <div class="form-group">
                 <select name="personalId" id="personalId" class="form-control action" onclick="myFunction()" style="background-color:#ebecee; font-size:16px; color:#333333;">
                  <option value="">Select User</option>
                  <?php echo $make; ?>
                 </select><br>
                 <select name="vehicleId" id="vehicleId" class="form-control action" style="background-color:#ebecee; font-size:16px; color:#333333;">
                  <option value="">Select Vehicle</option>
                 </select>
                </div>
                 <div class="panel-body">
                     <div class ="services" >
                        <div class="col-md-3 col-sm-3">
                          <ul style="text-align:justify; font-size:16px;list-style: none;">
                            <li><a role="button" id="mechanical" >Mechanical</a></li>
                            <li><a role="button" id="electrical">Electrical</a></li>
                            <li><a role="button" id="customize">Customize</a></li>
                            <li><a role="button" id="bodyRepair">Body Repair</a></li>
                            <li><a role="button" id="painting">Body Paint</a></li>
                           </ul>
                        </div>
                      </div>
                     
                        <div class="col-md-8 col-sm-8">
                            <ul style="text-align:justify; font-size:16px;list-style: none;">
                            <div class="service-detail" id="mechanical_service" style="display: none; text-align:justify;">    
                              <?php
                               foreach($mechanicalservice->mechanical_service as $mechanicalservice):
                              ?>  
                               <div class="col-md-5 col-sm-5">
                               <input type="checkbox" name="service[]" id="<?= $mechanicalservice['serviceName']; ?>"  value="<?= $mechanicalservice['serviceName']; ?>"><?= $mechanicalservice['serviceName']; ?><br>
                               </div>
                              <?php 
                                endforeach; 
                              ?>
                            </div>
                        
                            <div class="service-detail" id="electrical_service" style="display: none; text-align:justify;">
                              <?php
                               foreach($electricalservice->electrical_service as $electricalservice):
                              ?>
                               <div class="col-md-5 cosl-sm-5">   
                               <input type="checkbox" name="service[]" id="<?= $electricalservice['serviceName']; ?>"  value="<?= $electricalservice['serviceName']; ?>"> 
                               <?= $electricalservice['serviceName']; ?>
                               <br> 
                               </div>
                              <?php     
                                 endforeach;  
                              ?>
                         </div>
                        
                         <div class="service-detail" id="paint_service" style="display: none; text-align:justify;">
                              <?php
                               foreach($paintservice->painting_service as $paintservice){
                              ?>   
                               <input type="checkbox" name="service[]" id="<?= $paintservice['serviceName']; ?>"  value="<?= $paintservice['serviceName']; ?>"><?= $paintservice['serviceName']; 
                                ?>
                              <br><br>
                              <?php     
                                   }
                              ?>        
                         </div>
                    
                        <div class="service-detail" id="body_Repair" style="display: none; text-align:justify;">
                               <input type="checkbox" name="service[]" value="Body Repair">Request for Body Repair.
                              <br><br> 
                        </div>
                         <div class="service-detail" id="customization" style="display: none; text-align:justify;">
                               <input type="checkbox" name="service[]" value="Customize">Request for Customization.
                              <br><br> 
                         </div>

                         <div class="service-detail" id="maintenance" style="display: none; text-align:justify;">
                               <input type="checkbox" name="service[]" value="Maintenance">Request for Maintenance.
                              <br><br> 
                         </div>
                     </ul>
                     </div>
                  </div>

                    <!-- Other Service -->
                    <hr>
                   <p style="text-align: justify; padding-left:15px; font-size:17px; color:#333333;">Other Service</p>
                    <div class="panel-body">
                        <textarea class="form-control" name="otherService" rows="5" id="additionalMessage" name="message" placeholder="Others" style="background-color:#ebecee;"></textarea>
                      </div>
                    
                    <!-- Select Date -->                                       

                          <script type="text/javascript">
                           var unavailableDates  = [<?php
                           foreach($appointmentinfo->appointment_info as $appointmentinfo):
                           ?>"<?= date('j-m-Y', strtotime($appointmentinfo['date'])); ?>",
                          <?php     
                            endforeach;
                          ?>];
                           function unavailable(date) {
                           dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
                           if ($jq171.inArray(dmy, unavailableDates) == -1) {
                            return [true, ""];
                            } else {
                            return [false, "", "Unavailable"];
                            }
                           }

                          $jq171(function(){
                            $jq171('#datepicker').datepicker({
                              dateFormat: 'yy-mm-dd',
                              minDate: 0,
                              beforeShowDay: $jq171.datepicker.noWeekends,
                              inline: true,
                              //nextText: '&rarr;',
                              //prevText: '&larr;',
                              showOtherMonths: true,
                              //dateFormat: 'dd MM yy',
                              dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                              beforeShowDay: unavailable, 
                              //showOn: "button",
                              //buttonImage: "img/calendar-blue.png",
                              //buttonImageOnly: true,
                            });
                          });

                      <br><br><br>
                      <button type="submit" name="send-sms" class="btn btn-darkblue" style="float:right;"><i class="menu-icon mdi mdi-send"></i>Create Appointment</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- End of BreadCrumbs -->

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

<script type="text/javascript">
  $(document).ready(function(){
    $('#users').on('change',function(){
        var ogID = $(this).val();
        if(ogID){
            $.ajax({
                type:'POST',
                url:'process/getVehicleData.php',
                data:'group_id='+ogID,
                success:function(html){
                    $('#vehicles').html(html);

                }
            }); 
        }else{
            $('#vehicles').html('<option value="">Select office group first</option>');
        }
    });
    

});
</script>