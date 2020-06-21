<?php 
session_start();
if (isset($_SESSION['admin'])) {
	header("Location: /interview/admin_Home.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Admin Login | Amar iSchool</title>
	<style type="text/css">
		html, body{ height:100%; margin:0;}
	body{
	  display:flex;
	  flex-direction:column;
	}
	footer{
		margin-top:auto;
		margin-bottom:10px;
	}
		.section-gap{
			margin-top: 80px;
			margin-bottom: 30px;
		}
	</style>
</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php">
        <img src="images/logo-dark.png" width="100" height="40" alt="">
      </a>
  <!--
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
      <a class="btn btn-outline-secondary my-2 my-sm-1 ml-auto" href="adminlogin.php">ADMIN PANEL</a>
  </div> -->
</div>
</nav>

	<section class="section-gap container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="card bg-light">
					<div class="card-body">
						<h5 class="card-title text-center">ADMIN LOGIN</h5>
						<hr>
						<form action="admin_Home.php" method="post">
						<?php 
								if (isset($_GET['error'])) {
									echo '<label class="text-center" style="color: red;">
																<!-- If no candidate found -->
																Wrong Username/Email or Password
															</label>';

								}
													
								?>
							<div style="margin-bottom:10px; color: gray;">
							<span >Username/E-mail :</span>
                            <input class="form-control" type="text" name="username" placeholder="Username/E-mail" value="" required=""/>
                        	</div>
                        	<div style="margin-bottom:10px;color: gray;">
                        	<span >Password :</span>
                            <input class="form-control" type="password" id="pass" name="password" placeholder="Password" value="" required="" />
                        	</div>
                        	<div style="margin-bottom:10px;color:grey">
							<input  type="checkbox" onclick="change()">
							<label class="txt">Show Password</label>
                        	</div>
                        	<div>
    	                        <input class="btn btn-outline-primary" type="submit" value="Login" name="submit" />
                        	</div>
						</form>
						<hr>
						<a href="#">Forget Password?</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="container" style="text-align:center;margin-top:50px;">
	<hr>
	<?php include './footer.php'; ?>
	</footer>

	<script>
     	function change(){
     		var pass  = document.getElementById('pass');
     		if (pass.type == "password") {
     			pass.type= 'text';
     		}else{
     			pass.type= 'password';
     		}
     	}
     	
     </script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>