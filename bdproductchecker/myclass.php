<?php
ob_flush();
class sessionChecking{
	function S_C()
	{
		if(isset($_SESSION['user_login'])) return true;
		
		else return false;
	}
}


class usersLogin extends Database{
	function unameAndPass($username,$password){
		$sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

		$result = $this->connect()->query($sql);
		$numRow = $result->num_rows;
		if($numRow>0)
		{
			$row = $result->fetch_assoc();
			$_SESSION['user_name'] = $row['username'];
			$_SESSION['user_login'] = $row['name'];
			$_SESSION['ph'] = $row['image'];
			return TRUE;
		}
	}
}

?>