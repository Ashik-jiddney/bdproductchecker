<?php 

require "allPreDataFetching.dao.php";
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  array_push($data, $row);
}

require "dbconnection.php";

foreach ($data as $d) {
    $idno = $d['idno'];
    $name = $d['name'];
    $email = $d['email'];
    $birthdate = $d['birthdate'];
    $interview_time = $d['interview_time'];
    $interview_platform = $d['interview_platform'];
    $interview_link = $d['interview_link'];
    $interview_id = $d['interview_id'];
    $interview_pass = $d['interview_pass'];
    $interview_status = $d['interview_status'];
    $result_status = $d['result_status'];
    $result_team = $d['result_team'];

    $sql = "INSERT INTO `candidates`(`idno`, `name`, `email`, `birthdate`, `interview_time`, `interview_platform`, `interview_link`, `interview_id`, `interview_pass`, `interview_status`, `result_status`, `result_team`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: /interview/adddata.php?error=sqlerrorhisajjad");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "ssssssssssss",$idno, $name, $email, $birthdate, $interview_time, $interview_platform, $interview_link, $interview_id, $interview_pass, $interview_status, $result_status, $result_team);
      $dataInsertion = mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);

    $sql = "DELETE FROM `pre_candidates` WHERE idno=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: /interview/admin_Home.php");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "s", $idno);
      $res = mysqli_stmt_execute($stmt);
      if(!$res) {
        header("Location: /interview/admin_Home.php");
        exit();
      }
    }
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>