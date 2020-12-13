<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $babyid = $_GET['babyid'];
 $babyname = $_POST['babyname'];
 $babyrate = $_POST['babyrate'];
 $q = " update baby set babyid=$babyid, babyname='$babyname', babyrate='$babyrate' where babyid=$babyid  ";

 $query = mysqli_query($con,$q);

 header('location:baby_display.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="http://localhost/serviceboy/View/logo2.png" />
 <title>Update BabySitter</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/serviceboy/View/styles/apa.css">
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
                            <label for="">Update Baby</label><br />
                        </div>
                    
                        <div class="card-body">
                            <label id="label" for="">Baby Name</label>
                            <input id="input" type="text" name="babyname" id="" placeholder="Baby Name"  /><br />
                            <label id="label" for="">Rate</label>
                            <input id="input" type="text" name="babyrate" id="" placeholder="Hourly Rate"  /><br />
                    
                        </div>
                        <div class="card-footer">
                            <input id="btn" type="submit" name="done" value="Update" />
                            <br />
                        </div>
                    </div> </form>
 </div>
</body>
</html>