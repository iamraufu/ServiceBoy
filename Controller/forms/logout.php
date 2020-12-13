<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<link rel="shortcut icon" type="image/x-icon" href="http://localhost/serviceboy/View/logo2.png" />
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

header("Location:login.php");

?>

</body>
</html>