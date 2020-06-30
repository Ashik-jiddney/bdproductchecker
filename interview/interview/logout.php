<?php 
session_start();
session_unset();
echo $_SESSION['adminEmail'] . "<br>";
session_destroy();
header("Location: adminlogin.php");
exit();
?>