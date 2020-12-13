<?php
 include 'conn.php'; 
$name = "";
$rate = 0;
  $smId = 0; 
   $sId = 0;
  
  if(isset($_GET['selectmId'])){
    $smId = $_GET['selectmId'];
    
 $q = "select * from maid where maidid = '$smId' ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
   $name = $res['maidname'];
   $rate = $res['maidrate'];
 }
  }
  elseif(isset($_GET['selectId'])){
    $sId = $_GET['selectId'];
    
 $q = "select * from baby where babyid = '$sId' ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
   $name = $res['babyname'];
   $rate = $res['babyrate'];
 }
  }
  $charge = 10;
  $total = $rate*0.1+$rate;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/serviceboy/View/styles/selection.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

    <title>Selection</title>
  </head>

  <body>
  <link rel="shortcut icon" type="image/x-icon" href="http://localhost/serviceboy/View/logo2.png" />
      <div class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#"
            ><img src="http://localhost/serviceboy/View/logo2.png"  height = 100px width=50% alt=""
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse nav justify-content-end"
            id="navbarNav"
          >
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#"
                  >Home <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#service">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
              <li class="nav-item">
                            <a class="nav-link" id="" href="#login"><b>Login/Register<b></a>
                        </li>
                        <li class="nav-item">
                <a class="nav-link btn btn-danger" id="logout-btn" href="logout.php"
                  ><b>Logout</b></a
                ></li>
            </ul>
          </div>
        </nav>
      </div>

      <h1>
        Service Boy Selection Form
      </h1>

      <div class="row">

        <div class="col-md-4 d-flex justify-content-around ">
          <div id="card-bg" class="card text-center">
            <div class="card-header">
              <label for="">Maids</label><br />
            </div>

            <div class="card-body d-flex justify-content-around">
      <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr id="tr_head"class=" text-white text-center">
 
 
 <th> Maid Name </th>
 <th> Hourley Rate </th>
 <th> Selection</th>

 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from maid ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr id="tr_body" class="text-center">
 <td> <?php echo $res['maidname'];  ?> </td>
 <td> <?php echo $res['maidrate'];  ?> </td>
 <td> <button class="btn-primary btn"> <a href="selection.php?selectmId=<?php 
 echo $res['maidid']; 
 ?>" class="text-white"> Select </a>  </button> </td>

 </tr>

 </tr>

 <?php 
 }
  ?>
 
 </table>  
            </div>
            
          </div>
        </div>

        <div class="col-md-4 d-flex justify-content-around">
          <div id="card-bg" class="card text-center">
            <div class="card-header">
              <label for="">Baby-Sitters</label>
            </div>

            <div class="card-body d-flex justify-content-around">
              <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr id="tr_head"class=" text-white text-center">
 
 <th> Baby-Sitter Name </th>
 <th> Hourley Rate </th>
 <th> Selection </th>

 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from baby ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr id="tr_body" class="text-center">
 <td> <?php echo $res['babyname'];  ?> </td>
 <td> <?php echo $res['babyrate'];  ?> </td>
<td> <button class="btn-primary btn"> <a href="selection.php?selectId=<?php 
 echo $res['babyid']; 
 ?>" class="text-white"> Select </a>  </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  
           
          </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-around">
          <div id="card-bg" class="card text-center">
            <div class="card-header">
              <label for="">Approximate Payment</label>
            </div>

            <div class="card-body">
              <div class=img>
                <img src="http://localhost/serviceboy/View/icons/userdp.png" alt="" class="user"><br>
                        <label id="username" for=""><?php echo $name ?></label><br>
                        <label id="address" for="">Dhaka,Bangladesh</label>
              </div>
              <div class="payment">
                <div id="info-section"class="d-flex justify-content-between"><h6  for="">Service Time</h6><h6 >1 Hour</h6> </div> <br>
                <br>
                 <div  class="d-flex justify-content-between"><h6>Charge</h6><h6><?php echo $rate ?> BDT</h6> </div> <br>
                  <div id="info-section" class="d-flex justify-content-between"><h6  for="">Service Charge</h6><h6 ><?php echo $charge ?>%</h6> </div> <br>
                  <br>
                   <div class="d-flex justify-content-between"><h6  for="">Total Charge</h6><h6 ><?php echo $total ?> BDT</h6> </div> <br>
                <p>NB: All charges are expected, depends on your <span>service time</span></p>
              </div>
          
            </div>
            
 <div class="card-footer">
                        <a id="btn" href="payment.php?name=<?php  echo $name;?>&&rate=<?php echo $rate; ?>">Confirm</a>
                        </div>

          </div>

          
        </div>
        
      </div>
    <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>
 <script src="http://localhost/serviceboy/Controller/js/selection.js"></script>
    <script src="http://localhost/serviceboy/Controller/jquery/jquery.js"></script>
    <script src="http://localhost/serviceboy/View/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
