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
    <link rel="stylesheet" href="http://localhost/serviceboy/View/styles/registration.css" />
    <link rel="stylesheet" href="http://localhost/serviceboy/View/bootstrap/css/bootstrap.min.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Quicksand&display=swap"
      rel="stylesheet"
    />
    <title>Registration</title>
  </head>

  <body>
  
       <?php
    if($chk_val=="false"){
    ?>
    <script>alert("Phone Number is already in use!")</script>
    <?php


  }
  ?>
    <form action="reg_check.php" method="post">
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
                <a class="nav-link" id="nav-button" href="#login"
                  >Login/Register</a
                >
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <div class="row d-flex justify-content-around align-items-center">
        <div class="col-md-6">
          <img id="banner" src="http://localhost/serviceboy/View/banners/registration.png" alt="" />
        </div>
        <div class="col-md-6" id="login-section">
          <div id="card-bg" class="card text-center">
            <div class="card-header">
              <label for="">Registration Form</label><br />
            </div>

            <div class="card-body">
              <label id="label" for="">Name</label>
              <input
                id="input"
                type="text"
                name="name"
                id=""
                placeholder="Your Name"
                required
              /><br />
              <label id="label" for="">UserID</label>
              <input
                id="input"
                type="text"
                name="id"
                id=""
                placeholder="Your UserID"
                required
              /><br />
              <label id="label" for="">Phone</label>
              <input
                id="input"
                type="text"
                name="phone"
                id=""
                placeholder="Your Phone Number"
                required
              /><br />
              <label id="label" for="">Pin </label>
              <input
                id="input"
                type="password"
                name="pin"
                id=""
                placeholder="* * * * * *"
                required
              /><br />
              <label id="label" for="">Gender</label>
              <input type="radio" name="gender" id="radio" value="m" required />
              <label id="label" for="">Male</label>
              <input type="radio" name="gender" id="radio" value="f" required />
              <label id="label" for="">Female</label> <br>
              <label id = "label"for="">Profession</label>
              <select name="prof" id="prof" required>
                <option id = "label" selected hidden value = "">Select Profession</option>
                <option id = "label" value="student">Student</option>
                <option id = "label" value="service">Service-Holder</option>
                <option id = "label" value="house">Housewife</option>
              </select>
            </div>
            <div class="card-footer">
              <input id="btn" type="submit" name="submit" value="Regestration"> <br />
            </div>
          </div>
        </div>
      </div>
    </form>
    <script src="http://localhost/serviceboy/Controller/jquery/jquery.js"></script>
    <script src="http://localhost/serviceboy/View/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
