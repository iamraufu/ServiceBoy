<!DOCTYPE html>
<?php
  $chk_val = "true";
  if(isset($_GET["chk"])){
    $chk_val = $_GET["chk"];
  }
?>
<html lang="en">
  <head>
  <link rel="shortcut icon" type="image/x-icon" href="http://localhost/serviceboy/View/logo2.png" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost/serviceboy/View/styles/apa.css" />
    <link rel="stylesheet" href="http://localhost/serviceboy/View/bootstrap/css/bootstrap.min.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Quicksand&display=swap"
      rel="stylesheet"
    />
    <title>Service Boy Registration</title>
  </head>

  <body>
    <?php
    if($chk_val=="false"){
    ?>
    <script>alert("Successfully Registered!")</script>
    <?php


  }
  ?>
    <form action="apa_check.php" method="post">
      <div class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#"
            ><img src="http://localhost/serviceboy/View/logo2.png" height = 100px width=50% alt=""
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
                <a class="nav-link" id="nav-button" href="#login"
                  >Login/Register</a
                >
              </li>
            </ul>
          </div>
        </nav>
      </div>

                <h1>
                    Service Boy Registration Form
                </h1>
               
                <div class="row d-flex justify-content-around align-items-center">
                      <div class="col-md-6">
                        <div id="card-bg" class="card text-center">
                        <div class="card-header">
                            <label for="">Register Maid</label><br />
                        </div>
                    
                        <div class="card-body">
                            <label id="label" for="">Maid Name</label>
                            <input id="input" type="text" name="maidname" id="" placeholder="Maid Name"  /><br />
                            <label id="label" for="">Rate</label>
                            <input id="input" type="text" name="maidrate" id="" placeholder="Hourly Rate"  /><br />
                    
                        </div>
                        <div class="card-footer">
                            <input id="btn" type="submit" name="maidsubmit" value="Maid Regestration" />
                            <br />
                        </div>
                    </div></div>
                   
                      <div class="col-md-6">
                        <div id="card-bg" class="card text-center">
                        <div class="card-header">
                            <label for="">Register Baby Sitter</label><br />
                        </div>
                    
                        <div class="card-body">
                            <label id="label" for="">Baby Sitter Name</label>
                            <input id="input" type="text" name="babyname" id="" placeholder="Baby Name"  /><br />
                            <label id="label" for="">Rate</label>
                            <input id="input" type="text" name="babyrate" id="" placeholder="Hourly Rate"  /><br />
                    
                        </div>
                        <div class="card-footer">
                            <input id="btn" type="submit" name="babysubmit" value="Baby Sitter Regestration" />
                            <br />
                        </div>
                    </div>
                    </div>
                   
                </div>
                 </form>
            
        <a id="link" href="http://localhost/serviceboy/Controller/forms/admin.php">Back to Admin Panel</a>


    <script src="http://localhost/serviceboy/Controller/jquery/jquery.js"></script>
    <script src="http://localhost/serviceboy/View/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
