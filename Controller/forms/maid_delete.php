<?php

include 'conn.php';

$maidid = $_GET['maidid'];

$q = " DELETE FROM `maid` WHERE maidid = $maidid ";

mysqli_query($con, $q);

header('location:maid_display.php');

?>