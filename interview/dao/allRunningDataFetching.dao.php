<?php 

require "dbconnection.php";

$currDater = date()-20;
$currDatel = date()-40;

$sql = "SELECT * FROM candidates WHERE interview_time >= '$currDatel' AND interview_time<='$currDater'";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
  header("Location: /interview/admin_Home.php");
  exit();
} else {
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>