<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $maidid = $_GET['maidid'];
 $maidname = $_POST['maidname'];
 $maidrate = $_POST['maidrate'];
 $q = " update maid set maidid=$maidid, maidname='$maidname', maidrate='$maidrate' where maidid=$maidid  ";

 $query = mysqli_query($con,$q);

 header('location:maid_display.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="http://localhost/serviceboy/View/logo2.png" />
 <title>Update Maid</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/OApa!/View/styles/apa.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  -
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div id="card-bg" class="card text-center">
                        <div class="card-header">
                            <label for="">Update Maid</label><br />
                        </div>
                    
                        <div class="card-body">
                            <label id="label" for="">Maid Name</label>
                            <input id="input" type="text" name="maidname" id="" placeholder="Maid Name"  /><br />
                            <label id="label" for="">Rate</label>
                            <input id="input" type="text" name="maidrate" id="" placeholder="Hourly Rate"  /><br />
                    
                        </div>
                        <div class="card-footer">
                            <input id="btn" type="submit" name="done" value="Update" />
                            <br />
                        </div>
                    </div> </form>
 </div>
</body>
</html>