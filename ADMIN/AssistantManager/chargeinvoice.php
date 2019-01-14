<?php require 'process/require/auth.php';?>
<?php require "process/require/dataconf.php";
$sql = "SELECT chargeinvoice.id as id, vehicles.plateNumber as platenumber, vehicles.make as make, vehicles.series as series, personalInfo.firstName,personalInfo.lastName,chargeinvoice.date FROM chargeinvoice join vehicles on chargeinvoice.vehicleId = vehicles.id join personalInfo on chargeinvoice.personalId = personalInfo.personalId order by chargeinvoice.date desc";
$stmt = $connection->prepare($sql); 
$stmt->execute(); 
$ci = $stmt -> get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>   
    
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
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
    
 <script>
    function generate() {

        var a = parseInt(document.getElementById("noofscope").value);
        var ch = document.getElementById("form");
        
        for (i = 0; i < a; i++) {
        	var label = document.createTextNode("Scope Name:");
            var input = document.createElement("input");
            var br = document.createElement("br");
            input.setAttribute('type',"text");
            input.setAttribute('name',"scope[]");
         	ch.appendChild(label);   
            ch.appendChild(input);
            ch.appendChild(br);
        }
        var br2 = document.createElement("br");
        var labelTotal = document.createTextNode("Total");
        var total = document.createElement("input");
        var submit = document.createElement("input");
        total.setAttribute('type','text');
        total.setAttribute('name','total');
        submit.setAttribute('value','create');
        submit.setAttribute('type','submit');
        submit.setAttribute('name','submit');
        ch.appendChild(labelTotal);
        ch.appendChild(total);
        ch.appendChild(br2);
        ch.appendChild(submit);

    }
    </script>
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
                  <a class="nav-link" href="appointments.php" style="font-size:14px;">Request</a>
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
      
            <div class="main-panel">
               <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-11">
                            <p class="card-title" style="font-size:20px;">Sales Invoice</p>
                            <br>
                        </div>
                        <div class="col-1">
                           <button type="button" class="btn btn-darkred" style="padding-button: 10px; float: right; width: 145px;" data-toggle="modal" data-target="#addCi"><i class="menu-icon mdi mdi-receipt"></i>
                                Add SI
                            </button> 
                        </div>
                    </div>
                    
                    
                <a href ="addSalesInvoice.php"></a>

                <!-- Modal -->
                <div class="modal fade" id="addCi" tabindex="-1" role="dialog" aria-labelledby="addCi" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                        <div class="modal-body">
                        <form action = "process/addSalesInvoice_process.php" method = "post" id = "form">
                        <?php
                        $sql = "SELECT * FROM vehicles";
                        $stmt = $connection->prepare($sql); 
                        $stmt->execute(); 
                        $vehicles = $stmt->get_result(); 
                        ?>
                        Vehicle : <select class="form-control" name="vehicleId" id="vehicle">
                        <?php foreach($vehicles as $vehicle): ?>
                        <option value="<?= $vehicle['id']; ?>"><?= $vehicle['plateNumber']; ?> <?= ucfirst($vehicle['make']); ?> <?= ucfirst($vehicle['series']); ?></option>
                        <?php endforeach; ?>
                        </select> 
                        <br>
                        Number of work done :
                        <input type="text" id="noofscope" name = "noofscope"/>
                        <input type="button" value="set" onclick="generate()" />
                        <br>
                        <?php 
                        $sql2 = "SELECT * FROM spareparts";
                        $stmt2 = $connection->prepare($sql2); 
                        $stmt2->execute(); 
                        $spareparts = $stmt2->get_result(); 
                        ?>
                        Spare Parts:
                        <br>
                        <?php foreach($spareparts as $sparepart): ?>
                        <input type ="checkbox" name="spareParts[]" value="<?= $sparepart['id']; ?>"><?=  $sparepart['name']; ?> - <?=  $sparepart['price']; ?>
                        <?php endforeach; ?>
                        <br>       
                        </form>
                        </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                      </div>
                    </div>
                  </div>
                </div>
                    
                  
                  
                  <div class="table-responsive">
                  <table class="table table-bordered table-dark" id="doctables">
                      <thead>
                        <tr class="grid">
                            
                            <th>Plate</th>
                            <th>Made</th>
                            <th>Series</th>
                            <th>Client Name</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-primary" style="color:black;">
                          <?php foreach($ci as $chargeInvoice): ?>
                              <tr>
                                <td><?= $chargeInvoice['platenumber']; ?></td>
                                <td><?= $chargeInvoice['make']; ?></td>
                                <td><?= $chargeInvoice['series']; ?></td>
                                <td><?= $chargeInvoice['firstName']; ?>  <?= $chargeInvoice['lastName']; ?></td>
                                <td><?= $chargeInvoice['date']; ?></td>
                                  <td>
                                      <a href="print.php?id=<?= $chargeInvoice['id'];?>"><input type='submit'value='Full Details' name='submit' class="btn btn-primary"></a>
                                  </td>
                              </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                      <br>
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
      </div>
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
       
</body>
    
<script>
  var table = $('#doctables').DataTable({
    // PAGELENGTH OPTIONS
    "lengthMenu": [[ 5, 10, 25, 50, 100, -1], [ 5, 10, 25, 50, 100, "All"]]

});
</script>

</html>
