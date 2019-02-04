<?php
session_start();
include_once 'databaseconnect.php';
if(isset($_POST["view"]))
{
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE appointments SET notification=1 WHERE notification=0";
  mysqli_query($db, $update_query);
 }
 $query = "SELECT appointments.status AS status, vehicles.make AS make, vehicles.series AS series, vehicles.yearModel AS yearModel, appointments.created as created, vehicles.plateNumber as plateNumber FROM appointments JOIN vehicles ON appointments.vehicleId = vehicles.id ORDER BY created DESC LIMIT 10";
 $result = mysqli_query($db, $query);
 $output = '';

 if(mysqli_num_rows($result) > 0)
 {

  while($row = mysqli_fetch_array($result))
  { 
   $output .=
   '
   <li>
    <a class = "dropdown-item" href="'.$row["status"].'req.php?status='.$row["status"].'">
     <strong>Vehicle '.$row["plateNumber"].' '.$row["make"].' '.$row["series"].' '.$row["yearModel"].' </strong><br>
     <em>Status is now '.$row["status"].' check it here </em><br>
     <b>'.date("m/d/y h:i A",strtotime($row["created"])).'</b>
    </a>
   </li>
   <li class="divider"></li>
   ';
  } 
}
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query2 = "SELECT * FROM appointments WHERE notification=0";
 $result2 = mysqli_query($db, $query2);
 $count = mysqli_num_rows($result2);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}

?>