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
	<?php include 'navbar.php'; ?>

	<section class="section-gap container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="card bg-light">
					<div class="card-body">
						<h5 class="card-title text-center">ADMIN LOGIN</h5>
						<hr>
						<form action="" method="">
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