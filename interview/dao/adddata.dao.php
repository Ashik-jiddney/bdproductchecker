<?php 

require "dbconnection.php";

$idno = $_POST['ad_idno'];
$name = $_POST['ad_name'];
$email = $_POST['ad_email'];
$birthdate = $_POST['ad_birthdate'];
$interview_time = $_POST['ad_interview_time'];
$interview_platform = $_POST['ad_interview_platform'];
$interview_link = $_POST['ad_interview_link'];
$interview_id = $_POST['ad_interview_id'];
$interview_pass = $_POST['ad_interview_pass'];
$interview_status = $_POST['ad_interview_status'];
$result_status = $_POST['ad_result_status'];
$result_team = $_POST['ad_result_team'];


$sql = "INSERT INTO `candidates`(`idno`, `name`, `email`, `birthdate`, `interview_time`, `interview_platform`, `interview_link`, `interview_id`, `interview_pass`, `interview_status`, `result_status`, `result_team`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
  header("Location: /interview/adddata.php?error=sqlerror");
  exit();
} else {
  mysqli_stmt_bind_param($stmt, "isssssssssss",$idno, $name, $email, $birthdate, $interview_time, $interview_platform, $interview_link, $interview_id, $interview_pass, $interview_status, $result_status, $result_team);
  $dataInsertion = mysqli_stmt_execute($stmt);
  // $result = mysqli_stmt_get_result($stmt);
  // if ($row = mysqli_fetch_assoc($result)) {
  //   $idno = $row['idno'];
  //   $name = $row['name'];
  //   $email = $row['email'];
  //   $birthdate = $row['birthdate'];

  //   $splitTimeStamp = explode(" ", $row['interview_time']);
  //   $interview_date = $splitTimeStamp[0];
  //   $interview_time = $splitTimeStamp[1];
    
  //   $interview_platform = $row['interview_platform'];
  //   $interview_link = $row['interview_link'];
  //   $interview_id = $row['interview_id'];
  //   $interview_pass = $row['interview_pass'];
  //   $interview_status = $row['interview_status'];
  //   $result_status = $row['result_status'];
  //   $result_team = $row['result_team'];
  if ($dataInsertion) {
    header("Location: /interview/adddata.php?success=datainsert");
  }else {
    header("Location: /interview/adddata.php?error=nosuchcandidate");
    exit();
  }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>