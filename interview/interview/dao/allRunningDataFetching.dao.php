<?php 

require "dbconnection.php";

date_default_timezone_set('Asia/Dhaka');
$currDate = date("Y-m-d");
$currTime = date("H:i:s");
$parsed = date_parse($currTime);
$seconds = $parsed['hour'] * 3600 + $parsed['minute'] * 60 + $parsed['second'];

$sql = "SELECT * FROM candidates WHERE DATE(interview_time)=? AND TIME_TO_SEC(interview_time)<=? AND (TIME_TO_SEC(interview_time) + 20*60)>=? ORDER BY interview_time";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
  header("Location: /interview/admin_Home.php");
  exit();
} else {
  mysqli_stmt_bind_param($stmt, "sii", $currDate, $seconds, $seconds);
  mysqli_stmt_execute($stmt);
  //$result = mysqli_stmt_store_result($stmt);
  $result = mysqli_stmt_get_result($stmt);
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>