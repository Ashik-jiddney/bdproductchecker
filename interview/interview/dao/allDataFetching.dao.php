<?php 

require "dbconnection.php";


$sql = "SELECT * FROM candidates ORDER BY interview_time";
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