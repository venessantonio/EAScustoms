<?php 
    session_start();
    include 'process/info.php';
    include 'process/auth.php';
    include 'process/server.php';
    include 'process/database.php';
    $username=$_SESSION['username'];
    $profile =new database;
    $profile->user_profile($username);
    $appointmentinfo = new database;
    $appointmentinfo -> appointment_info_activeschedule();


?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>EAS Customs - Request Status</title>
     
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" href="images/Logo.png">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <!-- Font Awesome Version 5.0 -->
     <link rel="stylesheet" href="css/all.css">
     <script src="js/jquery.js"></script>
     
     

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

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
     <script src="js/jquery.js"></script>
     


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
                       <a href="index.php" class="navbar-brand" >EAS Customs</a>
          </div>

              <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i>  09257196568 / 09304992021</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Sat)</span>
                         <span class="email-icon"><i class="fab fa-facebook"></i> <a href="#">EAS Customs / @eascustoms75</a></span>
                    </div>


                    
        </div>
      </div>

     

     </header>
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
              beforeShowDay: unavailable,
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

           $jq171(function(){
            $jq171('#datepicker2').datepicker({
              dateFormat: 'yy-mm-dd',
              minDate: 0,
              beforeShowDay: unavailable,
              beforeShowDay: $jq171.datepicker.noWeekends,
              inline: true,
              //nextText: '&rarr;',
              //prevText: '&larr;',
              showOtherMonths: true,
              //dateFormat: 'dd MM yy',
              dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
              //showOn: "button",
              //buttonImage: "img/calendar-blue.png",
              //buttonImageOnly: true,
            });
          });
           $jq171(function(){
            $jq171('#datepicker3').datepicker({
              dateFormat: 'yy-mm-dd',
              minDate: 0,
              beforeShowDay: unavailable,
              beforeShowDay: $jq171.datepicker.noWeekends,
              inline: true,
              //nextText: '&rarr;',
              //prevText: '&larr;',
              showOtherMonths: true,
              //dateFormat: 'dd MM yy',
              dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
              //showOn: "button",
              //buttonImage: "img/calendar-blue.png",
              //buttonImageOnly: true,
            });
          });

          $jq171(function(){
            $jq171('#datepicker4').datepicker({
              dateFormat: 'yy-mm-dd',
              minDate: 0,
              beforeShowDay: unavailable,
              beforeShowDay: $jq171.datepicker.noWeekends,
              inline: true,
              //nextText: '&rarr;',
              //prevText: '&larr;',
              showOtherMonths: true,
              //dateFormat: 'dd MM yy',
              dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
              //showOn: "button",
              //buttonImage: "img/calendar-blue.png",
              //buttonImageOnly: true,
            });
          });

          $jq171(function(){
            $jq171('#datepicker5').datepicker({
              dateFormat: 'yy-mm-dd',
              minDate: 0,
              beforeShowDay: unavailable,
              beforeShowDay: $jq171.datepicker.noWeekends,
              inline: true,
              //nextText: '&rarr;',
              //prevText: '&larr;',
              showOtherMonths: true,
              //dateFormat: 'dd MM yy',
              dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
              //showOn: "button",
              //buttonImage: "img/calendar-blue.png",
              //buttonImageOnly: true,
            });
          });

          $jq171(function(){
            $jq171('#datepicker6').datepicker({
              dateFormat: 'yy-mm-dd',
              minDate: 0,
              beforeShowDay: unavailable,
              beforeShowDay: $jq171.datepicker.noWeekends,
              inline: true,
              //nextText: '&rarr;',
              //prevText: '&larr;',
              showOtherMonths: true,
              //dateFormat: 'dd MM yy',
              dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
              //showOn: "button",
              //buttonImage: "img/calendar-blue.png",
              //buttonImageOnly: true,
            });
          });

          </script>

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
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php  if (isset($_SESSION['username'])) : ?><p> <i class="fas fa-user-circle"></i></i></span> Welcome <?php echo $_SESSION['username']; ?> <span class="caret"></span></p>
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
                        <li><a href="requeststatus.php" class="smoothScroll"><i class="far fa-calendar-check"></i>  Request Status</a></li>  
                        <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell" aria-hidden="true" style="font-size: 20px;padding: 0;"></i>  <span class="label label-pill label-danger count" style="border-radius:10px;"></span></a>
                         <ul class="dropdown-menu" id="dropdownnotif" aria-labelledby="dropdownMenuDivider"></ul>
                        </li>          
                        <li class="appointment-btn" ><a href="appointment.php">Make an appointment</a></li>

                          
                           
                    </ul>
               </div>

          </div>
     </section>
    <div class="jumbotron">
     <div class="container">  
    <?php if (isset($_SESSION['success'])) : ?>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']); 
          ?>
    <?php endif ?>
    <?php if (isset($_SESSION['delete'])) : ?>
          <?php 
            echo $_SESSION['delete']; 
              unset($_SESSION['delete']);
          ?>
      <?php endif ?>
      </div>
    
    <div class="container">
    <?php if (isset($_SESSION['appointment_delete'])) : ?>
          <?php 
            echo $_SESSION['appointment_delete']; 
              unset($_SESSION['appointment_delete']);
          ?>
    <?php endif ?>
    <?php if (isset($_SESSION['appointment_accepted'])) : ?>
      <?php 
        echo $_SESSION['appointment_accepted']; 
          unset($_SESSION['appointment_accepted']);
      ?>
    <?php endif ?>
        <?php if (isset($_SESSION['appointment_cancel_Pending'])) : ?>
      <?php 
        echo $_SESSION['appointment_cancel_Pending']; 
          unset($_SESSION['appointment_cancel_Pending']);
      ?>
    <?php endif ?>

    <div class="row">
    <div class="col-md-6 col-sm-6">
    <div class="panel panel-default" id="headings">
      <div class="panel-heading" style="background-color: #ffaf00;color: white; font-size:18px"><i class="fas fa-truck-loading"></i> Pending Requests</div>
      <div class="panel-body" id="serviceDisplay" style="overflow-y: auto;height: 230px;">




      <!-- PENDING ANG RESCHEDULED -->        
      <?php
       if ($pendingRequestsresultCheck > 0) {
        while ($appointmentpending = mysqli_fetch_assoc($pendingRequestsresult)) {
      ?>
      <div class="well well-sm" style="margin: 0;"> 
      <br> 
      <b><?= $appointmentpending['plateNumber']; ?> <?= $appointmentpending['make']; ?> <?= $appointmentpending['series']; ?> <?= $appointmentpending['yearModel']; ?></b>
      <?php if ($appointmentpending['status'] == "Pending"){ ?>
        <div class="pull-right">
        <label for="Pending">Status:</label>
        <b style="color:orange;"><?= $appointmentpending['status']; ?></b>
        </div>
        <div class="row">
       <div class="col-sm-6 col-md-6">
        <br>
       <label for="desiredDate">Date:</label>
       <?= date('F d, Y', strtotime($appointmentpending['desiredDate'])); ?><br>
      </div>

      <div class="col-md-6 col-sm-6">
      <br><br><br>
      <div class="pull-right">
      <button type="button" class="btn" style="margin-top: 5px; width: 120px; color:white; background-color:#308ee0" data-toggle="modal" data-target="#pendingModal<?= $appointmentpending['id']; ?>"> More Details</button>
          
      <button type="button" class="btn" style="margin-top: 5px; width: 110px; color:black;" data-toggle="modal" data-target="#cancelpendingModal<?= $appointmentpending['id']; ?>" style="width: 105px;"><i class="far fa-calendar-times"></i> Cancel </button>
          

      </div> 
      <div id="pendingModal<?= $appointmentpending['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color:#308ee0; color: white;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="fas fa-concierge-bell"></i> Service Request</h5>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                <label for="created">Date Requested:</label><br>
                <?= date("F d, Y h:i A",strtotime($appointmentpending['created'])); ?>   
               <label for="otherServices">Other Services:</label><br>
                <?= $appointmentpending['otherServices']; ?>
                </div>
                <div class="col-md-6 col-sm-6">
               <label for="services">Services Requested:</label><br>
               <?= preg_replace("/[,]/" , "<br>",$appointmentpending['services']); ?>
                </div>
               </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
            </div>
          </div>
        </div>
      </div>
      <form action="requeststatus.php" method="POST">
      <div id="cancelpendingModal<?= $appointmentpending['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color: #D9534F;color: white;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="far fa-calendar-minus"></i> Cancel Appointment</h5>
            </div>
            <div class="modal-body">
                <input name="appointmentId" type="hidden" value="<?= $appointmentpending['id']; ?>">
                Are you sure you want to cancel your appointment on <b><?= date("F d, Y",strtotime($appointmentpending['desiredDate'])); ?></b> ?
      
            </div>
            <div class="modal-footer">
              <button type="submit" name="appointmentcancelPending" class="btn" style="background-color:#4caf50; color:white;"><i class="fas fa-check"></i> Yes</button>
              <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</button>
            </div>
          </div>
        </div>
      </div></form>
      </form>
      </div>
      </div>





      <?php
       }  elseif($appointmentpending['status'] == "Rescheduled"){
      ?>  
        <div class="pull-right">
        <label for="Pending">Status:</label>
        <b style="color:red;"><?= $appointmentpending['status']; ?></b>
        </div><hr style="padding: 0px;margin: 0px;">
        <div class="row">
       <div class="col-sm-6 col-md-6">
       <br>
       <label for="desiredDate">Date:</label>
       <?= date('F d, Y', strtotime($appointmentpending['desiredDate'])); ?><hr style="padding: 0px;margin: 0px;">
       <label for="desiredDate">Reason:</label>
       <?= $appointmentpending['reason']; ?><br><br>
      </div>
      <div class="col-md-6 col-sm-6">
      <br><br><br>
      <div class="pull-right">
      <div class="form-group">
      <?php if ($appointmentpending['adminDate'] == "admin") : ?>
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#approverescheduleModal<?= $appointmentpending['id']; ?>" style="width: 105px;"> <i class="far fa-calendar-check"></i> Approve </button>
      <?php endif ?>
      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#cancelrescheduleModal<?= $appointmentpending['id']; ?>" style="width: 105px;"> <i class="far fa-calendar-times"></i> Cancel </button> 
      </div>
      <div class="form-group">
      <div class="pull-right">
      <?php if ($appointmentpending['adminDate'] == "admin") : ?>
      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#rerescheduleModal<?= $appointmentpending['id']; ?>" style="background-color: #b80011;"> <i class="far fa-calendar-alt"></i> Reschedule</button>
      <?php endif ?>
      <button type="button" class="btn" style="margin-top: 5px; width: 120px; color:white; background-color:#308ee0;" data-toggle="modal" data-target="#rescheduleModal<?= $appointmentpending['id']; ?>"> More Details</button>
      </div>
      </div>      
      </div>

      <div id="rescheduleModal<?= $appointmentpending['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->

          <div class="modal-content">
            <div class="modal-header" style="background-color: #286090;color: white;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="fas fa-concierge-bell"></i> Service Request</h5>
            </div>
            <div class="modal-body">
            <div class="row">
             <div class="col-md-6 col-sm-6">
                <label for="created" style="color: #0066cc;">Date Requested:</label><br>
                <?= date("F d, Y h:i A",strtotime($appointmentpending['created'])); ?><br><br>

                <label for="services" style="color: #0066cc;">Services Requested:</label><br>
                <?= preg_replace("/[,]/" , "<br>",$appointmentpending['services']); ?> 
             </div>
             <div class="col-md-6 col-sm-6"> 
               <label for="otherServices" style="color: #0066cc;">Other Services:</label><br>
                <?= $appointmentpending['otherServices']; ?>
            </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
            </div>
          </div>
        </div>
      </div>

      <div id="rerescheduleModal<?= $appointmentpending['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <form action="requeststatus.php" method="POST">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #b80011;color: white;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="fas fa-concierge-bell"></i> Reschedule</h5>
            </div>
            <div class="modal-body">
                <label for="date">Desired date to be Rescheduled:</label>
                <input type="hidden" name="appointmentId" value="<?= $appointmentpending['id']; ?>">
                <b><input type="text" style="font-family: 'Poppins', sans-serif;cursor: pointer;" id="datepicker" name="date[]" class="form-control" readonly></b><br>
                <b><input type="text" style="font-family: 'Poppins', sans-serif;cursor: pointer;" id="datepicker2" name="date[]" class="form-control" readonly></b><br>
                <b><input type="text" style="font-family: 'Poppins', sans-serif;cursor: pointer;" id="datepicker3" name="date[]" class="form-control" readonly></b><br>

                <label for="reasonStated">Reason:</label><br>
                <textarea class="form-control" name="reasonStated" rows="5" ></textarea>   
            </div>
            <div class="modal-footer">
              <button type="submit" name="appointmentrescheduleRescheduled" class="btn btn-danger btn-sm" style="background-color: #b80011;"><i class="fas fa-times-circle"></i> Save</button>
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
            </div>
          </div>
          </form>
        </div>
      </div>

      <div id="cancelrescheduleModal<?= $appointmentpending['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <form action="requeststatus.php" method="POST">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #D9534F;color: white;">
               <input type="hidden" name="appointmentId" value="<?= $appointmentpending['id']; ?>">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="far fa-calendar-minus"></i> Cancel Appointment</h5>
            </div>
            <div class="modal-body">

                Are you sure you want to cancel your appointment on <b><?= date("F d, Y",strtotime($appointmentpending['desiredDate'])); ?></b> ?

            </div>
            <div class="modal-footer">
              <button type="submit" style="background-color:#4caf50; color:white;" name="appointmentrescheduleCancel" class="btn"><i class="fas fa-check"></i> Yes</button>
              <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</button>
            </div>
          </div>
          </form>
        </div>
      </div>



      <div id="approverescheduleModal<?= $appointmentpending['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color: #4caf50;color: white;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="fas fa-check-square"></i> Approve Date</h5>
            </div>
            <div class="modal-body">
              <form action="requeststatus.php" method="POST">
                <input type="hidden" name="appointmentId" value="<?= $appointmentpending['id']; ?>">
                <input type="hidden" name="adminDate" value="<?= $appointmentpending['adminDate']; ?>">
                <input type="hidden" name="plateNumber" value="<?= $appointmentpending['plateNumber']; ?>">
                <input type="hidden" name="make" value="<?= $appointmentpending['make']; ?>">
                <input type="hidden" name="series" value="<?= $appointmentpending['series']; ?>">
                <input type="hidden" name="yearModel" value="<?= $appointmentpending['yearModel']; ?>">
                <label for="created" style="color: #0066cc;">Date:</label><br>
                <hr style="padding: 0px;margin: 0px;">
                <?php $dates =explode("|", $appointmentpending['rescheduledate']); ?>
                <?php
                for($i =0; $i < count($dates); $i++){
                 echo '<input type="radio" name="date" value='.$dates[$i].'>'.date("F d, Y",strtotime($dates[$i])).'<br>';
                }
                ?>
                  <h5>Would you like to choose this date for your appointment?</h5>
                <br>
            </div>
            <div class="modal-footer">
              <button type="submit" style="background-color:#4caf50; color:white;" class="btn" name="appointmentAccepted" value="<?= $appointmentpending['id']; ?>" ><i class="fas fa-check"></i> Yes</button>
              <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-ban"></i> Cancel</button>
             </form>
            </div>
          </div>
        </div>
      </div>


      </div>
      </div>
      <?php
      }
      ?>
      </div>
      <br>
      <?php 
         }
        } else {
          echo '<ol class="breadcrumb" style = "text-align: center;">
              <li class="breadcrumb-item active" aria-current="page">NO PENDING REQUESTS</li>
            </ol>';
        }
      ?>
    </div>
    </div>




    <div class="panel panel-default" id="headings">
      <div class="panel-heading" style="background-color:#4caf50;color: white; font-size:18px"><i class="fas fa-calendar-check"></i> Accepted Vehicles</div>
      <div class="panel-body" id="serviceDisplay" style="overflow-y: auto;height: 230px;">
      <?php
       if ($acceptedRequestsresultCheck > 0) {
        while ($appointmentaccepted = mysqli_fetch_assoc($acceptedRequestsresult)) {
      ?>
      <div class="well well-sm" style="margin: 0;"> 
      <br> 
      <b><?= $appointmentaccepted['plateNumber']; ?> <?= $appointmentaccepted['make']; ?> <?= $appointmentaccepted['series']; ?> <?= $appointmentaccepted['yearModel']; ?></b>
      <div class="pull-right">
      <label for="Pending">Status:</label>
      <b style="color:green;"><?= $appointmentaccepted['status']; ?></b>
      </div>
     <hr style="padding-bottom: 10px;margin: 0px;">
       <div class="row">
       <div class="col-sm-6 col-md-6">
       <label for="desiredDate">Date:</label>
       <?= date('F d, Y', strtotime($appointmentaccepted['desiredDate'])); ?><hr style="padding: 0px;margin: 0px;">
       <label for="created">Date Accepted:</label>
       <?= date("F d, Y h:i A",strtotime($appointmentaccepted['created'])); ?>
      </div>
      <br>
      <br>
      <div class="col-md-6 col-sm-6">
      <div class="pull-right">
      <div class="form-group">
         
      <button type="button" class="btn" style="margin-top: 5px; width: 110px; color:white; background-color:#308ee0" data-toggle="modal" data-target="#acceptedcheduleModal<?= $appointmentaccepted['id']; ?>"> More Details</button>
          
      <button type="button" class="btn" data-toggle="modal" style="margin-top: 5px; width: 110px; color:black;" data-target="#cancelrerescheduleModal<?= $appointmentaccepted['id']; ?>" style="width: 105px;"> <i class="far fa-calendar-times"></i> Cancel</button>
          
      </div>
      <div class="form-group">
      
      <button type="button" class="btn" style="margin-top: 5px; width: 120px; color:white; background-color:#ffaf00" data-toggle="modal" data-target="#acceptedrerescheduleModal<?= $appointmentaccepted['id']; ?>" style="background-color: #b80011;"> <i class="far fa-calendar-alt"></i>       Reschedule</button>
      </div>
      </div>
      </div>

      <div id="cancelrerescheduleModal<?= $appointmentaccepted['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
        <form method="post" action="requeststatus.php">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #D9534F;color: white;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="far fa-calendar-minus"></i> Cancel Appointment</h5>
            </div>
            <div class="modal-body">
                <input type="hidden" name="appointmentId" value="<?= $appointmentaccepted['id']; ?>">
                Are you sure you want to cancel your appointment on <b><?= date("F d, Y",strtotime($appointmentaccepted['desiredDate'])); ?></b> ? 
            </div>

            <div class="modal-footer">
            <button type="submit" style="background-color:#4caf50; color:white;" name="appointmentcancelAccepted" class="btn"><i class="fas fa-check"></i> Yes</button>
            <button type="button" class="btn" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</button>
            </div>
          </div>
        </form>
        </div>
      
      </div>
      <div id="acceptedcheduleModal<?= $appointmentaccepted['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color: #286090;color: white;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="fas fa-concierge-bell"></i> Service Request</h5>
            </div>
            <div class="modal-body">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                <label for="created" style="color: #0066cc;">Date Accepted:</label><br>
                <?= date("F d, Y h:i A",strtotime($appointmentaccepted['created'])); ?><br><br>   
               <label for="services" style="color: #0066cc;">Services Requested:</label><br>
               <?= preg_replace("/[,]/" , "<br>",$appointmentaccepted['services']); ?>
                </div>
                <div class="col-md-6 col-sm-6">
                <label for="otherServices" style="color: #0066cc;">Other Services:</label><br>
                <?= $appointmentaccepted['otherServices']; ?>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
            </div>
          </div>
        </div>
      </div>

      <div id="acceptedrerescheduleModal<?= $appointmentaccepted['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <form method="post" action="requeststatus.php">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #b80011;color: white;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="fas fa-concierge-bell"></i> Reschedule</h5>
            </div>
            <div class="modal-body">
                <label for="date">Desired date to be Rescheduled:</label>
                <input type="hidden" name="appointmentId" value="<?= $appointmentaccepted['id']; ?>">
                <b><input type="text" style="font-family: 'Poppins', sans-serif;cursor: pointer;" id="datepicker4" name="date[]" class="form-control" readonly></b><br>
                <b><input type="text" style="font-family: 'Poppins', sans-serif;cursor: pointer;" id="datepicker5" name="date[]" class="form-control" readonly></b><br>
                <b><input type="text" style="font-family: 'Poppins', sans-serif;cursor: pointer;" id="datepicker6" name="date[]" class="form-control" readonly></b><br>
                <label for="reasonStated">Reason:</label><br>
                <textarea class="form-control" name="reasonStated" rows="5"></textarea>
            </div>
            <div class="modal-footer">
              <button type="submit" name="appointmentrescheduleAccepted" class="btn btn-danger btn-sm" style="background-color: #b80011;"><i class="fas fa-times-circle"></i> Save</button>
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
            </div>
          </div>
        </div>
          </form>
      </div>
      </div>
      </div>
      <br>
      <?php 
         }
        } else {
      ?>
      <div class="well well-sm" style="margin: 0;text-align: center;">
        NO ACCEPTED REQUESTS
      </div>
      <?php 
        }  
      ?>

    </div>
    </div>
    </div>

    <div class="col-md-6 col-sm-6">
    <div class="panel panel-default" id="headings">
      <div class="panel-heading" style="background-color: #b80011;color: white; font-size:18px"><i class="fas fa-times-circle"></i> Declined Requests</div>
      <div class="panel-body" id="serviceDisplay" style="overflow-y: auto;height: 500px;">   
      <?php
       if ($declinedRequestsresultCheck > 0) {
        while ($appointmentdeclined = mysqli_fetch_assoc($declinedRequestsresult)) {
      ?>
      <div class="well well-sm" style="margin: 0;">
      <div class="form-group">
      <form method="POST" action="process/server.php">
      <input type="hidden" name="appointmentId" value="<?= $appointmentdeclined['id']; ?>">
      <input type="hidden" name="plateNumber" value="<?= $appointmentdeclined['plateNumber']; ?>">
      <input type="hidden" name="make" value="<?= $appointmentdeclined['make']; ?>">
      <input type="hidden" name="series" value="<?= $appointmentdeclined['series']; ?>">
      <input type="hidden" name="yearModel" value="<?= $appointmentdeclined['yearModel']; ?>">
      <button type="submit" class="close" name="appointmentDelete">&times;</button>
      </form> 
      </div> 
      <b><?= $appointmentdeclined['plateNumber']; ?> <?= $appointmentdeclined['make']; ?> <?= $appointmentdeclined['series']; ?> <?= $appointmentdeclined['yearModel']; ?></b>
      <div class="pull-right">
      <label for="Declined">Status:</label>
      <b style="color:red;"><?= $appointmentdeclined['status']; ?></b>
      </div>
      <hr style="padding-bottom: 10px;margin: 0px;">
       <div class="row">
       <div class="col-sm-6 col-md-6">
       <label for="reason">Reason:</label>
       <?= $appointmentdeclined['reason']; ?><hr style="padding: 0px;margin: 0px;">
       <label for="created">Date Requested:</label>
       <?= date("m/d/y h:i A",strtotime($appointmentdeclined['created'])); ?>
      </div>
      <div class="col-md-6 col-sm-6">
      <br>
      <br>
      <div class="pull-right">
      <button type="button" class="btn" style="margin-top: 5px; width: 120px; color:white; background-color:#308ee0" data-toggle="modal" data-target="#declinedcheduleModal<?= $appointmentdeclined['id']; ?>"> More Details</button>

      </div> 
      </div>
      <div id="declinedcheduleModal<?= $appointmentdeclined['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color: #308ee0; color: white;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><i class="fas fa-concierge-bell"></i> Service Request</h5>
            </div>
            <div class="modal-body">
                <label for="created">Date Requested:</label>
                <?= date("F d, Y h:i A",strtotime($appointmentdeclined['created'])); ?><hr style="padding: 0px;margin: 0px;">
                <label for="services">Services Requested:</label><br>
                <?= preg_replace("/[,]/" , "<br>",$appointmentdeclined['services']); ?><hr style="padding: 0px;margin: 0px;">   
               <label for="otherServices">Other Services:</label>
                <?= $appointmentdeclined['otherServices']; ?><hr style="padding: 0px;margin: 0px;">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      <br>
      <?php 
         }
       }else {
        echo '<ol class="breadcrumb" style="text-align: center;"> 
              <li class="breadcrumb-item active" aria-current="page">NO DECLINED REQUESTS</li>
            </ol>';
        }
      ?> 
    
    </div>
    </div>
    </div>
    </div>
  </div>
  </div>

    <!-- END OF JUMBOTRON -->
 

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
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
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
     <script src="js/notif.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/script.js"></script>
     

</body>
</html>
