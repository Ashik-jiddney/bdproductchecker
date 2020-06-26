<?php 

require "dbconnection.php";

date_default_timezone_set('Asia/Dhaka');
$currDate = date("Y-m-d H:i:s");
$interview_status = "pending";

$sql = "SELECT * FROM candidates WHERE interview_time <? AND interview_status=?";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
  header("Location: /interview/admin_Home.php");
  exit();
} else {
  mysqli_stmt_bind_param($stmt, "ss", $currDate, $interview_status);
  mysqli_stmt_execute($stmt);
  //$result = mysqli_stmt_store_result($stmt);
  $result = mysqli_stmt_get_result($stmt);

}
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>