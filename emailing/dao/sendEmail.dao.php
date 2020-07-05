<?php 
require 'dbconnection.php';

$target_dir = "file/";

if(isset($_FILES["body-text"]["name"])){
$target_file = $target_dir . basename($_FILES["body-text"]["name"]);	
$uploadOk1 = 1;
if ($uploadOk1 == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["body-text"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["body-text"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}

if(isset($_FILES["body-html"]["name"])){
$target_file = $target_dir . basename($_FILES["body-html"]["name"]);	
$uploadOk2 = 1;
if ($uploadOk2 == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["body-html"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["body-html"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}

if(isset($_FILES["recipents"]["name"])){
$target_file = $target_dir . basename($_FILES["recipents"]["name"]);	
$uploadOk3 = 1;
if ($uploadOk3 == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["recipents"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["recipents"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}

header("Location: /emailing/adminhome.php");

?>