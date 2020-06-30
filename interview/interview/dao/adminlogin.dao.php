<?php 

require "dbconnection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username=? AND password=?";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
  header("Location: /interview/adminlogin.php?error=sqlerror");
  exit();
} else {
  //echo $username . "  " . $password . "<br>";
  mysqli_stmt_bind_param($stmt, "ss", $username, $password);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['admin'] = $row['username'];
    $_SESSION['adminEmail'] = $row['email'];
    $_SESSION['adminRole'] = $row['role'];
  } else {
    header("Location: /interview/adminlogin.php?error=nosuchadmin");
    exit();
  }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>