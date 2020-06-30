<?php 

include "SimpleXLSX.php";
$data = array();
if ( $xlsx = SimpleXLSX::parse("uploads/" . $_GET['filename']) ) {
  $i = 0;
  foreach ($xlsx->rows() as $elt) {
    array_push($elt, 1);
    array_push($data, $elt);
  }
} else {
  echo SimpleXLSX::parseError();
  exit();
}

?>