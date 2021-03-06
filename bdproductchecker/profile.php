<?php
require_once './dbconf.php';
include './myclass.php';
session_start();

$object = new sessionChecking();
if(!$object->S_C()){ 
header('location: login.php');
}
$session_user =  $_SESSION['user_name'];		
$result = mysqli_query($db,"SELECT * FROM `users` WHERE `username`='$session_user'");
$row = mysqli_fetch_assoc($result);

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
<div class="content">
	<h1 class="text-primary">My Profile</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page">My Profile</li>
			</ol>
		</nav>
		
		<div class="row">
			<div class="col-sm-6">
				<table class="table table-bordered">
						<tr>
							<td>Name</td>
							<td><?php echo ucwords($row['name']);?></td>
						</tr>
						<tr>
							<td>ID No.</td>
							<td><?php echo ucwords($row['username']);?></td>
						</tr>
				</table>
				<a class="btn btn-primary pull-right" href="update-profile.php">Edit Profile</a>
			</div>
			<div class="col-sm-3">
				<a>
				<img class="rounded mx-auto d-block img-fluid" style="object-fit:cover;" src="images/<?php echo $row['image'];?>"/>
				</a>
			</div>
		</div>
</div>
</div>

<?php include './footer.php'?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>