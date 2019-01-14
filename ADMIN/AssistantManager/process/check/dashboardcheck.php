<?php
  $connection = new mysqli("localhost","eas","","eas");//make database connectio><n
// <?php require "../require/dataconf.php";>
//Updating Overdue Appointment Request
$checkDashboard = $connection->prepare("SELECT COUNT(*) as count FROM `appointments` WHERE status = 'Accepted'");
if($checkDashboard->execute()){
  $data = $checkDashboard->get_result();
  $box1 = $data->fetch_assoc();
}

$checkDashboard = $connection->prepare("SELECT COUNT(*) as count FROM `appointments` WHERE status = 'In-progress'");
if($checkDashboard->execute()){
  $data = $checkDashboard->get_result();
  $box4 = $data->fetch_assoc();
}

$checkDashboard = $connection->prepare("SELECT COUNT(*) as count FROM `appointments` WHERE status = 'Done'");
if($checkDashboard->execute()){
  $data = $checkDashboard->get_result();
  $box3 = $data->fetch_assoc();
}

$checkDashboard = $connection->prepare("SELECT COUNT(*) as count FROM `appointments` WHERE status = 'Pending'");
if($checkDashboard->execute()){
  $data = $checkDashboard->get_result();
  $box2 = $data->fetch_assoc();
}



?>
