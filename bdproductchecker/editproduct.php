<?php
require_once './dbconf.php';
require_once './myclass.php';
session_start();

$object = new sessionChecking();
if(!$object->S_C()){ 
header('location: login.php');
}

$id = base64_decode($_GET['id']);
$query = "select * from product_info where id = '$id'";
$result = mysqli_query($db,$query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update-product']))
{
	 
	$name = $_POST['name'];
	$category = $_POST['category'];
	$unit = $_POST['unit'];
	$price = $_POST['price'];
	$manufacturer = $_POST['manufacturer'];
	if($_FILES['photo']['name']){
	$photo = explode('.',$_FILES['photo']['name']);
	$photo = end($photo);
	
	$photo_name = $name.'.'.$photo;
	}
	//echo $name.' '.$category.' '.$unit.' '.$price.' '.$manufacturer. ' '.$photo_name;
	
	$_SESSION['data_insert_error'] = "ADD FAILED, PLEASE TRY AGAIN LATER!";
	
	$input_error = array();
	
	//if(!preg_match('/^[a-zA-Z .]*$/',$name)) $input_error['name'] = "Only Letter space and dot are allowed";
	if(empty($name)) $input_error['name'] = "The name field is required";
	if(empty($category)) $input_error['category'] = "The category field is required";
	if(empty($unit)) $input_error['unit'] = "The unit is required";
	if(empty($price)) $input_error['price'] = "The price is required";
	if(empty($manufacturer)) $input_error['manufacturer'] = "The manufacturer is required";
	
	if(!count($input_error))
	{
		if($_FILES['photo']['name'])
		$query = "UPDATE `product_info` SET	
		`name`='$name',`category`='$category',`unit`='$unit',`price`='$price',`manufacturer`='$manufacturer',`photo`='$photo_name' 
		WHERE id='$id'";
		else $query = "UPDATE `product_info` SET 
		`name`='$name',`category`='$category',`unit`='$unit',`price`='$price',`manufacturer`='$manufacturer'
		WHERE id='$id'";
		
		$result = mysqli_query($db,$query);
		if($result) {
					$_SESSION['data_insert_success'] = 'Registration Complete';
					unset($_SESSION['data_insert_error']);
					if($_FILES['photo']['name']) move_uploaded_file($_FILES['photo']['tmp_name'],'product_images/'.$photo_name);
					header('location: all-product.php');
				}
	}
	
}


?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <title>bdproductchecker</title>

	<style>
	html, body{ height:100%; margin:0;}
	body{
	  display:flex;
	  flex-direction:column;
	}
	footer{
		margin-top:auto;
		margin-bottom:10px;
	}
	.error{
		color:blue;
	}
	</style>
  </head>
  <body>
<?php include './navbar.php';?>

<div class="row">

<div class="col-sm-3"></div>
<div class ="col-sm-6">
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <h2 class="text-center" style="margin-bottom:20px;" >Update Product</h2>
						<?php
							if(isset($_SESSION['data_insert_error'])) 
								echo '<div class="alert alert-warning alert-dismissible">
									<a href="index.php?page=add-student" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
									.$_SESSION['data_insert_error'].'</div>';
						?>
						<?php unset($_SESSION['data_insert_error']);?>
                        <div class="form-group row" style="margin-bottom:10px;">
                            <label for="Name" class="control-label col-sm-2">Product Name :</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" id="Name" placeholder="Enter Product Name" 
								value="<?php echo $row['name'];?>"/>
                            <label class="error"><?php if(isset($input_error['name'])) echo "*".$input_error['name'];?></label>
							</div>	
                        </div>
                        <div class="form-group row" style="margin-bottom:10px;">
                            <label for="Category" class="control-label col-sm-2">Category :</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="Category" name="category">
									<option value="">Select</option>
									<option <?php echo $row['category']==1 ? 'selected=""':""; ?> value="1">Medicine</option>
									<option <?php echo $row['category']==2 ? 'selected=""':""; ?> value="2">Food</option>
								</select>
                            <label class="error" ><?php if(isset($input_error['category'])) echo "*".$input_error['category'];?></label>
                            </div>
                        </div>
                       <div class="form-group row" style="margin-bottom:10px;">
                            <label for="Unit" class="control-label col-sm-2">Unit :</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="unit" id="Unit" placeholder="Enter Unit " value="<?php echo $row['unit'];?>"/>
                            <label class="error" ><?php if(isset($input_error['unit'])) echo "*".$input_error['unit'];?></label>
                            </div>
                        </div>
						<div class="form-group row" style="margin-bottom:10px;">
                            <label for="Price" class="control-label col-sm-2">Price :</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="price" id="Price" placeholder="Enter Price"value="<?php  echo $row['price'];?>"/>
                            <label class="error" ><?php if(isset($input_error['price'])) echo "*".$input_error['price'];?></label>
                            </div>
                        </div>
						<div class="form-group row" style="margin-bottom:10px;">
                            <label for="P" class="control-label col-sm-2">Manufacturer</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="manufacturer" id="P" placeholder="Enter Manufacturer"value="<?php echo $row['manufacturer'];?>"/>
                            <label class="error" ><?php if(isset($input_error['manufacturer'])) echo "*".$input_error['manufacturer'];?></label>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-bottom:10px;">
                            <label for="Photo" class="control-label col-sm-2">Photo :</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="photo" id="Photo" placeholder="Enter Product Photo"value="<?php echo $row['photo'];?>"/>
                            
                            </div>
                        </div>
						<br>
                        <div class="row" style="margin-bottom:10px;">
							<div class="col-sm-2"></div>
                            <div class="col-sm-10">
							<input type="submit" value="Update Product" name="update-product" class="btn btn-success"/>
							</div>
                        </div>
                    </form>
	
</div>
<div class="col-sm-3"></div>
</div>

<?php include './footer.php'?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>