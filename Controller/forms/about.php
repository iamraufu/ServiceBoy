<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="shortcut icon" type="image/x-icon" href="http://localhost/serviceboy/View/logo2.png" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost/serviceboy/View/styles/about.css" />
    <link rel="stylesheet" href="http://localhost/serviceboy/View/bootstrap/css/bootstrap.min.css" />

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
                            <a class="nav-link" id="" href="#login"><b>Login/Register<b></a>
                        </li>
                        <li class="nav-item">
                <a class="nav-link btn btn-danger" id="logout-btn" href="http://localhost/serviceboy/Controller/forms/logout.php"
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
          <span id="o-apa">Service Boy</span>
        </p>

        <p></p><br>
        <p>
          Service Boy! is a web-application based on Maid and BabySitter Service also other home handy services
          Currenty this service is ongoing inside Rampura,Dhaka.
        </p>
      </div>
      <div class="col-md-4"></div>
      <div id="infos" class="col-md-4 p-2 bd-highlight">
        <ul>
          <span id="o-apa">Service Boy</span>
          <li>
            <span id="icon"><i class="fas fa-map-marker-alt"></i></span>
            <span id="location"
              >Hatirjheel, Dhaka 1219, Bangladesh</span
            >
          </li>
          <li>
            <span id="icon"><i class="fas fa-phone-alt"></i></span>
            <span id="contact">+8801611400005, +8801810090007</span>
          </li>
          <li>
            <span id="icon"><i class="fas fa-envelope-open"></i></span>
            <span id="mail"><a class="email-link" target="_blank" href="mailto:eftykhar.rahman@g.bracu.ac.bd" >eftykhar.rahman@g.bracu.ac.bd</span>
          </li>
        </ul>
      </div>
    </row>
    <footer id="footer">
      © <span>Service Boy!</span> 2020 || All Rights Reserved
    </footer>
    <script src="http://localhost/serviceboy/View/jquery/jquery.js"></script>
    <script src="http://localhost/serviceboy/View/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
