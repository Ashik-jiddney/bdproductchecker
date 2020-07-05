<?php
session_start();
if (!isset($_SESSION['admin'])) {
  require "dao/adminlogin.dao.php";
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin Home| AmariSchool</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Admin Login | Amar iSchool</title>
	<!-- font-awesome-css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
			margin-top: 50px;
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
  
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	   <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	    	<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <?php echo $_SESSION['admin']; ?>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="logout.php">logout</a>
		          <!-- <a class="dropdown-item" href="#">Another action</a>
		          <a class="dropdown-item" href="#">Something else here</a> -->
		        </div>
		     </li>
	    </ul>
	      <!-- <a class="btn btn-outline-secondary my-2 my-sm-1 ml-auto" href="adminlogin.php"><?php echo $_SESSION['admin'] ?></a> -->
	  </div> 
	</div>
</nav>

<section class="section-gap container">
		<div class="row">
			<div class="col-sm-8 offset-sm-2">
				<div class="card bg-light">
					<div class="card-body">
						<!-- <h5 class="card-title bg-light text-dark py-3 text-center">ADMIN LOGIN</h5 -->
						<!-- <hr> -->
						<form action="sendEmail.php" method="post" enctype="multipart/form-data">
						<?php 
								if (isset($_GET['error'])) {
									echo '<label class="text-center" style="color: red;">
																<!-- If no candidate found -->
																Email Not Send
															</label>';

								}
													
								?>
							<div style="margin-bottom:10px; color: gray;">
							<label>Sender :</label>
                            <input class="form-control" type="text" name="sender" placeholder="Sender" value="" required=""/>
                        	</div>
                        	<div style="margin-bottom:10px; color: gray;">
							<label>Sender Name :</label>
                            <input class="form-control" type="text" name="sendername" placeholder="Sender Name" value="" required=""/>
                        	</div>
                        	<div style="margin-bottom:10px; color: gray;">
							<label>To :</label>
                            <input class="form-control" type="email" name="email" placeholder="To" value="" required=""/>
                        	</div>
                        	<div style="margin-bottom:10px; color: gray;">
							<label>CC :</label>
                            <input class="form-control" type="email" name="email" placeholder="CC" value=""/>
                        	</div>
                        	<div style="margin-bottom:10px; color: gray;">
							<label>Bcc :</label>
                            <input class="form-control" type="email" name="email" placeholder="Bcc" value=""/>
                        	</div>
                        	<div style="margin-bottom:10px; color: gray;">
							<label>Subject :</label>
                            <input class="form-control" type="text" name="subject" placeholder="Subject" value=""/>
                        	</div>
                        	<div style="margin-bottom:10px; color: gray;">
							<label>Body/Text :</label>
                            <input class="form-control" type="file" name="body-text" value=""/>
                        	</div>
                        	<div style="margin-bottom:10px; color: gray;">
							<label>Body/HTML :</label>
                            <input class="form-control" type="file" name="body-html" value=""/>
                        	</div>
                        	<div style="margin-bottom:10px; color: gray;">
							<label>Recipents :</label>
                            <input class="form-control" type="file" name="recipents" value=""/>
                        	</div>
                        	<div style="margin-bottom:10px; color: gray;">
							<label>Body :</label>
							<textarea class="form-control" name="body" placeholder="Message" rows="6"></textarea>
                        	</div>


                        	<div>
    	                        <input class="btn btn-outline-primary" type="submit" value="Submit" name="submit" />
                        	</div>
						</form>
						<hr>
						<a href="#">Forget Password?</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<div class="footer">
	<hr>
	<?php include './footer.php' ?>
</div>

 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </body>
 </html>