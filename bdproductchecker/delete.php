<?php
require_once './dbconf.php';
require_once './myclass.php';
$id =  base64_decode($_GET['id']);
mysqli_query($db,"delete from product_info where id='$id'");
header('location: all-product.php');
?>