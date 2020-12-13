<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="http://localhost/serviceboy/View/logo2.png" />
 <title>BabySitter Info</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/serviceboy/View/styles/display.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-center" > Maid Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr id="tr_head"class=" text-white text-center">
 
 <th> Id </th>
 <th> Username </th>
 <th> Password </th>
 <th> Update </th>
 <th> Delete </th>

 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from baby ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr id="tr_body" class="text-center">
 <td> <?php echo $res['babyid'];  ?> </td>
 <td> <?php echo $res['babyname'];  ?> </td>
 <td> <?php echo $res['babyrate'];  ?> </td>
 <td> <button class="btn-primary btn"> <a href="baby_update.php?babyid=<?php echo $res['babyid']; ?>" class="text-white"> Update </a>  </button> </td>
 <td> <button class="btn-danger btn"> <a href="baby_delete.php?babyid=<?php echo $res['babyid']; ?>" class="text-white"> Delete </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>

 </div>
 <div class=".container"><a id="link" href="http://localhost/serviceboy/Controller/forms/admin.php">Back to Admin Panel</a></div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>