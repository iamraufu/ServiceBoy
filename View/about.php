<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="C:\xampp\htdocs\serviceboy\View\styles/about.css" />
    <link rel="stylesheet" href="C:\xampp\htdocs\serviceboy\View\bootstrap\css/bootstrap.min.css" />

    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/551bbdef07.js"
      crossorigin="anonymous"
    ></script>
    <title>About Us</title>
  </head>

  <body>
    <form action="" method="post">
      <div class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#"
            ><img src="C:\xampp\htdocs\470\View\icons/navlogo.png" alt=""
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
    </form>
    <h1>About Us</h1>
    <row id="info" class="d-flex bd-highlight mb-3">
      <div id="about" class="col-md-4 mr-auto p-2 bd-highlight">
        <p>
          <span id="o-apa">HOME SERVICE</span>
        </p>

        <p></p><br>
        <p>
          SERVICE BOY! is a web-application based on Maid and HOME ServiceS.
          Currenty this service is ongoing inside RAMPURA,Dhaka.
        </p>
      </div>
      <div class="col-md-4"></div>
      <div id="infos" class="col-md-4 p-2 bd-highlight">
        <ul>
          <span id="o-apa">SERVICE BOY</span>
          <li>
            <span id="icon"><i class="fas fa-map-marker-alt"></i></span>
            <span id="location"
              >BRAC , 69/A, MOHAKHALI, Dhaka, Bangladesh</span
            >
          </li>
          <li>
            <span id="icon"><i class="fas fa-phone-alt"></i></span>
            <span id="contact">+8801950958099, +8801842958099</span>
          </li>
          <li>
            <span id="icon"><i class="fas fa-envelope-open"></i></span>
            <span id="mail"><a class="email-link" target="_blank" href="mailto:oapa.official@gmail.com" >oapa.official@gmail.com</span>
          </li>
        </ul>
      </div>
    </row>
    <footer id="footer">
      © <span>O APA!</span> 2020 || All Rights Reserved
    </footer>
    <script src="../jquery/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
