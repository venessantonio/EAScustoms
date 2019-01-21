<?php
    session_start();
    include 'process/auth.php';
    include 'process/database.php';
    include 'process/server.php';
    include 'process/info.php';
    $username=$_SESSION['username'];
    $id = $_SESSION['id'];
    $profile =new database;
    $profile->user_profile($username);
    $personalinfo =new database;
    $personalinfo->personal_info();
    

?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>EAS Customs - Vehicle Info</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" href="images/Logo.png">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- Font Awesome Version 5.0 -->
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/all.css">
     <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
     <script src="js/jquery.js"></script>

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
     <script src="js/script.js"></script>


</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
       <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>
    

    <!-- HEADER -->
     <header>
          <div class="container" >
               <div class="row">
         
          <div class="col-md-4 col-sm-5">
                       <img src="images/Logo.png" class="logoo" alt="logo" style="width: 50px; height: 40px" />
                       <a href="home.php" class="navbar-brand" >EAS Customs</a>
          </div>

              <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i>  09257196568 / 09304992021</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Sat)</span>
                         <span class="email-icon"><i class="fa fa-facebook-square" aria-hidden="true"></i> <a href="#">EAS Customs / @eascustoms75</a></span>
                    </div>


                    
        </div>
      </div>
     </header>


     <!-- MENU -->
    <section class="navbar navbar-default navbar-static-top" role="navigation" >
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
              

               </div>
          

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav ">
                     <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php  if (isset($_SESSION['username'])) : ?><p><i class="fas fa-user-circle"></i> Welcome <?php echo $_SESSION['username']; ?> <span class="caret"></span></p>
                </a>
                  <ul class="dropdown-menu" id="dropdownaccount">
                     <li><a  href="accountsettings.php" style="font-size: 12px;z-index: 9999;"><i class="fa fa-cogs" aria-hidden="true"></i> Account Settings</a></li>
              <li><a  href="process/logout.php" style="color: red;font-size: 12px;z-index: 9999;"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                  </ul>
                  </li>
                  <?php endif ?>
             </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                          
                        <li><a href="vehicleshistory.php" class="smoothScroll"><i class="fas fa-history"></i> Vehicle History  <span class="label label-pill label-danger count1" style="border-radius:10px;padding:6px;"></span></a></li>
                        <li><a href="vehiclesinfo.php" class="smoothScroll"><i class="fas fa-car"></i> Your Vehicles</a></li>  
                        <li class="dropdown">
                       
                        
                        
                <li class="dropdown">
                  <a class="smoothScroll" href="requeststatus.php" ><i class="far fa-calendar-check"></i> Request Status
                  </a>
                  </li>
                
             
                        
                        <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell" aria-hidden="true" style="font-size: 20px;padding: 0;"></i>  <span class="label label-pill label-danger count" style="border-radius:10px;"></span></a>
                         <ul class="dropdown-menu" id="dropdownnotif" aria-labelledby="dropdownMenuDivider"></ul>
                        </li>          
                        <li class="appointment-btn" ><a href="appointment.php">Make an appointment</a></li>       
                    </ul>
               </div>

          </div>
     </section>
    
     <div class="container">
    <?php if (isset($_SESSION['vehicle_add'])) : ?>
          <?php 
            echo $_SESSION['vehicle_add']; 
            unset($_SESSION['vehicle_add']);
          ?>
    <?php endif ?>

    <?php if (isset($_SESSION['delete'])) : ?>
          <?php 
            echo $_SESSION['delete']; 
            unset($_SESSION['delete']);
          ?>
    <?php endif ?>
   </div>
     

  <!-- Start of APPOINTMENT SECTION --> 
    <div id="appointment-section">
        <div class="container">
            <div class="row">
                  
                    
           
         <div class="col-xs-12 col-sm-12" style="width:100%; padding:5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: white; border-radius: 10px;">
             
             <button type="button" class="btn" data-toggle="modal" data-target="#addVehicle" style="background-color: #B80011;color: white; margin-top:2%; width:175px; float:right; margin-right:6%;"><i class="fa fa-car" aria-hidden="true"></i> &nbsp;Add Vehicle</button>
            <!--MODAL ADD VEHICLES-->
 <div class="modal fade" id="addVehicle" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#B80011; color: #ffffff;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title"><i class="fa fa-car" aria-hidden="true"></i> Add your Vehicle</h5>
        </div>
        <div class="modal-body">
        <form action="vehiclesinfo.php" method="post">
        <small id="reminder" class="form-text text-muted">Please fill out the required fields.</small>

        <div class="form-group">
         <?php 
         foreach($personalinfo->personal_info as $personalinfo){
         ?> 
           <input type="hidden" name="personalId" value="<?php echo $personalinfo['personalId']; ?>">
         <?php
            }
         ?>
        </div>
        <div class="form-group">
          <label for="plateNumber">Plate Number</label>
          <input type="text" class="form-control input-xs" id="plateNumber1"  placeholder="Enter Plate Number" name="plateNumber1"
          required="" oninvalid="this.setCustomValidity('Plate Number Invalid or Empty.')" oninput="setCustomValidity('')" pattern="[A-Za-z]{3}-[0-9]{3,}">
          <small id="plateNumberEx" class="form-text text-muted">Eg. AYT 321, AAAA 334</small>
        </div>
      <div class="form-group">
       <select name="make" id="make" class="form-control action" onclick="myFunction()">
        <option value="">Select Make</option>
        <?php echo $make; ?>
       </select><br>
       <select name="series" id="series" class="form-control action" >
        <option value="">Select Series</option>
       </select>
       <input type="checkbox" name="otherMake" id="otherMake"> Other Specific Make <br>
       <input type="text" class="form-control" name="othermake" id="others" placeholder="Enter Make" style="display: none;"><br>
       <input type="text" class="form-control" name="otherseries" id="otherseries" placeholder="Enter Series" style="display: none;">
      </div>
        <div class="form-group">
          <label for="yearModel">Year Model</label><span style="color:red;"> *</span>
          <input class="form-control input-sm" type="number" class="form-control" id="yearModel" name="yearModel" >
        </div>
         <div class="form-group">
          <label for="color">Color</label><span style="color:red;"> *</span>
          <input class="form-control input-sm" type="text" name="color" required="" invalid="this.setCustomValidity('Color is Empty.')" oninput="setCustomValidity('')">
        </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn" name="vehicle_add" style="background-color: #B80011; color: white"><i class="fa fa-car" aria-hidden="true"></i> Add Vehicle</button>
          <button type="button" class="btn" data-dismiss="modal" style="color:black;"><i class="fas fa-times-circle"></i> Cancel</button>
        </div>
      </div>
      </form>

      
    </div>
  </div>
