<!DOCTYPE html>
<html lang="en" class=" sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox picture srcset webworkers">
<head>
	<title>Join Us | Amar iSchool</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Pioneer Alpha">
	<meta name="keywords" content="LMS,Learning Management System,Amar iSchool,Pioneer Alpha,Education,Online Education,Live Education,Job,Software Engineering,Engineering">
	<meta name="description" content="Amar iSchool is an online educational platform. You can find here various skill development engineering courses which can add values to your career. Amar iSchool provides you with the most fascinating Live Classroom feature to connect with expert mentors and learn from them directly. ">
	
	<link name="favicon" type="image/x-icon" href="https://amarischool.com/uploads/system/favicon.ico" rel="shortcut icon">
	<link rel="favicon" href="https://amarischool.com/assets/frontend/default/img/icons/favicon.ico">
	<link rel="apple-touch-icon" href="https://amarischool.com/assets/frontend/default/img/icons/icon.png">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://amarischool.com/assets/frontend/default/css/main.css">
    <link rel="stylesheet" href="https://amarischool.com/assets/frontend/default/css/responsive.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	   <div  class="container-fluid">
		  <a class="navbar-brand mr-auto" href="https://www.amarischool.com/">
		    <img src="images/logo-dark.png"width="100" height="40" alt="Amar iSchool">
		  </a>

		  <button class="navbar-toggler order-first" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  	<ul class="navbar-nav mr-auto">
    		</ul>
		      <a  class="btn btn-info my-2 my-sm-1 ml-auto" href="http://join.amarischool.com/interview">Interview Tracking</a>
		  </div>
       </div>
    </nav>
    
    
		<style>		
			:root {
			/* Color of the background */
			  --bodycolor: #efefef;

			/* Width of the columsn */
			--boxwidth: 340px;
			/* Height of the rows */
			--boxheight: 520px;

			/* Width of the bubble (it's always a circle, width and height are the same) */
			 --icon-box-dimensions: 250px;
						  
			/* DON'T TOUCH THE VALUES OF THIS VARIABLE! */
			--icon-box-dimensions-half: calc(var(--icon-box-dimensions) /2);
						  
			/* How far from the top is the position of the bubble? */
			--icon-offset: -10%;
						  
			/* Size of the font */
			--content-fontsize: 1.1em;

			/* Define a accent color, make sure it's readable */
			--accentcolor: #ec5252;
						  
			/* backgroundcolor and text color of the button, unhovered.
			/* Color in hovered state is the accent color */ */
			--btntext-background : rgba(255,255,255,0.1);
			--btntext-color : #eee;
			}

			/* grid-container */
			.containernew {
						  margin: 0 auto;
						  padding: 2%;
						  max-width: 100%;
						  height: auto;
						  position: relative;
						  display: grid;
						  grid-template-columns: repeat(auto-fit, minmax(var(--boxwidth), 1fr));
						  grid-auto-rows: minmax(var(--boxheight), 1fr);
						  grid-gap: 30px;
						  justify-content: center;
						  box-sizing: border-box;
						}

						/* this is the card selecter */
			.box {
						  position: relative;
						  display: block;
						  overflow: hidden;
						  box-sizing: border-box;
						  background: #efefef;
						  transition: 0.5s;
						}

			.box:hover {
						  cursor: pointer;
						  	border-bottom: 1px solid rgba(0, 0, 0, 0.2);
						  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
						  transform: translateY(-4px);
						}

			.img-box {
						position: absolute;
						  object-fit: cover;
						  top: 0;
						  left:0;
						  width: 100%;
						  height: 100%;
						  transition: 0.35s cubic-bezier(.15,.78,.46,.8);
						  z-index: 1; 
						}

			.img-box img {
						  object-fit: cover;
						  width: 100%; height: 100%;
						  transition: all .5s ease-in-out;
						}

			.img-box::after {
						/*   extract the title of the article */
						  content: attr(title);
						  font-family:"Lato";
						  position: absolute;
						  left: 50%;
						  transform: translate(-50%,-50%);
						  top: 111%;
						  z-index: 100;
						  text-align:center;
						  font-size: 1.05em;
						  font-weight: 700;
						  width:250%;
						  opacity: 1;
						  border-radius: 50%;
						  height: 45.5%;
						  padding-top: 27px;
						  background: #efefef;
						  transition: 0.2s;
						  color: #666;
						  letter-spacing: -.6px;
						  box-shadow: inset 0px 0 3px 3px rgba(0,0,0,0.3)
						}

			.img-box::before {
						  position: absolute;
						  content: attr(data-author);
						  bottom: 2.5%;
						  font-weight: 400;
						  color: white;
						  z-index: 2001;
						  text-align: center;
						  width: 100%;
						  color:var(--accentcolor);
						    font-variant: small-caps;
						  text-transform: lowercase;
						  font-size: 0.8em;
						  opacity: 1;
						}

			.containernew .box:hover .img-box {

						  top: var(--icon-offset);
						  left: calc(50% - var(--icon-box-dimensions-half));
						  width: var(--icon-box-dimensions);
						  height: var(--icon-box-dimensions);
						}
			.containernew .box:hover .img-box:after, .containernew .box:hover .img-box:before
						{
						  opacity: 0;
						}

			.containernew .box:hover .img-box img {
						  
						  border: 2px solid white;
						    border-radius: 50%;
						  filter: saturate(70%) contrast(120%);
						}

			.box:hover .content {
						  bottom: 0;
						    opacity: 1;
						         transform: scale(1);
						}   

			.content {
						  position: absolute;
						  opacity:1;
						  bottom: -50%;
						  width: 100%;
						  height: 60%;
						  padding: 3em;
						  font-size: 0.8em;
						  text-align: center;
						  line-height: 1.4;
						  transition: bottom 0.35s cubic-bezier(.15,.78,.46,.8), transform 0.3s;
						  color: #000;
						  opacity: 0;
						  
						}

			.content h2 {
						  position: relative;
						  font-size: 1.4em;
						  font-weight: 700;
						}
			.content h3 {
						  font-size: 1em;
						  text-transform: lowercase;
						  font-variant: small-caps;
						  font-weight: 700;
						  margin-bottom: 0.5em;
						  color: var(--accentcolor);
						  margin-bottom: 0.5em;
						  
						}

			.content p {
						  font-size: var(--content-fontsize);
						  font-weight: 100;
						  margin-bottom: 0.25em;
						  
						}  

			button.ghost-btn {
						  position: absolute;
						  z-index: 10;
						  margin-top: 1em;
						  text-align: center;
						  border: 0;
						  border-radius: 24px;
						  padding: 12px 44px;
						  background: var(--btntext-background);
						  color: var(--accentcolor);
						  border: 1px solid var(--accentcolor);
						  font-weight: 100;
						  transition: 1s;
						  font-size: 1.2em;
						  bottom:5%;
						  left: 50%;
						  transform: translate(-50%,-50%);
						  
						}

			button.ghost-btn:hover {
						  cursor: pointer;
						    background: var(--accentcolor);
						  color: var(--btntext-color);
						 
						}

						@media screen and (min-width:600px) {
						  
						  :root {
						--boxheight: 520px;
						  }
						  
						}
		</style>

		<section class="category-course-list-area">
			<div class="container">
				<div class="row">
				            <div class="col" style="padding: 5px;">
								<div class="container" style="padding: 5px;">
									  <div class="row">
										<div class="col text-center">
										  <h4 style="color:#0C0385">Join Amar iSchool</h4>
										  <h3 style="color:#026075;">Be a part of innovative Team</h3>
										</div>
									  </div>
								</div>

								<div class="containernew">
									    <div class="box">
										<div class="img-box" title="Join as Instructor"><img src="https://amarischool.com/uploads/thumbnails/joinus_thumbnails/instructor.png" alt=""></div>
											<div class="content">
												<h2>Join as Instructor</h2>
												<p>Amar iSchool is hiring instructors who can teach Android Development, asp. net, javascript, Competitive Programming, Website Development with Django, Website Development with Laravel, AWS Cloud Computing, DevOps, React or React Native, and other relevant courses to the Bangladeshi student. Join as Instructor! </p>
												<a href="#" target="_blank"><button class="ghost-btn">Apply</button></a>
											</div>
										</div>
									
										<div class="box">
										<div class="img-box" title="Join as Intern"><img src="https://amarischool.com/uploads/thumbnails/joinus_thumbnails/intern.png" alt=""></div>
										
											<div class="content">
												<h2>Join as Intern</h2>
												<p>Are you passionate about finding the best talent of yours?Do you enjoy working in a team towards challenging goals in the fast-moving online education industry? Have you ever imagined working on a growing educational platform where you can develop your skills as well as empower others?This role may be a perfect role for you! Here’s your chance to think beyond the ordinary.Join as an Intern!</p>
												<a href="https://bit.ly/3dPO92d" target="_blank"><button class="ghost-btn">Apply</button></a>
											</div>
										</div>
									
										<div class="box">
											<div class="img-box" title="Join as Campus Ambassador"><img src="https://amarischool.com/uploads/thumbnails/joinus_thumbnails/ca.png" alt=""></div>
											
											<div class="content">
												<h2>Join as Campus Ambassador</h2>
												<!-- <h3>carlos rodiguez armando</h3> -->
												<p>Apply on this Amar iSchool CA program and be the representative of the fastest growing educational platform in your institute. This program will help you to develop different soft skills and build a network with top leaders and resource persons of the country. So hurry up and apply!!</p>
												<a href="https://bit.ly/2XKA5S6" target="_blank"><button class="ghost-btn">Apply</button></a>
											</div>
										</div>
								</div>
				            </div>
				        </div>        
			 </div>
		</section>

		<footer class="footer-area d-print-none">
				    <div class="container-xl">
					    <div class="row">
					      <div class="col-md-5">
					        <p class="copyright-text">
					          <a href=""><img src="https://amarischool.com/uploads/system/logo-dark.png" alt="" class="d-inline-block" width="110"></a>
					          <a href="https://amarischool.com/" target="_blank">Amar iSchool is an online live educational platform.</a>
					        </p>
					      </div>
					      <div class="col-md-7">
					        <ul class="nav justify-content-md-end footer-menu">
					          <li class="nav-item">
					            <a class="nav-link" href="https://amarischool.com/home/privacy_policy">Privacy Policy</a>
					          </li>
					          <li class="nav-item">
					            <a class="nav-link" href="https://amarischool.com/home/terms_and_condition">Terms and Condition</a>
					          </li>
					          <li class="nav-item">
					            <a class="nav-link" href="https://play.google.com/store/apps/details?id=com.amarischool.app">Android App</a>
					          </li>
					          <li class="nav-item">
					            <a class="nav-link" href="https://www.facebook.com/amarischool.pioneer/">Facebook Page</a>
					          </li>
					          <li class="nav-item">
					            <a class="nav-link" href="https://www.facebook.com/groups/amarischool/">Facebook Group</a>
					          </li>
					        </ul>
					      </div>
					    </div>

					    <div class="row">
					      <div class="col-md-12">
					        <div class="text-center">
					        Powered by: <a href="https://pioneeralpha.com"> Pioneer Alpha </a>
					        </div>
					      </div>
					    </div>
				    </div>
		</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>