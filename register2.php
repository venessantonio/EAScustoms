<?php include('process/process.php'); ?>
<?php include('process/database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>EAS Customs - Register</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" href="images/Logo.png">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/all.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
    
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main2.css" rel="stylesheet" media="all">
    
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

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
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                        <span class="email-icon"><i class="fas fa-user-circle"></i> <a href="login.php">LOGIN</a></span>
                        <span class="email-icon"><i class="fas fa-id-card"></i> <a href="register.php">REGISTER</a></span>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i>  09257196568 / 09304992021</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Sat)</span>
                         <span class="email-icon"><i class="fab fa-facebook"></i> <a href="#">EAS Customs / @eascustoms75</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                     <img src="images/Logo.png" class="logoo" alt="logo" />
                     
                    <a href="index.php" class="navbar-brand">EAS CUSTOMS</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">Services</a></li>
                         <li><a href="#team" class="smoothScroll">About Us</a></li>
                         <li><a href="#news" class="smoothScroll">Contact Us</a></li>
                         <li><a href="#google-map" class="smoothScroll">Reviews</a></li>
                         <li class="appointment-btn"><a href="login.php?loginrequired=1">Make an appointment</a></li>
                    </ul>
               </div>

          </div>
     </section>

   
   
     <!-- REGISTER PAGE -->
        <div class="page-wrapper bg-gra-01 p-t-100 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">

                    
                    <form method="POST" id="register_form">
                    <table class="reg">       
                          <tr>
                               <td>
                                    <h2 class="title">Personal Info</h2>
                                  <div class="input-group">
                                      <input class="input--style-3" type="text" placeholder="First Name" name="firstname" id="firstName" required>
                                      <div id="firstName_msg" style="display: none; color: red;font-size: 0.9em;">First name is empty</div>
                                  </div>
                               </td>
                               <td>
                                   <h2 class="title">Vehicle Info</h2>
                        
                                  <div class="input-group">
                                      <input class="input--style-3" type="text" placeholder="Enter Plate Number" name="plateNumber" id="plateNumber">
                                      <div id="plateNumber_msg" style="display: none; color: red;font-size: 0.9em;">Plate Number is empty</div>
                                      <div id="plateNumberpat_msg" style="display: none; color: red;font-size: 0.9em"> Wrong Plate Number format.</div>
                                      <span style="font-size: 0.9em;"></span>
                                  </div>
                               </td>
                          </tr>
                          <tr>
                             <td>
                                 <div class="input-group">
                                      <input class="input--style-3" type="text" placeholder="Middle Name" name="middlename" id="middleName">
                                      <div id="middleName_msg" style="display: none; color: red;font-size: 0.9em">Middle name is empty</div>
                                   </div>
                             </td>
                             <td>
                               <div class="input-group">
                                 <input class="input--style-3" type="text" placeholder="Enter Your Make" name="plateNumber" aria-describedby="make" name="make">
                                 <div id="make_msg" style="display: none; color: red;font-size: 0.9em;">Make is empty</div>
                                 <small id="make" class="form-text text-muted">Eg. Toyota, Mitsubishi, Honda etc.</small>
                              </div>
                             </td>     
                         </tr>
                         <tr>
                              <td>
                                   <div class="input-group">
                                      <input class="input--style-3" type="text" placeholder="Last Name" name="lastname" id="lastName">
                                  <div id="lastName_msg" style="display: none; color: red;font-size: 0.9em">Last name is empty</div>
                                  </div>
                              </td>
                              <td>
                                  <div class="form-group">
                                   <select name="make" id="make" class="form-control action" onclick="myFunction()" style="background-color: black;color: gray;"><
                                    <option value="">Select Make</option>
                                    <?php echo $make; ?>
                                   </select><br>
                                   <select name="series" id="series" class="form-control action" style="background-color: black;color: gray;">
                                    <option value="">Select Series</option>
                                   </select>
                                   <div class="pull-left" style="font-size: 9px;">Other Specific Make<input type="checkbox" name="otherMake" id="otherMake"></div>
                                   <input type="text" class="form-control" name="othermake" id="others" placeholder="Enter Make" style="display: none;background-color: black;color: gray;"><br>
                                   <input type="text" class="form-control" name="otherseries" id="otherseries" placeholder="Enter Series" style="display: none;background-color: black;color: gray;">
                                  </div>

                              </td>
                         </tr>
                         <tr>
                              <td>
                             <div class="input-group">
                                 <input class="input--style-3" type="text" placeholder="Username" name="username" id="username" pattern=".{8,}" title='must contain 6 or more characters' required>
                                 <small id="username" class="form-text text-muted"> Must contain 8-12 characters.</small><br>
                                 <div id="username_msg" style="display: none; color: red;font-size: 0.9em">Username is empty</div>
                                 <div id="usernamepat_msg" style="display: none; color: red;font-size: 0.9em"> Must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter.</div>
                                 <span style="font-size: 0.9em"></span>
                             </div>
                              </td>  
                              <td>
                                   <div class="input-group">
                                      <input class="input--style-3" type="number" placeholder="Year Model" name="plateNumber" name="yearModel" id="yearModel">
                                      <div id="yearModel_msg" style="display: none; color: red;font-size: 0.9em;">Year Model is empty</div>
                                  </div>
                              </td>
                         </tr>
                         
                         <tr>
                              <td>
                         <div class="input-group">
                                 <input class="input--style-3" type="text" placeholder="Address" name="address" id="address">
                             <div id="address_msg" style="display: none; color: red;font-size: 0.9em">Address is empty</div>
                             </div>
                              </td>
                         </tr>
                         <tr>
                               <td>
                                   <div class="input-group">
                                      <input class="input--style-3" type="text" placeholder="Color" name="plateNumber" name="color" id="color">
                                      <div id="color_msg" style="display: none; color: red;font-size: 0.9em;">Color is empty</div>
                                   </div> 
                              </td>
                              <td>
                                  <div class="p-t-10">
                                      <button class="btn btn--pill btn--green" type="submit" name="register" id="reg_btn" style="background-color: #b80011; ">Register</button>
                                  </div>
                              </td>
                         </tr>
                         
                         <tr>
                              <td>
                                     <div class="input-group">
                                      <input class="input--style-3" type="text" placeholder="Contact Number" name="contactNumber" id="contactNumber">
                                      <div id="contactNumber_msg" style="display: none; color: red;font-size: 0.9em">Contact Number is empty</div>
                                      <span style="font-size: 0.9em"></span>
                                  </div>  
                              </td>
                         </tr>
                        
                         <tr>
                              <td>
                                  <div class="input-group">
                                      <input class="input--style-3" type="email" placeholder="Email" name="Email" id="email">
                                      <div id="email_msg" style="display: none; color: red;font-size: 0.9em">email is empty</div>
                                      <span style="font-size: 0.9em"></span>
                                      <div id="emailpat_msg" style="display: none; color: red;font-size: 0.9em"> Invalid Email.</div>
                                  </div>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                 <div class="input-group">
                                      <input class="input--style-3" type="password" placeholder="Password" name="password" id="password" title="must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter">
                                      <div id="passwordpat_msg" style="display: none; color: red;font-size: 0.9em"> Must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter.</div>
                                      <div id="password_msg" style="display: none; color: red;font-size: 0.9em">password is empty</div>
                                      <span style="font-size: 0.9em"></span>
                                  </div> 
                              </td>
                         </tr>
                         <tr>
                              <td>
                                  <div class="input-group">
                                      <input class="input--style-3" type="password" placeholder="Confirm Password" id="confirm_password">
                                      <span id="message" style="font-size: 0.9em"></span>
                                  </div>
                              </td>
                         </tr>
                         
                     </table>
                    </form>
                    </div>
                    </div>
                    
                    
                </div>
            </div>
     <!-- FOOTER -->
    <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 09257196568 / 09304992021</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">eascustoms@yahoo.com</a></p>
                                   <p><i class="fa fa-facebook-square" aria-hidden="true"></i> <a href="#">EAS Customs / @eascustoms75</a>
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
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/script.js"></script>
     <script src="js/makeseries"></script>

</body>
</html>