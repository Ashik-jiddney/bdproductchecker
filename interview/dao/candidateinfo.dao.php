<?php 

require "dbconnection.php";

if(isset($_GET['idno']))
{
  $idno = base64_decode($_GET['idno']);
  $sql = "SELECT * FROM candidates WHERE idno=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
  header("Location: /interview/index.php?error=sqlerror1get");
  exit();
  } else{
    mysqli_stmt_bind_param($stmt, "s", $idno);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
      $idno = $row['idno'];
      $name = $row['name'];
      $email = $row['email'];
      $birthdate = $row['birthdate'];

      $splitTimeStamp = explode(" ", $row['interview_time']);
      $interview_date = $splitTimeStamp[0];
      $interview_time = $splitTimeStamp[1];
      
      $interview_platform = $row['interview_platform'];
      $interview_link = $row['interview_link'];
      $interview_id = $row['interview_id'];
      $interview_pass = $row['interview_pass'];
      $interview_status = $row['interview_status'];
      $result_status = $row['result_status'];
      $result_team = $row['result_team'];
    } else {
      header("Location: /interview/index.php?error=nosuchcandidateget");
      exit();
    }
  }
} else {
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];

$sql = "SELECT * FROM candidates WHERE email=? AND birthdate=?";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
  header("Location: /interview/index.php?error=sqlerrorPost");
  exit();
} else {
  mysqli_stmt_bind_param($stmt, "ss", $email, $birthdate);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  if ($row = mysqli_fetch_assoc($result)) {
    $idno = $row['idno'];
    $name = $row['name'];
    $email = $row['email'];
    $birthdate = $row['birthdate'];

    $splitTimeStamp = explode(" ", $row['interview_time']);
    $interview_date = $splitTimeStamp[0];
    $interview_time = $splitTimeStamp[1];
    
    $interview_platform = $row['interview_platform'];
    $interview_link = $row['interview_link'];
    $interview_id = $row['interview_id'];
    $interview_pass = $row['interview_pass'];
    $interview_status = $row['interview_status'];
    $result_status = $row['result_status'];
    $result_team = $row['result_team'];
  } else {
    header("Location: /interview/index.php?error=nosuchcandidatePOST");
    exit();
  }
  }
}



// $sql = "SELECT * FROM candidates WHERE email=? AND birthdate=?";
// $stmt = mysqli_stmt_init($conn);

// if (!mysqli_stmt_prepare($stmt, $sql)) {
//   header("Location: /interview/index.php?error=sqlerror3");
//   exit();
// } else {
//   mysqli_stmt_bind_param($stmt, "ss", $email, $birthdate);
//   mysqli_stmt_execute($stmt);
//   $result = mysqli_stmt_get_result($stmt);
//   if ($row = mysqli_fetch_assoc($result)) {
//     $idno = $row['idno'];
//     $name = $row['name'];
//     $email = $row['email'];
//     $birthdate = $row['birthdate'];

//     $splitTimeStamp = explode(" ", $row['interview_time']);
//     $interview_date = $splitTimeStamp[0];
//     $interview_time = $splitTimeStamp[1];
    
//     $interview_platform = $row['interview_platform'];
//     $interview_link = $row['interview_link'];
//     $interview_id = $row['interview_id'];
//     $interview_pass = $row['interview_pass'];
//     $interview_status = $row['interview_status'];
//     $result_status = $row['result_status'];
//     $result_team = $row['result_team'];
//   } else {
//     $idno = base64_decode($_GET['idno']);
//     header("Location: /interview/index.php?error=nosuchcandidate&&idno=$idno");
//     exit();
//   }
// }
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>