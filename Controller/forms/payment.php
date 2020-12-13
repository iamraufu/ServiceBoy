<?php
   $data['name'] = "";
   $data['rate'] = 0;
   if(isset($_GET['name'])){
    $data['name'] = $_GET['name'];
    $data['rate'] = $_GET['rate'];

    
   }

   $startTime = "";
   $endtime = "";
   $timediff = "";

   $min  = "";

  
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost/serviceboy/View/styles/slip.css">
    <link rel="stylesheet" href="http://localhost/serviceboy/View/bootstrap/css/bootstrap.min.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Quicksand&display=swap"
      rel="stylesheet"
    />

    <title>Payment Slip</title>
   
  </head>

  <body>
  <link rel="shortcut icon" type="image/x-icon" href="http://localhost/serviceboy/View/logo2.png" />
    <div class="">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
		<img src="http://localhost/serviceboy/View/logo2.png"  height = 100px width=50% alt="" /></a>
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
    <div class="row">
      <div class="col-md-6 d-flex justify-content-around">
        <div id="card-bg" class="card text-center">
          <div class="card-header">
            <label for="">Timer</label>
          </div>

          <div class="card-body">
            <div id="display">
              <span id="label">HH:MM:SS</span> <br />
              00:00:00
            </div>

            <div class="buttons">
              <button id="startStop" onclick=" startStop();">Start</button>
              <button id="reset" onclick="reset(); ">Stop</button>
            </div>
          </div>

          <div class="card-footer">
            <button id="btn" class="btnsub">Get Payment Slip</button>
          </div>
        </div>
      </div>

      <div class="col-md-6 d-flex justify-content-around">
        <div id="card-bg" class="card text-center">
          <div class="card-header">
            <label for="">Payment Slip</label>
          </div>

          <div class="card-body">
            <div class="img">
              <img src="http://localhost/serviceboy/View/icons/userdp.png" alt="" class="user" /><br />
              <label id="username" for=""><?php echo $data['name'] ?></label><br />
              <label id="address" for="">Dhaka,Bangladesh</label>
            </div>
            <div class="payment">
              <div id="info-section" class="d-flex justify-content-between">
                <h6 for="">Service Time</h6>
                <h6 id="settime">0 Hour</h6>
              </div>
              <br />
              <br />
              <div class="d-flex justify-content-between">
                <h6 for="">Charge</h6>
                <h6 id="rateValue"><?php echo $data['rate'] ?></h6>
              </div>
              <br />
              <div id="info-section" class="d-flex justify-content-between">
                <h6 for="">Service Charge</h6>
                <h6>10 %</h6>
              </div>
              <br />
              <br />
              <div class="d-flex justify-content-between">
                <h6 for="">Total Charge</h6>
                <h6 id="total"> 0 BDT</h6>
              </div>
              <br />
              <p>
                NB: All charges are expected, depends on your
                <span>service time</span>
              </p>
            </div>
          </div>

          <div class="card-footer">
            <a id ="btn" href="http://localhost/serviceboy/Controller/forms/about.php">Done</a>
          </div>
        </div>
      </div>
    </div>

    
    <script src="http://localhost/serviceboy/Controller/jquery/jquery.js"></script>
    <script>
    $("#reset").click(function(){
      
      
    });
    $(".btnsub").click(function(){
      
      document.getElementById("settime").innerHTML = document.getElementById("display").textContent;

      var val = document.getElementById("display").textContent;

      
      var valarr = val.split(':');
      var time = valarr[0] * 60 + valarr[1];
      var charge = document.getElementById("rateValue").innerHTML;
      var total = (charge/60*time)+ (charge/60*time))*0.1);
      document.getElementById("total").innerHTML = total;
      console.log(charge);


    });
    
    


    

    </script>

    <script type="text/javascript" src="http://localhost/serviceboy/Controller/js/timer.js"></script>
    
    <script src="http://localhost/serviceboy/View/bootstrap/js/bootstrap.min.js"></script>
    
    
  </body>
  
 
</html>
