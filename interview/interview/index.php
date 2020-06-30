<!DOCTYPE html>
<html>
<head>


	<link name="favicon" type="image/x-icon" href="https://amarischool.com/uploads/system/favicon.ico"
        rel="shortcut icon">
    <link rel="favicon" href="https://amarischool.com/assets/frontend/default/img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="https://amarischool.com/assets/frontend/default/img/icons/icon.png">
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<title>Home | Amar iSchool Interview</title>
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
						<h5 class="card-title text-center">CANDIDATE LOGIN</h5>
						<hr>
						<form action="candidateinfo.php" method="post">
							<?php 
								if (isset($_GET['error'])) {
									echo '<label class="text-center" style="color: red;">
																<!-- If no candidate found -->
																Candidate not found
															</label>';

								}
													
								?>
							<div style="margin-bottom:10px; color: gray;">
							<span >E-mail :</span>
                            <input class="form-control" type="email" name="email" placeholder="E-mail" value="" required=""/>
                        	</div>
                        	<div style="margin-bottom:10px; color: gray;">
                        		<span>  Birth Date :</span>
                        		<input class="form-control" type="text"  id="picker" name="birthdate" />
                        	</div>
                        	<div>
    	                        <input class="btn btn-outline-primary" type="submit" value="Submit" name="submit" />
                        	</div>

						</form>
						<!-- <hr>
						<label>Not found</label> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer class="container" style="text-align:center;margin-top:50px;">
	<hr>
	<?php include './footer.php'; ?>
	</footer>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript" src="style/main.js"></script>

<script>
$('#picker').datetimepicker({
	timepicker : false,
	datepicker : true,
	format : 'Y-m-d',
	value : '1995-6-15'
});
</script>
</body>
</html>