<?php

$conn = mysqli_connect("localhost","root","","oapa");

if(isset($_POST["submit"])){

  $id = $_POST["id"];
  $pin = $_POST["pin"];

  $sql = mysqli_query($conn,"SELECT count(*) as total FROM admin WHERE id = '".$id."' AND pin = '".$pin."'") or die(mysqli_error($conn));

  $rw = mysqli_fetch_array($sql);

  if($rw['total']>0){
    header("Location:admin.php");
    exit();
  }
  else{
    header("Location:admin_login.php?chk=false");
    exit();
  }
}


?>