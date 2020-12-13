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
    <link rel="stylesheet" href="http://localhost/serviceboy/View/styles/login.css" />
    <link rel="stylesheet" href="http://localhost/serviceboy/View/bootstrap/css/bootstrap.min.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Quicksand&display=swap"
      rel="stylesheet"
    />
    <title>Login</title>
  </head>

  <body>
    <?php
    if($chk_val=="false"){
    ?>
    <script>alert("Number/Pin Does not Match")</script>
    <?php


  }
  ?>
    <form action="login_check.php" method="post">
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
              
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <div class="row d-flex justify-content-around align-items-center">
        <div class="col-md-6">
          <img id="banner" src="http://localhost/serviceboy/View/banners/login.png" alt="" />
        </div>
        <div class="col-md-6" id="login-section">
          <div id="card-bg" class="card text-center">
            <div class="card-header">
              <label for="">Login As :</label><br />           
              <img src="http://localhost/serviceboy/View/icons/user.png" alt="" class="user" /><br />
              <label id="user" for="">User</label>
            </div>

            <div class="card-body">
              <label id="label" for="">Enter Your Phone Number</label> <br />
              <input
                id="input"
                type="text"
                name="phone"
                id=""
                required
                oninvalid="this.setCustomValidity('Enter Phone Number')"
                onchange="this.setCustomValidity('')"
                placeholder="+8801611400005"
              /><br />
              <label id="label" for="">Enter Your Pin Number</label> <br />
              <input
                id="input"
                type="password"
                name="pin"
                id=""
                required
                oninvalid="this.setCustomValidity('Enter Pin Number')"
                onchange="this.setCustomValidity('')"
                placeholder="* * * * * *"
              />
            </div>
            <div class="card-footer">
              <input id=btn type="submit" name="submit" value="Login">
              <h5>
                <span> Haven't Registered Yet? </span>
                <a id="link" href="http://localhost/serviceboy/Controller/forms/registration.php">Register Now!</a>
              </h5>
            </div>
          </div>
        </div>
        <a id="btn" href="http://localhost/serviceboy/Controller/forms/admin_login.php">Login as Admin</a>
      </div>
    </form>
    <script src="http://localhost/serviceboy/Controller/jquery/jquery.js"></script>
    <script src="http://localhost/serviceboy/View/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://localhost/serviceboy/Controller/js/login.js"></script>
  </body>
</html>
