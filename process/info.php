<?php
    $id = $_SESSION['id'];
    $pdo = new PDO('mysql:host=localhost;dbname=eas', 'eas', 'eas2018');
    $result = $pdo->query("select personalId from personalinfo where user_id = '$id'")->fetchColumn(); 
    $sql = "SELECT * FROM vehicles where personalId = '$result'";
    $_SESSION['personalId'] = $result;
    $stmt = $pdo->prepare($sql); 
    $stmt->execute(); 
    $vehicles = $stmt->fetchAll();  

 
?>
