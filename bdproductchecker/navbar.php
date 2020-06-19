<?php
echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="./index.php">bdproductchecker</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse push-right" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto pull-right">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
        </li>
	  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Product</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="all-product.php">All Product</a>
        <a class="dropdown-item" href="medicine.php">Medicine</a>
        <a class="dropdown-item" href="food.php">Food</a>
      </div>
    </li>
	  ';
	  
	  if(isset($_SESSION['user_login'])){
		  echo '
		  <li class="nav-item">
			<a class="nav-link" href="add-product.php">Add Product</a>
		  </li>
		  <li class="nav-item">
		  <a class="nav-link" href="profile.php"><img class="rounded-circle" style="width:30px;height:30px;object-fit:cover;" src="images/'.$_SESSION['ph'].'" alt=""/></a>
		  </li>
		  ';
		  echo '
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			'.$_SESSION['user_login'].'
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="profile.php">Profile</a>
        <a class="dropdown-item" href="logout.php">Logout</a>
      </div>
    </li>';
	  }
	  else echo '
	  <a class="nav-link" href="login.php">LogIn</a>';
      echo '</li>
    </ul>

  </div>
  </div>
</nav>';

?>
