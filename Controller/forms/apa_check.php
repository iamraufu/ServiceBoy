<?php
if(isset($_POST["maidsubmit"])){
    $maidname = $_POST['maidname'];
$maidrate = $_POST['maidrate'];

if (!empty($maidname) || !empty($maidrate)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "oapa";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT maidid From maid Where maidid = ? Limit 1";
     $INSERT = "INSERT Into maid (maidname, maidrate) values(?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $maidid);
     $stmt->execute();
     $stmt->bind_result($maidid);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("si", $maidname, $maidrate);
      $stmt->execute();
      echo  header("Location:apa.php?chk=false");
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
}
elseif(isset($_POST["babysubmit"])){
$babyname = $_POST['babyname'];
$babyrate = $_POST['babyrate'];

if (!empty($babyname) || !empty($babyrate)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "oapa";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT babyid From baby Where babyid = ? Limit 1";
     $INSERT = "INSERT Into baby (babyname, babyrate) values(?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $babyid);
     $stmt->execute();
     $stmt->bind_result($babyid);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("si", $babyname, $babyrate);
      $stmt->execute();
      echo  header("Location:apa.php?chk=false");
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
}


?>