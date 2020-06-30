<?php 
session_start();
	if (!isset($_SESSION['admin'])) {
  require "dao/adminlogin.dao.php";
}

require 'dao/singleDataFetch.dao.php';

 ?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <title>Admin | Amar iSchool Interview</title>
    <!-- font-awesome-css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
    body {
        /*background-color: #f8f9fa !important;*/
    }

    .section-gap {
        margin-top: 80px;
        margin-bottom: 30px;
    }

    th,
    td {
        text-align: center;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo-dark.png" width="100" height="40" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <a class="btn btn-outline-secondary my-2 my-sm-1 ml-auto" href="adminlogin.php">ADMIN PANEL</a>
                    </li>
                    &nbsp
                    <li>
                        <a class="btn btn-danger my-2 my-sm-1 ml-auto" href="logout.php">LOGOUT</a>
                    </li>
                </ul>

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
                            <form action="dao/update.dao.php" method="POST" enctype="">
                                <h2 class="text-center" style="margin-bottom:20px;">Edit Information</h2>

                                <h4 class="text-center">General Information</h4>
                                <div class="form-group row" style="margin-bottom:10px;">
                                    <label for="ID" class="control-label col-sm-3">ID: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="ad_idno" id="ID"
                                            value="<?php echo $idno; ?>" required="" />
                                    </div>
                                </div>
                                <div class="form-group row" style="margin-bottom:10px;">
                                    <label for="Name" class="control-label col-sm-3">Name: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="ad_name" id="Name"
                                            value="<?php echo $name; ?>" required="" />
                                    </div>
                                </div>
                                <div class="form-group row" style="margin-bottom:10px;">
                                    <label for="Email" class="control-label col-sm-3">Email: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="ad_email" id="Email"
                                            value="<?php echo $email; ?>" required="" />
                                    </div>
                                </div>
                                <div class="form-group row" style="margin-bottom:10px;">
                                    <label for="Bdate" class="control-label col-sm-3">Date of Birth: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="ad_birthdate" id="picker"
                                            value="<?php echo $birthdate; ?>" required="" />
                                    </div>
                                </div>
                                <h4 class="text-center">Interview Information</h4>
                                <!-- <div class="form-group row" style="margin-bottom:10px;">
			                            <label for="" class="control-label col-sm-3">Interview Date: </label>
			                            <div class="col-sm-9">
			                                <input class="form-control" type="" name="" id="" placeholder="19/06/2020"/>
			                            </div>
			                        </div> -->
                                <div class="form-group row" style="margin-bottom:10px;">
                                    <label for="InterviewTime" class="control-label col-sm-3">Interview Time</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="ad_interview_time" id="picker2"
                                            value="<?php echo $interview_date_time; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row" style="margin-bottom:10px;">
                                    <label for="interview_platform" class="control-label col-sm-3">Interview Platform:
                                    </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="ad_interview_platform"
                                            id="interview_platform" value="<?php echo $interview_platform; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row" style="margin-bottom:10px;">
                                    <label for="interview_link" class="control-label col-sm-3">Interview Link: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="ad_interview_link"
                                            id="interview_link" value="<?php echo $interview_link; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row" style="margin-bottom:10px;">
                                    <label for="interview_id" class="control-label col-sm-3">Interview ID: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="ad_interview_id" id="interview_id"
                                            value="<?php echo $interview_id; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row" style="margin-bottom:10px;">
                                    <label for="interview_pass" class="control-label col-sm-3">Interview Pass: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="ad_interview_pass"
                                            id="interview_pass" value="<?php echo $interview_pass; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row" style="margin-bottom:10px;">
                                    <label for="interview_status" class="control-label col-sm-3">Interview Status:
                                    </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="ad_interview_status"
                                            id="interview_status" value="<?php echo $interview_status; ?>" />
                                    </div>
                                </div>
                                <h4 class="text-center">Result</h4>
                                <div class="form-group row" style="margin-bottom:10px;">
                                    <label for="result_status" class="control-label col-sm-3">Status: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="ad_result_status"
                                            id="result_status" value="<?php echo $result_status; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row" style="margin-bottom:10px;">
                                    <label for="result_team" class="control-label col-sm-3">Team: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="ad_result_team" id="result_team"
                                            value="<?php echo $result_team; ?>" />
                                    </div>
                                </div>
                                <div class="form-group row" style="margin-bottom:10px;">
                                    <div class="col-sm-9 offset-sm-3">
                                    <input type="submit" value="Update" name="submit" class="btn btn-info"></input>
                                        <a href="admin_Home.php" class="btn btn-secondary text-light">Cancel</a>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="style/main.js"></script>

    <script>
    $('#picker').datetimepicker({
        timepicker: false,
        datepicker: true,
        //format : 'Y-m-d',
    });
    $('#picker2').datetimepicker({
        timepicker: true,
        datepicker: true,
        //format	: 'Y-m-d h:m:s',
    })
    </script>


</body>

</html>