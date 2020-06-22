<?php 
session_start();
if (!isset($_SESSION['admin'])) {
  require "dao/adminlogin.dao.php";
}
//echo $_SESSION['adminEmail'] . "<br>";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Admin | Amar iSchool Interview</title>
    <link rel="stylesheet" href="style/style.css">

 <!-- new satrt for Table-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- new end For Table-->

	<style type="text/css">
	
        th,td{
            text-align:center;
        }
	</style>
</head>
<body>
	<?php include 'admin-nav.php'; ?>
    <section id='admin-home' class="container-fluid">
        <div class='header'>
            <h1 class='display-4 text-center text-dark mb-5' >Admin Home</h1>
        </div>
        <div class='row'>
            <div class="col-md-2">
            <a href="adddata.php">
            <button class='btn btn-primary text-light '>Add Data</button> </a>
            </div>
            <div class=" col-md-2">
            <form action="#" method="post">
            <input type='file'>
            <button type="submit" class='btn btn-info mt-2'>Upload</button>
            </form>
                
            </div>
        </div>
       
        <div class="dropdown mt-5">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
    Category
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Sort by Result</a>
    <a class="dropdown-item" href="#">Sort 2</a>
    <a class="dropdown-item" href="#">Sort 3</a>
  </div>
</div>

        <!-- Table-Content -->
        <div class='mt-5'>
        <table id= "dataTable" class='table table-bordered'>
        <thead class='thead-light'>
        
  <tr>
    <th colspan='4'>General Info</th>
    <th colspan="7">Interview Info</th>
    <th colspan='2'>Result</th>
    <th colspan="2">Edit/Delete</th>
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
                        <th>Inerview ID</th>
                        <th>Inerview Pass</th>
                        <th>Interviw Status</th>
                        <th>Status</th>
                        <th>Team</th>
                        <th>Edit</th>
                        <th>Delete</th>
  </tr>
  </thead>
  <tbody>
      <?php 
         require 'dao/allDataFetching.dao.php';
         while ($row = mysqli_fetch_assoc($result)) {
            $splitTimeStamp = explode(" ", $row['interview_time']);
            $interview_date = $splitTimeStamp[0];
            $interview_time = $splitTimeStamp[1];
         echo '
            <tr>
                        <td>'.$row['idno'].'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['birthdate'].'</td>
                        <td>'.$interview_date.'</td>
                        <td>'.$interview_time.'</td>
                        <td>'.$row['interview_platform'].'</td>
                        <td><a href="'.$row['interview_link'].'">Interview Link</a></td>
                        <td>'.$row['interview_id'].'</td>
                        <td>'.$row['interview_pass'].'</td>
                        <td>'.$row['interview_status'].'</td>
                        <td>'.$row['result_status'].'</td>
                        <td>'.$row['result_team'].'</td>
                        <td><a href="editdata.php?idno='.base64_encode($row['idno']).'" class="text-warning">Edit</a></td>
                        <td><a href="deletedata.php?idno='.base64_encode($row['idno']).'" class="text-danger">Delete</a></td>
            </tr>
         ';
         }

        ?>
  </tbody>
</table>
    
        

            <!-- update database -->
            <div class="d-flex justify-content-center">
                <button id='update_database' class='btn btn-danger text-light'>Update Data</button>
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

<!-- Table Jquery Part Start -->
<script>
$(document).ready(function() {
    $('#dataTable').DataTable();
} );

</script>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<!-- Table Jquery Part End -->

</body>
</html>
