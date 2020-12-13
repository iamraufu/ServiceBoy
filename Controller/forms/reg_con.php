<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost/serviceboy/View/styles/reg_con.css" />
    <link rel="stylesheet" href="http://localhost/serviceboy/View/bootstrap/css/bootstrap.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />
    <title>Confirmation</title>
</head>

<body>
<link rel="shortcut icon" type="image/x-icon" href="http://localhost/serviceboy/View/logo2.png" />
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
                            <a class="nav-link" id="nav-button" href="#login">Login/Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class ="msg">
            <h1 >Congratulations!</h1> <br>
            <h2 class="h2">You Have Successfully Registered</h2> <br>
            
            <a class="link" href="http://localhost/serviceboy/Controller/forms/login.php">Back to Login</a>


        </div>


    </form>
    <script src="http://localhost/serviceboy/Controller/jquery/jquery.js"></script>
    <script src="http://localhost/serviceboy/View/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>