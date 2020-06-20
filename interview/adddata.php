
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="a.css">
	<title>Admin | Amar iSchool Interview</title>
	<style type="text/css">
		body{
			/*background-color: #f8f9fa !important;*/
		}
		.section-gap{
			margin-top: 80px;
			margin-bottom: 30px;
        }
        th,td{
            text-align:center;
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
        <!-- <ul class="navbar-nav mr-auto">
        </ul> -->
          <a class="btn btn-danger my-2 my-sm-1 ml-auto" href="adminlogin.php">LOGOUT</a>
      </div>
    </div>
    </nav>

    <section class="section-gap">
		<div class="container">
			<div class="row">
			  <div class="col-sm-2"></div>
				<div class="col-sm-8">
					<div class="card bg-light">
						    <div class="card-body">
							    <form action="" method="" enctype="">
		                            <h2 class="text-center" style="margin-bottom:20px;" >Candidate Information</h2>

			                        <div class="form-group row" style="margin-bottom:10px;">
			                            <label for="" class="control-label col-sm-3">ID: </label>
			                            <div class="col-sm-9">
			                                <input class="form-control" type="" name="" id="" placeholder="1111"/>
			                            </div>
			                        </div>
			                        <div class="form-group row" style="margin-bottom:10px;">
			                            <label for="" class="control-label col-sm-3">Name: </label>
			                            <div class="col-sm-9">
			                                <input class="form-control" type="" name="" id="" placeholder="Jone Doe"/>
			                            </div>
			                        </div>
			                        <div class="form-group row" style="margin-bottom:10px;">
			                            <label for="" class="control-label col-sm-3">Email: </label>
			                            <div class="col-sm-9">
			                                <input class="form-control" type="" name="" id="" placeholder="a@gmail.com"/>
			                            </div>
			                        </div>
			                        <div class="form-group row" style="margin-bottom:10px;">
			                            <label for="" class="control-label col-sm-3">Date of Birth: </label>
			                            <div class="col-sm-9">
			                                <input class="form-control" type="" name="" id="" placeholder="19/06/2020"/>
			                            </div>
			                        </div>
			                        <div class="form-group row" style="margin-bottom:10px;">
			                            <label for="" class="control-label col-sm-3">Interview Date: </label>
			                            <div class="col-sm-9">
			                                <input class="form-control" type="" name="" id="" placeholder="19/06/2020"/>
			                            </div>
			                        </div>
			                        <div class="form-group row" style="margin-bottom:10px;">
			                            <label for="" class="control-label col-sm-3">Interview Time: </label>
			                            <div class="col-sm-9">
			                                <input class="form-control" type="" name="" id="" placeholder="9 AM"/>
			                            </div>
			                        </div>
			                        <div class="form-group row" style="margin-bottom:10px;">
			                            <label class="control-label col-sm-3">Interview Status: </label>
			                            <div class="col-sm-9">
			                                <input class="form-control" type="" name="" id="" placeholder="Pending"/>
			                            </div>
			                        </div>
			                        <div class="form-group row" style="margin-bottom:10px;">
			                            <label class="control-label col-sm-3">Interview Platform: </label>
			                            <div class="col-sm-9">
			                                <input class="form-control" type="" name="" id="" placeholder="Zoom"/>
			                            </div>
			                        </div>
			                        <div class="form-group row" style="margin-bottom:10px;">
			                            <label for="" class="control-label col-sm-3">Interview Link: </label>
			                            <div class="col-sm-9">
			                                <input class="form-control" type="" name="" id="" placeholder="Interview Link"/>
			                            </div>
			                        </div>
			                        <div class="form-group row" style="margin-bottom:10px;">
			                            <label for="" class="control-label col-sm-3">Zoom ID: </label>
			                            <div class="col-sm-9">
			                                <input class="form-control" type="" name="" id="" placeholder="1000000"/>
			                            </div>
			                        </div>
			                        <div class="form-group row" style="margin-bottom:10px;">
			                            <label for="" class="control-label col-sm-3">Zoom Pass: </label>
			                            <div class="col-sm-9">
			                                <input class="form-control" type="" name="" id="" placeholder="3reBV"/>
			                            </div>
			                        </div>
			                        <div class="form-group row" style="margin-bottom:10px;">
			                            <label for="" class="control-label col-sm-3">Status: </label>
			                            <div class="col-sm-9">
			                                <input class="form-control" type="" name="" id=""placeholder="Selected/Pending"/>
			                            </div>
			                        </div>
			                        <div class="form-group row" style="margin-bottom:10px;">
			                            <label for="" class="control-label col-sm-3">Team: </label>
			                            <div class="col-sm-9">
			                                <input class="form-control" type="" name="" id="" placeholder="Team Name"/>
			                            </div>
			                        </div>
			                        <div class="form-group row" style="margin-bottom:10px;">
			                        	<div class="col-sm-3"></div>
			                        	<div class="col-sm-9">
			                        		<input type="submit" value="Add To Database" name="submit" class="btn btn-info"></input>
			                        	</div>
			                        </div>
		                        </form> 
		                    </div> 
					    </div>
					    <div class="row" style="margin-bottom:20px;"></div>          
			        </div>
		        </div>
		    </div>
    </section>

<div class="container footer" style="text-align:center;margin-top:100px;">
	<hr>
	<?php include './footer.php';?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="a.js"></script>

  
</body>
</html>
