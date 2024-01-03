<?php
	require("functions.php");
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$name = "";
	$email = "";
	$mobile = "";
	$query = "select * from admin where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Book</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">
  		function alertMsg(){
  			 alert("Book added successfully...");
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
</head>
<style>
	h1{
		color: orange;
		
	}
	.o{
		color: whitesmoke;
	}
	.n{
		color: green;
	}
	.text{
		color: black;
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand o" href="admin_dashboard.php">Bangladesh Army International University Of Science And Technology(BAIUST)</a><br>
				<h1>BAIUST DIGITAL LIBRARY</h1>
			</div>
			
			<font style="color: white"><span><strong><?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
		        <a class="nav-link btn btn-success" href="../admin/admin_dashboard.php">Back</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link btn btn-danger" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee class="n">--Library opens at 8:00 AM and close at 8:00 PM--</marquee></span><br>
	
		
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table table-bordered table-hover">
				<center><h4>Manage Books</h4><br></center>
					<thead>
						<tr>
							<th>Name</th>
							<th>Author</th>
							<th>Category</th>
							<th>Book No.</th>
							
							<th>Action</th>
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"lms");
						$query = "select * from books";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								<td><?php echo $row['Book_name'];?></td>
								<td><?php echo $row['Author_id'];?></td>
								<td><?php echo $row['Cat_id'];?></td>
								<td><?php echo $row['Book_no'];?></td>
								
								<td><button class="btn btn-success " name=""><a class="text" href="edit_book.php?bn=<?php echo $row['Book_no'];?>">Edit</a></button>
								<button class="btn btn-danger "><a class="text" href="delete_book.php?bn=<?php echo $row['Book_no'];?>">Delete</a></button></td>
							</tr>
							<?php
						}
					?>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>
</body>
</html>
