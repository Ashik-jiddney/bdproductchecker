
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

$sql = "UPDATE `candidates` SET `idno`=?,`name`=?,`email`=?,`birthdate`=?,`interview_time`=?,`interview_platform`=?,`interview_link`=?,`interview_id`=?,`interview_pass`=?,`interview_status`=?,`result_status`=?,`result_team`=? WHERE `idno`=?";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
  header("Location: /interview/admin_Home.php");
  exit();
} else {
  mysqli_stmt_bind_param($stmt, "sssssssssssss",$idno, $name, $email, $birthdate, $interview_time, $interview_platform, $interview_link, $interview_id, $interview_pass, $interview_status, $result_status, $result_team,$idno);
  $dataInsertion = mysqli_stmt_execute($stmt);
  if ($dataInsertion) {
     header("Location: /interview/admin_Home.php");
  }else {
    header("Location: /interview/admin_Home.php");
    exit();
  }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>