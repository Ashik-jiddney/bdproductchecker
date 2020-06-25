<?php 

	require 'dbconnection.php';

	$idno = base64_decode($_GET['idno']);
	//echo $id;
	// DELETE FROM `candidates` WHERE 0
	$sql = "DELETE FROM `pre_candidates` WHERE idno=?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: /interview/admin_Home.php?error=hereiserror");
    exit();
   } else{
   	mysqli_stmt_bind_param($stmt, "s", $idno);
  	$res = mysqli_stmt_execute($stmt);
  	if(!$res){
  		header("Location: /interview/admin_Home.php?error=datadoesnotdelete");
    	exit();
  	}
   }
mysqli_stmt_close($stmt);
mysqli_close($conn);
 ?>