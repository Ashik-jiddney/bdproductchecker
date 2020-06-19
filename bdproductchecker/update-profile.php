<?php
require_once './dbconf.php';
include './myclass.php';
session_start();

$object = new sessionChecking();
if(!$object->S_C()){ 
header('location: login.php');
}
$username = $_SESSION['user_name'];
$query = "SELECT * FROM `users` WHERE username='$username'";
$result = mysqli_query($db,$query);
$row = mysqli_fetch_assoc($result);
$userpass = $row['password'];
if(isset($_POST['update-info']))
{
	$name = $_POST['name'];
	$oldpass = $_POST['oldpassword'];
	$newpass = $_POST['newpassword'];
	$flag = false;
	$_SESSION['data_insert_error'] = "ADD FAILED, PLEASE TRY AGAIN LATER!";
	
	$input_error = array();
	
	if(($oldpass && $newpass==NULL) || ($oldpass==NULL && $newpass)) $input_error['pass'] = 'Password Error';
	else if($oldpass && $newpass)
	{
		if($oldpass != $userpass) $input_error['pass'] = 'Password Error';
		else if($oldpass == $userpass) $flag = true;
	}
	
	if(empty($name)) $input_error['name'] = "The name field is required";
	
	
	if(!count($input_error))
	{
		if($flag) $query = "UPDATE `users` SET name='$name', password = '$newpass' WHERE username='$username'";
		else $query = "UPDATE `users` SET name='$name' WHERE username='$username'";
		
		$result = mysqli_query($db,$query);
		if($result) {
					$_SESSION['data_insert_success'] = 'Successfully Updated';
					$_SESSION['data_insert_error'] = '';
					echo "<script>location='profile.php'</script>";
				}
				
	}	
}

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

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
	.error{
		color:blue;
	}
	</style>
  </head>
  <body>
<?php include './navbar.php';?>
<div class="container">
	<h1 class="text-primary">My Profile</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page">My Profile</li>
			</ol>
		</nav>
		
		
		<?php
			if(isset($_SESSION['data_insert_error'])) 
				echo '<div class="alert alert-warning alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
					.$_SESSION['data_insert_error'].'</div>';
		?>
		<?php unset($_SESSION['data_insert_error']);?>
		
		<div class="row">
			<div class="col-sm-8">
			<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
				<div class="form-group row" style="margin-bottom:10px;">
					<label for="ID" class="control-label col-sm-2">User Name :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="uname" id="ID" value="<?php echo $row['username'];?>" disabled />
						</div>	
                </div>
				<div class="form-group row" style="margin-bottom:0px;">
					<label for="Name" class="control-label col-sm-2">Name :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" id="Name" value="<?php echo $row['name'];?>"/>
                            <label class="error"><?php if(isset($input_error['name'])) echo "*".$input_error['name'];?></label>
						</div>	
                </div>
				<div class="form-group row" style="margin-bottom:0px;">
					<label for="oldpass" class="control-label col-sm-2">Password :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" name="oldpassword" id="oldpass" placeholder="Enter Current Password"/>
							<label class="error"><?php if(isset($input_error['pass'])) echo '*'.$input_error['pass']; ?> </label>
						</div>	
                </div>
				<div class="form-group row" style="margin-bottom:0px;">
					<label for="newpass" class="control-label col-sm-2">New Password :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" name="newpassword" id="newpass" placeholder="Enter New Password"/>
							<label class="error"><?php if(isset($input_error['pass'])) echo '*'.$input_error['pass']; ?> </label>
						</div>	
                </div>
				
				<br>
                <div class="row" style="margin-bottom:10px;">
					<div class="col-sm-2"></div>
                    <div class="col-sm-10"><input type="submit" value="Update Info" name="update-info" class="btn btn-primary"></input></div>
                </div>
			</form>		
			</div>
			<div class="col-sm-3">
				<a>
				<img class="rounded mx-auto d-block img-fluid" src="images/<?php echo $row['image'];?>"/>
				</a>
				<br>
				<?php
				if(isset($_POST['submit']))
				{
				$photo = explode('.',$_FILES['photo']['name']);
				$photo = end($photo);
				$photo_name = $username.'.'.$photo;
				
				$query = "UPDATE `users` SET image='$photo_name' WHERE username='$username'";
				$up = mysqli_query($db,$query);
				
				if($up)
				{
					move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo_name);
					echo "<script>location='profile.php'</script>";
				}
				}
				?>
				<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
					<label for="Photo">Photo</label>
					<input type="file" name="photo" required=""id="Photo"/>
					<input class="btn btn-primary" value="Update Profile" type="submit" name="submit" />
				</form>
				
			</div>
		</div>
	
</div>

<?php include './footer.php'?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>