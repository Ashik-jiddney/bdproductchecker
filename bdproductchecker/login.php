<?php
require_once './dbconf.php';
include './myclass.php';
session_start();

if(isset($_SESSION['user_login'])){

	header('location: index.php');
}

$sessionCheck = new sessionChecking();

if($sessionCheck->S_C()){ 
header('location: index.php');
}

if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$match = FALSE;
	$fail = 'Invalid Username/Password';
	
	$usernamecheck = new usersLogin();
	$match = $usernamecheck->unameAndPass($username,$password); 
	if($match) header('location: index.php');
}

?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>bdproductchecker</title>

	<style>
	html, body{ height:100%; margin:0;}
	body{
	  display:flex;
	  flex-direction:column;
	}
	footer{
		margin-top:auto;
		margin-bottom:10px;
	}
	</style>
  </head>

  <body>
    <?php include './navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 "></div>
            <div class="card col-sm-6" style="margin-top:50px;">
                <div class="col-sm-12">
                    <form action="login.php" method="post">
                        <h2 class="text-center" style="margin-bottom:20px;" >Admin Login Form</h2>
                        <div style="margin-bottom:10px;">
                            <input class="form-control" type="text" name="username" placeholder="User Name" value="<?php if(isset($username)) echo $username;?>"></input>
                        </div>
                        <div style="margin-bottom:10px;">
                            <input class="form-control" type="password" name="password" placeholder="Password" value="<?php if(isset($password))echo $password;?>"></input>
                        </div>
                        <div style="margin-bottom:10px;">
                            <input type="submit" value="login" name="login" class="btn btn-info"></input>
                        </div>
					</form>
					<?php if(isset($_POST['login'])){if(!$match) echo '<p style="color:blue;">'.$fail.'</p><hr>';}?>
                </div>
            </div>
        </div>
    </div>

    <?php include './footer.php' ?>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
