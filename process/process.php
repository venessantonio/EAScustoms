<?php 
  extract($_POST);
 
  include 'process/databaseconnect.php';
  if (isset($_POST['username_check'])) {
    $username = $_POST['username'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }
  if (isset($_POST['email_check'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM personalinfo WHERE email='$email'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }
  if (isset($_POST['plateNumber_check'])) {
    $plateNumber = $_POST['plateNumber'];
    $sql = "SELECT * FROM vehicles WHERE plateNumber='$plateNumber'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }

  if (isset($_POST['existingpassword_check'])) {
    $existingpassword = password_hash($_POST['password'], PASSWORD_DEFAULT)
    $sql1 = "SELECT personalinfo.user_id as user_id, users.id as id, users.password as password FROM personalinfo join users on personalinfo.user_id = users.id WHERE users.password='$existingpassword'";

    $existingpassword2 = password_verify('rasmuslerdorf', $hash);
    $sql = "SELECT * FROM users WHERE password='$existingpassword'";
    $results = mysqli_query($db, $sql1);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }

  if (isset($_POST['contactNumber_check'])) {
    $contactNumber = $_POST['contactNumber'];
    $sql = "SELECT * FROM personalinfo WHERE mobileNumber='$contactNumber'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }

  if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $contactNumber = $_POST['contactNumber'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $plateNumber = $_POST['plateNumber'];
    $make = $_POST['make'];
    $series = $_POST['series'];
    $yearModel = $_POST['yearModel'];
    $color = $_POST['color'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "exists";  
      exit();
    }else{
      $query = "INSERT INTO users (username, password , status , type) 
            VALUES ('$username', '".password_hash($_POST['password'], PASSWORD_DEFAULT)."' ,'Active', 'client')";
     $result1 = mysqli_query($db, $query);
     $query2 = "INSERT INTO personalinfo (user_id, firstName, middleName, lastName, address, email, mobileNumber) VALUES (LAST_INSERT_ID(),'$firstName', '$middleName', '$lastName', '$address', '$email', '$contactNumber')";
     $result2 = mysqli_query($db, $query2);
     $query3 = "INSERT INTO vehicles (personalid, plateNumber, yearModel, make, series, color) VALUES (LAST_INSERT_ID(), '$plateNumber', '$yearModel', '$make', '$series', '$color')";
     $result3 = mysqli_query($db, $query3);
      header('location: login.php?success=done');
      exit(); 
    }
  }

?>