<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="shortcut icon" type="image/x-icon" href="http://localhost/serviceboy/View/logo2.png" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost/serviceboy/View/styles/admin.css" />
    <link rel="stylesheet" href="http://localhost/serviceboy/View/bootstrap/css/bootstrap.min.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Quicksand&display=swap"
      rel="stylesheet"
    />
    <title>Admin Panel</title>
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
                <a class="nav-link" id="nav-button" href="#login"
                  >Login/Register</a
                >
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="container">
        <div id="card-bg" class="card text-center">
          <div class="card-header">
            <img src="http://localhost/serviceboy/View/icons/admin.png" alt="" class="user" /><br />
            <label id="username" for="">Welcome Admin</label><br />
          </div>

          <div class="card-body">
            <a id="btn" href="http://localhost/serviceboy/Controller/forms/apa.php">Register Service Boy</a>
            <a id="btn" href="http://localhost/serviceboy/Controller/forms/maid_display.php">Update/Delete Maid</a>
            <a id="btn" href="http://localhost/serviceboy/Controller/forms/baby_display.php"
              >Update/Delete Baby Sitter</a
            >
          </div>
          <div class="card-footer">
            <a id="btn" href="admin_login.php">Logout</a>
          </div>
        </div>
      </div>
    </form>
    <script src="http://localhost/serviceboy/View/jquery/jquery.js"></script>
    <script src="http://localhost/serviceboy/View/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
