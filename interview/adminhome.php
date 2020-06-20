<!DOCTYPE html>
<html>
<head>
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
          <a class="btn btn-danger my-2 my-sm-1 ml-auto" href="logout.php">LOGOUT</a>
      </div>
    </div>
    </nav>

    <section id='admin-home' class="container">
        <div class='header'>
<!--             <button id='logout' class='btn btn-danger' style='margin-left:100%'>Logout</button>
 -->            <h2 class='display-4 text-center text-secondary' >Admin Home</h2><hr>

        </div>
        <div class='row'>
            <div class="col-md-2">
            <a href="adddata.php" class='btn btn-primary text-light'>Add Data</a>
            </div>
            <div class="col-md-3">
            <button class='btn btn-info' type="file">Option 1</button>
            </div>
        </div>
        <div class='row mt-2'>
            <div class="col-md-2">
            </div>
            <div class="col-md-3">
            <button class='btn btn-info' type="file">Option 2</button>
            </div>
        </div>
        <div class='row mt-2'>
            <div class="col-sm-12 col-md-2"></div>
            <div class=" col-sm-12 col-md-3">
                <button class='btn btn-info' type="file">Option 3</button>
            </div>
        </div>

        <!-- Table-Content -->
    </section>

    <div class="container-fluid mt-5">
        <div class="row col-sm-12">
            <table class="table table-bordered">
                <thead class='thead-light'>
                    <tr>
                        <th colspan="4">General</th>
                        <th colspan="6">Interview Information</th>
                        <th colspan="2">Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Birth Date</th>
                        <th>Interview Date</th>
                        <th>Interview Time</th>
                        <th>Interview Platform</th>
                        <th>Interview Link</th>
                        <th>Interview ID</th>
                        <th>Inerview Pass</th>
                        <th>Interview Status</th>
                        <th>Team</th>
                        <th>Edit/Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>19/06/2020/</td>
                        <td>25/06/2020</td>
                        <td>8:30pm</td>
                        <td>Zoom</td>
                        <td>hgjhu.com</td>
                        <td>456321456</td>
                        <td>gf5ghh</td>
                        <td>Pending</td>
                        <td>Abc</td>
                        <td>
                        <a href='editdata.php' class='text-dark'>Edit</a>/
                        <a href='delete.php' class='text-danger'>Delete</a>
                        </td>

                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>19/06/2020/</td>
                        <td>25/06/2020</td>
                        <td>8:30pm</td>
                        <td>Zoom</td>
                        <td>hgjhu.com</td>
                        <td>456321456</td>
                        <td>gf5ghh</td>
                        <td>Pending</td>
                        <td>Abc</td>
                        <td>
                        <a href='editdata.php' class='text-dark'>Edit</a>/
                        <a href='delete.php' class='text-danger'>Delete</a>
                        </td>

                    </tr>
                </tbody>
            </table>

            <!-- update database -->
            <div class="text-center">
                <button id='update_database' class='btn btn-danger'>Update Data</button>
            </div>
        </div>
    </div>
	
<div class="container footer" style="text-align:center;margin-top:100px;">
	<hr>
	<?php include './footer.php';?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="a.js"></script>

</body>
</html>