<br>
             
             
             
             <h3 align="center" style="margin-top:4%;">Vehicle Information</h3>
            <br>
              <?php if (isset($_SESSION['success'])) : ?>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
    <?php endif ?>
             
             <table class="table table-hover table-bordered " id="doctables" >
      <thead style="background-color: #212529;color: white;">
        <tr>
          <th style="text-align:center; font-size: 18px;">Plate Number</th>
          <th style="text-align:center; font-size: 18px;">Make</th>
          <th style="text-align:center; font-size: 18px;">Series</th>
          <th style="text-align:center; font-size: 18px;">Color</th>
          <th style="text-align:center; font-size: 18px;">Actions</th>
        </tr>
      </thead>
      <tbody>


  <!-- MAIN VIEW VEHICLES -->
  
     <?php

         if ($vehicleinforesultCheck > 0) {
          while ($row = mysqli_fetch_assoc($vehicleinforesult)) {
      ?>
      <tr>
        <?php echo "<td align = 'center'>".$row['plateNumber']."</td>"; ?>
        <?php echo "<td align = 'center'>".ucfirst($row['make'])."</td>"; ?>
        <?php echo "<td align = 'center'>".ucfirst($row['series'])."</td>"; ?>
        <?php echo "<td align = 'center'>".ucfirst($row['color'])."</td>"; ?>
        <td style="text-align: center;s">
        <button type="button" class="btn" style="background-color:  #308ee0;color: white;" data-toggle="modal" data-target="#viewVehicle<?php echo $row['id']; ?>"><i class="fa fa-address-card" aria-hidden="true"></i> &nbsp;View Info</button>
        <button type="button" class="btn" style="background-color: #000099; color: white;" data-toggle="modal" data-target="#editVehicle<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> &nbsp;Edit</button>
      </td>


      

       <!--MODAL VIEWINFO VEHICLES-->
      <div class="modal fade" id="viewVehicle<?php echo $row['id']; ?>" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color:#308ee0; color: #ffffff; font-size: 25px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><?php echo $row['make'].' '.$row['series'].' '.$row['yearModel']; ?></h5>
            </div>
            <div class="modal-body">
            <div class="row">
              <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label for="plateNumber">Plate Number</label>
                <p><?php echo $row['plateNumber']; ?></p>
              </div>
              <div class="form-group">
                <label for="make">Make</label>
                <p><?php echo $row['make']; ?></p>
              </div>
              <div class="form-group">
                <label for="series">Series</label>
                <p><?php echo $row['series']; ?></p>
              </div>
              <div class="form-group">
                <label for="yearModel">Year Model</label>
                <p><?php echo $row['yearModel']; ?></p>
              </div>
               <div class="form-group">
                <label for="color">Color</label>
                <p><?php echo $row['color']; ?></p>
              </div>
              </div>
              <div class="col-md-6 col-sm-6">
              <div class="form-group">
                <label for="bodyType">Body Type</label>
                <p><?php 
                if (isset($row['modified'])) {
                    echo $row['bodyType'];
                   }else
                   echo "No Value.";   
                ?>
                 </p>
              </div>
              <div class="form-group">
                <label for="chasisNumber">Chasis Number</label>
                <p><?php 
                if (isset($row['chasisNumber'])) {
                    echo $row['chasisNumber'];
                   }else
                   echo "No Value.";   
                ?>
                </p>
              </div>
              <div class="form-group">
                <label for="numberOfCylinders">Number of Cylinders</label>
                <p><?php 
                if (isset($row['numberOfCylinders'])) {
                    echo $row['numberOfCylinders'];
                   }else
                   echo "No Value.";   
                ?>
                </p>
              </div>
               <div class="form-group">
                <label for="engineClassification">Engine Classification</label>
                <p><?php 
                if (isset($row['engineClassification'])) {
                    echo $row['engineClassification'];
                   }else
                   echo "No Value.";   
                ?>
                </p>
              </div>
               <div class="form-group">
                <label for="typeOfDriveTrain">Type of Drive Train</label>
                <p><?php 
                if (isset($row['typeOfDriveTrain'])) {
                    echo $row['typeOfDriveTrain'];
                   }else
                   echo "No Value.";   
                ?>
                </p>
              </div>
               <div class="form-group">
                <label for="engineDisplacement">Engine Displacement</label>
                <p><?php 
                if (isset($row['engineDisplacement'])) {
                    echo $row['engineDisplacement'];
                   }else
                   echo "No Value.";   
                ?>
                </p>
              </div>
              <div class="form-group">
                <label for="typeOfEngine">Type of Engine</label>
                <p><?php 
                if (isset($row['typeOfEngine'])) {
                    echo $row['typeOfEngine'];
                   }else
                   echo "No Value.";   
                ?>
                </p>
              </div>
               <div class="form-group">
                <label for="engineNumber">Engine Number</label>
                <p><?php 
                if (isset($row['engineNumber'])) {
                    echo $row['engineNumber'];
                   }else
                   echo "No Value.";   
                ?>
                </p>
              </div>
              </div>
              </div> 
            </div>
            <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
            </div>
          </div>
          
        </div>
      </div>


       <!--MODAL EDIT VEHICLES-->
      <div class="modal fade" id="editVehicle<?php echo $row['id']; ?>" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color: #000099; color: white; font-size: 25px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><?php echo $row['make'].' '.$row['series'].' '.$row['yearModel']; ?></h5>
            </div>
            <div class="modal-body">
          <form action="vehiclesinfo.php" method="post">
          <div class="row">
           <input type="hidden" name="vehicleid" value="<?php echo $row['id']; ?>" >
          <div class="col-sm-12">
          <div class="form-group">
            <label for="plateNumber">Plate Number</label>
            <input type="text" class="form-control input-xs" id="plateNumber" name="plateNumber" value="<?php echo $row['plateNumber']; ?>" >
          </div>
          </div>
           <div class="col-sm-6">
            <div class="form-group">
            <label for="make">Make</label>
            <input type="text" class="form-control input-xs" id="make" name="make" value="<?php echo $row['make']; ?>" >
          </div>
          </div>
           <div class="col-sm-6">
            <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control input-xs" id="series" name="series" value="<?php echo $row['series']; ?>" >
          </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
            <label for="yearModel">Year Model</label>
            <input type="number" class="form-control input-xs" id="yearModel" name="yearModel" value="<?php echo $row['yearModel']; ?>" >
          </div>
          </div>
           <div class="col-sm-6">
            <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control input-xs" id="color" name="color" value="<?php echo $row['color']; ?>" >
          </div>
          </div>


          </div>   
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn" name="vehiclesinfo_edit"style="background-color: #000099; color: white;"><i class="fas fa-edit"></i> Edit Vehicle</button>
              <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-ban"></i> Cancel</button>
            </div>
          </div>
         </form>
          
        </div>
      </div>


        <?php 
         }
        }else{
          echo '<td colspan="7"><nav aria-label="breadcrumb" align="center">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">PLEASE ADD A VEHICLE</li>
                  </ol>
                </nav></td>';
        }
        ?>

      </tr>

    </tbody>
  </table>
              
            
            
        </div>      
    </div> 
