<?php
session_start();
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
<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<div class="content">
				<h1 class="text-primary">All Products </h1>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page">All Products</li>
				  </ol>
				</nav>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th>Name</th>
					<th>Category</th>
					<th>Unit</th>
					<th>Price</th>
					<th>Manufacturer</th>
					<th>Photo</th>
					<?php
					if(isset($_SESSION['user_name']))
					echo '<th>Action</th>';
				?>
				</tr>
			</thead>
			<tbody>
			<?php
			require_once './dbconf.php';
				
			$result= mysqli_query($db,"SELECT * FROM `product_info`");
	
			while($row = mysqli_fetch_assoc($result)){
			?>
			
				<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php 
				if($row['category']==1) echo 'Medicine';
				else echo 'Food';
				?></td>
                <td><?php echo $row['unit'];?></td>
                <td><?php echo $row['price'];?></td>
				<td><?php echo $row['manufacturer'];?></td>
                <td><img class="rounded mx-auto d-block img-fluid" style="max-height: 50px; max-width:100px;" src="product_images/<?php echo $row['photo'];?>" alt=""/></td>
				<?php
				
				if(isset($_SESSION['user_name']))
				echo'<td>
				<a class="btn btn-sm btn-warning" href="editproduct.php?id='.base64_encode($row['id']).'">edit</a>
				&nbsp &nbsp &nbsp
				<a class="btn btn-sm btn-danger"href="delete.php?id='. base64_encode($row['id']).'">delete</a>
				</td>';
				?>
            </tr>
		<?php
			}
			?>
			</tbody>
			
			</table>
			
			</div>

		</div>
		<div class="col-sm-1"></div>
	</div>
</div>
<?php include './footer.php'?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--table plugin start-->
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>	
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<!--end-->
  </body>
</html>