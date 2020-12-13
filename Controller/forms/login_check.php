<?php
session_start();

$conn = mysqli_connect("localhost","root","","oapa");

if(isset($_POST["submit"])){

  $phone = $_POST["phone"];
  $pin = $_POST["pin"];

  $sql = mysqli_query($conn,"SELECT * FROM user WHERE phone = '".$phone."' AND pin = '".$pin."'") or die(mysqli_error($conn));

  $rw = mysqli_fetch_array($sql);
 

  if(count($rw)>0){
    $_SESSION["uname"] = $rw['id'];
    header("Location:location.php");
    exit();
  }
  else{
    header("Location:login.php?chk=false");
    exit();
  }
}


?>