</div>
</div>
   
   <!-- END OF APPOINTMENT SECTION -->

     <!-- FOOTER -->
    <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>

                              <div class="contact-info">
                                   <p><i class="fas fa-phone"></i> 09257196568 / 09304992021</p>
                                   <p><i class="far fa-envelope"></i> <a href="#">eascustoms@yahoo.com</a></p>
                                   <p><i class="fab fa-facebook-square"></i> <a href="#">EAS Customs / @eascustoms75</a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4><br>
                                   <p>Monday - Friday <span>09:00 AM - 05:00 PM</span></p>
                                   <p>Saturday <span>09:00 AM - 05:00 PM</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div> 

                              <ul class="social-icon">
                              </ul>

                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <p>Copyright &copy; Abenchers 2018 
                                   
                                   | Design: <a rel="nofollow" target="_parent">IT Project 2</a></p>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 

                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>

      <!-- SCRIPTS -->
     <script src="js/notifinvoice.js"></script>
     <script src="js/makeseries.js"></script>
     <script src="js/notif.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
    <!-- FOR TABLE -->
     <script src="js/jquery.dataTables.js"></script>
     <script src="js/dataTables.bootstrap4.js"></script>
     <script src="js/sb-admin-datatables.min.js"></script>

    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/js/vendor.bundle.addons.js"></script>
 

     <script>
      var table = $('#doctables').DataTable({
      // PAGELENGTH OPTIONS
      "lengthMenu": [[ 10, 25, 50, 100, -1], [ 10, 25, 50, 100, "All"]]

      });
    </script>


</body>
</html>