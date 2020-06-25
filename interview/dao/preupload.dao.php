<?php 

require "dbconnection.php";

$i = 0;
foreach ($data as $d) {
  if ($i !== 0) {
    $idno = $d[0];
    $name = $d[1];
    $email = $d[2];
    $birthdate = $d[3];
    $time1 = explode(" ", $d[4]);
    $time2 = explode(" ", $d[5]);
    $interview_time = $time1[0] . ' ' . $time2[1];
    $interview_platform = $d[6];
    $interview_link = $d[7];
    $interview_id = $d[8];
    $interview_pass = $d[9];
    $interview_status = $d[10];
    $result_status = $d[11];
    $result_team = $d[12];
  
    $sql = "INSERT INTO `pre_candidates`(`idno`, `name`, `email`, `birthdate`, `interview_time`, `interview_platform`, `interview_link`, `interview_id`, `interview_pass`, `interview_status`, `result_status`, `result_team`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: /interview/adddata.php?error=sqlerror");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "ssssssssssss",$idno, $name, $email, $birthdate, $interview_time, $interview_platform, $interview_link, $interview_id, $interview_pass, $interview_status, $result_status, $result_team);
      $dataInsertion = mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
  }
  $i++;
}
mysqli_close($conn);
?>