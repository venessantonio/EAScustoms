<?php
session_start();
include 'process/authhome.php';
include 'sendsms.php';
include 'threedayssms.php';
include 'onday.php';
include 'process/databaseconnect.php'





?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>EAS Customs</title>
     <link rel="icon" href="images/Logo.png">
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" href="images/Logo.png">
     <link rel="stylesheet" href="css/all.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/all.css">
     
    
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/index-style.css">

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
                        <span class="email-icon"><i class="fas fa-user-circle" aria-hidden="true"></i> <a href="login.php">LOGIN</a></span>
                        <span class="email-icon"><i class="fas fa-id-card" aria-hidden="true"></i> <a href="register.php">REGISTER</a></span>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i>  +639257196568 / +639304992021</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 09:00 AM - 05:00 PM (Mon-Sat)</span>
                         <span class="email-icon"><i class="fab fa-facebook-square"></i> <a href="#">EAS Customs / @eascustoms75</a></span>
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

                    <a href="index.php" class="navbar-brand"> EAS CUSTOMS</a>


               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#services" class="smoothScroll">Services</a></li>
                         <li><a href="#fc" class="smoothScroll">Featured Cars</a></li>
                         <li><a href="#team" class="smoothScroll">The Team</a></li>
                         <li><a href="#feedback" class="smoothScroll">Feedback</a></li>
                         <li><a href="#google-map" class="smoothScroll">Find Us</a></li>
                         <li class="appointment-btn"><a href="appointment.php">Make an appointment</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Let's make the most of your car</h3>
                                             <h1>Fuels Passion Beyond Full Throttle</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Team</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Find out more about us.</h3>
                                             <h1>What is EAS Customs?</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Find out about what we do.</h3>
                                             <h1>Services Beyond Expectations</h1>
                                             <a href="#services" class="section-btn btn btn-default btn-blue smoothScroll">See our Services</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="about-info">
                              <p class="wow fadeInUp" data-wow-delay="0.6s" style="text-align: center; font-size:50px; color: black; font-weight:bold; letter-spacing: 5px;">Welcome to EAS Customs</p>
                             <br>
                             <br>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p style="text-align: justify;text-justify: inter-word; font-size:17px; color:#4d4d4d;">EAS customs is a family-owned business located at #08 Regidor St., Pacdal Baguio City, Benguet. The shop was formerly known as “Toot’s Auto Repair Shop”. The business began as a small-time automotive repair shop in the year 2002. The shop catered mechanical works and was only using the garage of the owner’s house. “Toot’s Auto Repair Shop” was changed to “Enriques A. Simeon Auto Repair Shop” which was named after the owner of the company.</p>
                                  <br>
                                   <p style="text-align: justify;text-justify: inter-word; font-size:17px; color:#4d4d4d;">The shop is one of the few auto repair shops that specializes in American and European-made automobiles (eg. BMW, Opel, Ford, Mini Cooper, Mercedes Benz, Chevrolet, and Cadillac).</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                              </figure>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>

     <!-- SERVICES -->
     <section id="services" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2 style="letter-spacing: 5px;"> Services</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='body_paint'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Body Paint</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>
                              
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='body_repair'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Body Repair</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='customize'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Customize</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>
                         </div>
                    </div>

               </div>
          </div>

          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='electrical'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Electrical</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='maintenance'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Maintenance</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>
                              
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='mechanical'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Mechanical</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>
                         </div>
                         <br>
                        <br>
                        <br>
                    </div>

               </div>
          </div>
     </section>

     <!-- LATEST CARS -->
     <section id="fc" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                             <br>
                             <br>
                             <h2 style="letter-spacing: 5px;"> Latest Cars</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='first'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <span>'.date('F j, Y',strtotime($row['date'])).'</span>
                            </div>
                                ';
                            }
                        ?>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='second'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <span>'.date('F j, Y',strtotime($row['date'])).'</span>
                            </div>
                                ';
                            }
                        ?>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='third'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style="width:100%; height:32%;" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <span>'.date('F j, Y',strtotime($row['date'])).'</span>
                            </div>
                                ';
                            }
                        ?>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row"  >

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s" style="letter-spacing: 5px;"> Our Team</h2>
                             <br>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='manager'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style=height:63.5% width:100%" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Manager</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='assi_man'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style=height:63.5% width:100%" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Assistant Manager</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                         <?php
                            $query = "SELECT * FROM `contents` WHERE `img_name` ='supervisor'";
                            $result = mysqli_query($db, $query);
                            while($row = mysqli_fetch_array($result)){
                            echo '
                            <tr>
                                <td>
                                <img class="img-responsive" style=height:63.5% width:100%" src ="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>
                                </td>
                            <tr>
                            <div class="news-info">
                                   <h3>Supervisor</h3>
                                   <p>'.$row['description'].'</p>
                                   
                            </div>
                                ';
                            }
                        ?>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>

     <!-- FEEDBACKS -->
     <section id="feedback" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="process/feedback.php">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2 style="letter-spacing: 5px;">Feedback</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">

                             </div>
                             
                             
                        </form>
                    </div>
                   
                    <div class="col-md-6 col-sm-6">
                         <img src="" class="img-responsive" alt="">
                    </div>

               </div>
          </div>
     </section>
    
     <!-- FEEDBACKS -->
     <section id="feedback" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="process/feedback.php">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2 style="letter-spacing: 5px;">We love to hear from you</h2>
                              </div>
                             
                                <div class="wow fadeInUp" data-wow-delay="0.8s">
                                    <table>
                                        <tr>
                                            <div class="col-md-12 col-sm-12">
                                                <label for="telephone">Name (Optional)</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                            </div>
                                        </tr>
                                        
                                        <tr>
                                            <div class="col-md-6 col-sm-6">
                                                <br>
                                                <label for="email">Email (Optional)</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                           </div>
                                        </tr>
                                        <tr>
                                           <div class="col-md-6 col-sm-6">
                                                <br>
                                                <label for="telephone">Phone Number (Optional)</label>
                                                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
                                           </div>
                                        </tr>                       
                                        
                                  
                                        <tr>
                                            <div class="col-md-12 col-sm-12">
                                             <br>
                                            <label for="Message">Message</label>
                                                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                                <br>
                                                <button type="submit" class="form-control" id="cf-submit" name="submit" style="background:#333333; color:white;">Submit</button>
                                                <br>
                                                <br>
                                                <br>
                                            </div>
                                        </tr>
                                    </table>
                             </div>
                        </form>
                    </div>
                   
                    <div class="col-md-6 col-sm-6">
                         <img src="" class="img-responsive" alt="">
                    </div>

               </div>
          </div>
     </section>


     <!-- GOOGLE MAP -->
     <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
  
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1913.5731268645245!2d120.61448442071841!3d16.417396917170695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391a155e4185ff3%3A0xcab1184b836ba6ac!2sEAS+Customs!5e0!3m2!1sen!2sph!4v1544168498115" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>           


     <!-- FOOTER -->
<footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <p class="wow fadeInUp" data-wow-delay="0.4s" style="font-size:30px; color:#404040; font-weight: bold; letter-spacing: 2px;">Contact Info</p>
                              <br>
                              <div class="contact-info">
                                   <p><i class="fas fa-phone" style="font-size:20px;color:#404040"></i> &nbsp;&nbsp;+639257196568 / +639304992021</p>
                                   <p><i class="fas fa-envelope" style="font-size:20px;color:#404040"></i> <a href="#"> &nbsp;&nbsp;eascustoms@yahoo.com</a></p>
                                   <p><i class="fab fa-facebook-square" style="font-size:20px;color:#404040"></i> <a href="#"> &nbsp;&nbsp;EAS Customs / @eascustoms75</a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                            <p class="wow fadeInUp" data-wow-delay="0.4s" style="font-size:30px; color:#404040; font-weight: bold; letter-spacing: 2px;">Opening Hours</p>
                            <br> 
                            <div class="contact-info">
                               <p><i class="fas fa-calendar-check" style="font-size:20px;color:#404040"></i> &nbsp;&nbsp;Monday - Saturday <span style="font-weight:bold;">09:00 AM - 05:00 PM</span></p>
                               <p><i class="fas fa-calendar-times" style="font-size:20px;color:#404040"></i> &nbsp;&nbsp;Sunday <span style="font-weight:bold;">Closed</span></p>
                               <p><i class="fas fa-clock" style="font-size:20px;color:#404040"></i> &nbsp;&nbsp;GMT+8

                            </div> 

                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <p style="font-size:15px; color:#404040;">&copy; Copyright 2018. All Rights Reserved.</p>
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

</body>
</html>