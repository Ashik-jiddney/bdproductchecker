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
            <h1 class='display-4 text-center text-dark mb-5' >Admin Home <sup class='text-danger h3'>Extract</sup></h1>
        </div>
        <div class='row'>
            <div class="col-md-2">
            <!-- <a href="adddata.php">
            <button class='btn btn-primary text-light '>Add Data</button> </a>
            < -->
            </div>
            <div class=" col-md-2">
            <!-- <form action="admin_home.php" method="post" enctype="multipart/form-data">
            <input type='file'name='fileToUpload'>
            <button id='upload' type="submit" class='btn btn-info mt-2' name='uploadfile'>Upload</button>
            </form> -->
          
            <?php
            error_reporting(~E_NOTICE);
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                if($uploadOk==1){

                  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                }
                 


            ?>
                
            </div>
        </div>
       
       <!-- Filter options -->
        <!-- <div class="dropdown mt-5">
          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
            Category
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Sort by Result</a>
            <a class="dropdown-item" href="#">Sort 2</a>
            <a class="dropdown-item" href="#">Sort 3</a>
          </div>
        </div> -->

        <!-- Table-Content -->
        <?php
            if (isset($_GET['filename'])) {
              require_once "parsingdata.php";
              require_once "dao/preupload.dao.php";
            }
        ?>

            
                
<div class='mt-5'>
        <table class='table table-bordered'>
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
         require 'dao/allPreDataFetching.dao.php';
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
                        <td>'.$row['interview_link'].'</td>
                        <td>'.$row['interview_id'].'</td>
                        <td>'.$row['interview_pass'].'</td>
                        <td>'.$row['interview_status'].'</td>
                        <td>'.$row['result_status'].'</td>
                        <td>'.$row['result_team'].'</td>
                        <td><a href="deletepredata.php?idno='.base64_encode($row['idno']).'" class="text-danger">Delete</a></td>
            </tr>
         ';
         
                        // <td><a href="editpredata.php?idno='.base64_encode($row['idno']).'" class="text-warning">Edit</a></td>
         }

        ?>
  </tbody>
</table>
    
        

            <!-- update database
            <div class="d-flex justify-content-end">
                <button id='update_database' class='btn btn-danger text-light'>Update Data</button>
            </div> -->
        </div>

          <div class='row mt-5'>
            <div class='col-md-6 d-flex justify-content-start'>
            <form action="cancelUpdate.php" method="post">
              <button type='submit' name='updateToDb' id='cancel-update' class='btn btn-secondary text-light mx-2'>Cancel</button>
            </form>
            </div>

            <div class='col-md-6 d-flex justify-content-end'>
            <form action="updatedb.php" method="post">
              <button type='submit' name='updateToDb' id='update_database' class='btn btn-danger text-light'>Update Data</button>
            </form>
            </div>
          </div>
            
            
            <!-- <div class="row"> -->
            <!-- cancel
            <div class="col-md-6 d-flex justify-content-start"><a href='admin_home.php' id='cancel-update' class='btn btn-secondary text-light mx-2'>Cancel</a></div> -->
            <!-- update database -->
            <!-- <div class="col-md-6 d-flex justify-content-end"><a href='admin_home.php' id='update_database' class='btn btn-danger text-light'>Update Data</a></div>
              
             -->
              
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

</body>
</html>
