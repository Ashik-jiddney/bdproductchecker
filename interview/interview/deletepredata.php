<?php 
session_start();
if (!isset($_SESSION['admin'])) {
  require "dao/adminlogin.dao.php";
}
require 'dao/deletepredata.dao.php';
header("Location: /interview/extract-admin-home.php");
exit();
 ?>