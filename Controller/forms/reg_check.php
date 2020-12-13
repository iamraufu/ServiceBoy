<?php
$name = $_POST['name'];
$id = $_POST['id'];
$phone = $_POST['phone'];
$pin = $_POST['pin'];
$gender = $_POST['gender'];
$prof = $_POST['prof'];

if (!empty($name) || !empty($id) || !empty($phone) || !empty($pin) || !empty($gender) || !empty($prof)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "oapa";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT phone From user Where phone = ? Limit 1";
     $INSERT = "INSERT Into user (name, id, phone, pin, gender, prof) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $phone);
     $stmt->execute();
     $stmt->bind_result($phone);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssiss", $name, $id, $phone, $pin, $gender, $prof);
      $stmt->execute();
      header("Location:reg_con.php");
      exit();
     } else {
      echo  header("Location:registration.php?chk=false");
    exit();
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>