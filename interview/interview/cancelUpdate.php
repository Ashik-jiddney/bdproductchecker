<?php 
session_start();
if (!isset($_SESSION['admin'])) {
  require "dao/adminlogin.dao.php";
}
require 'dao/deleteAllPreData.dao.php';
header("Location: /interview/admin_Home.php");
exit();
 ?>