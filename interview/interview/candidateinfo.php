<?php 
require "dao/candidateinfo.dao.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Candidate Info | Amar iSchool</title>
    <!-- font-awesome-css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
    html,
    body {
        height: 100%;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    .firstWidth {
        width: 50%;
    }

    .secondWidth {
        width: 50%;
    }

    footer {
        margin-top: auto;
        margin-bottom: 10px;
    }

    .section-gap {
        margin-top: 80px;
        margin-bottom: 30px;
    }

    .section-gap {
        margin-top: 20px;
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

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- <ul class="navbar-nav mr-auto">
    </ul> -->
                <?php 
    	if (isset($_SESSION['admin'])) {
    		echo '<a class="btn btn-outline-secondary my-2 my-sm-1 ml-auto" href="adminlogin.php">ADMIN PANEL</a>';
    	}
     ?>
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
                            <h4 class="card-title text-center">CANDIDATE INFORMATION</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <table class="table bg-white" style="width:100%">
                                        <tr>
                                            <td class="firstWidth">ID</td>
                                            <td class="secondWidth"><?php echo $idno; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td><?php echo $name; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?php echo $email; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Birth Date</td>
                                            <td><?php echo $birthdate; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- General 4 ta eikhane -->
                            <!-- <div class="row">
								<div class="col-sm-4 "><h5>ID :</h5></div>
								<div class="col-sm-8"><h5>B-10281290483</h5></div>
							</div>
							<div class="row">
								<div class="col-sm-4"><h5>Name :</h5></div>
								<div class="col-sm-8"><h5>Md. Mahbubur Rahman</h5></div>
							</div>
							<div class="row">
								<div class="col-sm-4"><h5>E-mail :</h5></div>
								<div class="col-sm-8"><h5>a@gmail.com</h5></div>
							</div>
							<div class="row">
								<div class="col-sm-4"><h5>Birth Date :</h5></div>
								<div class="col-sm-8"><h5>1-1-2000</h5></div>
							</div> -->
                            <hr>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <button class="btn btn-outline-info mb-3">Interview Information</button>
                                    <table class="table bg-white">
                                        <tr>
                                            <td class="firstWidth">Interview Date</td>
                                            <td class="secondWidth"><?php echo $interview_date; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Interview Time</td>
                                            <?php 
													function to12HourFormat($time) {
														$splitTime = explode(":", $time);
														$m = "AM";
														$hour = (int) $splitTime[0];
														$minute = (int) $splitTime[1];
														$second = (int) $splitTime[2];
														if ($hour >= 12) {
															$m = "PM";
														}
														$hour = $hour % 12;
														if ($hour == 0) $hour = 12;
														echo str_pad($hour, 2, "0", STR_PAD_LEFT);
														echo ":";
														echo str_pad($minute, 2, "0", STR_PAD_LEFT);
														echo " " . $m;
													}
											?>
                                            <td><?php echo to12HourFormat($interview_time); ?></td>
                                        </tr>
                                        <tr>
                                            <td class="firstWidth">Interview Platform</td>
                                            <td class="secondWidth"><?php echo $interview_platform; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Interview Link</td>
                                            <td> <a href="<?php echo $interview_link; ?>" target="_blank">Interview
                                                    Link</a></td>
                                        </tr>
                                        <tr>
                                            <td>Meeting ID</td>
                                            <td><?php echo $interview_id; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Meeting Password</td>
                                            <td><?php echo $interview_pass; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- eikhane  Interview Info er gula  -->
                            <!--

							<div class="bg-white">
							 <div class="row">
								<div class="col-sm-4"><h5>Interview Date :</h5></div>
								<div class="col-sm-8"><h5>1-1-2020</h5></div>
							</div>
							<div class="row">
								<div class="col-sm-4"><h5>Interview Time :</h5></div>
								<div class="col-sm-8"><h5>134234790</h5></div>
							</div>
							<div class="row">
								<div class="col-sm-4"><h5>Interview Link :</h5></div>
								<div class="col-sm-8"><h5>134234790</h5></div>
							</div>
							<div class="row">
								<div class="col-sm-4"><h5>Meeting ID :</h5></div>
								<div class="col-sm-8">134234790></div>
							</div>
							<div class="row">
								<div class="col-sm-4"><h5>Meeting Password :</h5></div>
								<div class="col-sm-8"><h5>134234790</h5></div>
							</div>
							</div>
							 -->
                            <hr>

                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <button class="btn btn-outline-info mb-3">Result </button>
                                    <table class="table bg-white">
                                        <tr>
                                            <td class="firstWidth">Status</td>
                                            <td class="secondWidth"><?php echo $result_status; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Team</td>
                                            <td><?php echo $result_team; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-10 offset-sm-1">
                                    <?php 
                                        if(isset($_SESSION['admin'])){
                                            echo '<a class="btn btn-primary" href="editdata.php?idno='.base64_encode($row['idno']).'">Edit Data</a>
                                            <a href="admin_Home.php" class="btn btn-secondary text-light">Back to Database</a>';
                                        }
                                    ?>
                                </div>  
                            </div>

                            <!-- 
							<div class="row">
								<div class="col-sm-4"><h5>Status :</h5></div>
								<div class="col-sm-8"><h5>Pending/Selected/...</h5></div>
							</div>
							<div class="row">
								<div class="col-sm-4"><h5>Team :</h5></div>
								<div class="col-sm-8"><h5>......</h5></div>
							</div> -->
                        </div>
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
    function change() {
        var pass = document.getElementById('pass');
        if (pass.type == "password") {
            pass.type = 'text';
        } else {
            pass.type = 'password';
        }
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</body>

</html>