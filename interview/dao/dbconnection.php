<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "interview";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
  die("Connection to database failed! : " . mysqli_connect_error());
} else {
  // echo "Connected Successfully! <br>";
}

?>