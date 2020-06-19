<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="a.css">
	<title>Home | Amar iSchool Interview</title>
	<style type="text/css">
		body{
			/*background-color: #f8f9fa !important;*/
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
						<h5 class="card-title text-center">Given Your Email & Birth Date</h5>
						<hr>
						<form action="" method="">
							<div style="margin-bottom:10px; color: gray;">
							<span >E-mail :</span>
                            <input class="form-control" type="email" name="email" placeholder="E-mail" value="" required=""/>
                        	</div>
                        	<div style="margin-bottom:10px; color: gray;">
                        		<span>Birth Date :</span>
                        		<input class="form-control" type="text"  id="picker" />
                        	</div>
                        	<div style="margin-bottom:0px;">
    	                        <input class="btn btn-outline-info" type="submit" value="Submit" name="submit" />
                        	</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript" src="a.js"></script>

<script>
$('#picker').datetimepicker({
	timepicker : false,
	datepicker : true,
	format : 'Y-m-d',
	value : '20-5-2020'
});
</script>
</body>
</html>