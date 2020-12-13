<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">


<head>
	<link rel="shortcut icon" type="image/x-icon" href="http://localhost/serviceboy/View/logo2.png" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost/serviceboy/View/styles/location.css" />
    <link rel="stylesheet" href="http://localhost/serviceboy/View/bootstrap/css/bootstrap.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />
    <title>Location</title>
</head>

<body>

    <form action="" method="post">
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <a class="navbar-brand" href="#"><img src="http://localhost/serviceboy/View/logo2.png" height = 100px width=50% alt="" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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

        <div class="row d-flex justify-content-around align-items-center">
            <div class="col-md-6 ">
                <img id="banner" src="http://localhost/serviceboy/View/banners/map.png" alt="">
            </div>
            <div class="col-md-6" id="login-section">
                <div id="card-bg" class="card text-center">
                    <div class="card-header">


                        <img src="http://localhost/serviceboy/View/icons/user.png" alt="" class="user"><br>
                        <label id="username" for=""><?php
                            if(isset($_SESSION['uname'])){
                            echo $_SESSION['uname'];

                            }else{

                                echo "please login";
                            }
                        ?></label><br>
                        <label id="address" for="">Dhaka,Bangladesh</label>
                    </div>

                    <div class="card-body">
                        <label id="label-location" for="">Location</label>
                        <div id="map">
                            <script src="..http://localhost/serviceboy/Controller/js/location.js"></script>
                            <script
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7LhjV6Wv82v1ioXeMnemjP_L0eCflJYk&callback=initMap"
                                async defer></script>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a id = "btn" href="http://localhost/serviceboy/Controller/forms/selection.php">Done</a>
                    </div>
                </div>
            </div>

        </div>
    </form>
    <script src="http://localhost/serviceboy/Controller/jquery/jquery.js"></script>
    <script src="http://localhost/serviceboy/View/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>