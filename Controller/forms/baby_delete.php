<?php

include 'conn.php';

$babyid = $_GET['babyid'];

$q = " DELETE FROM `baby` WHERE babyid = $babyid ";

mysqli_query($con, $q);

header('location:baby_display.php');

?>