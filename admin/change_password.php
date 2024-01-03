<?php
	require("functions.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	h1{
		color:orange;
		
	}
	.m{
		color: whitesmoke;
	}
	.n{
		color: green;
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand m" href="admin_dashboard.php"><b>Bangladesh Army International University Of Science And Technology(BAIUST)</b></a><br>
				<h1>BAIUST DIGITAL LIBRARY</h1>
			</div>
			
			<font style="color: white"><span><strong> <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link btn btn-success" href="../admin/admin_dashboard.php">Back </a>
	        	
		      </li>
		      <li class="nav-item">
		        <a class="nav-link btn btn-danger" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee class="n">--Library opens at 8:00 AM and close at 8:00 PM--</marquee></span><br>
		
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="update_password.php" method="post">
				<center><h4>Change Admin Password</h4><br></center>
					<div class="form-group">
						<label for="password">Enter Password:</label>
						<input type="password" class="form-control" name="old_password">
					</div>
					<div class="form-group">
						<label for="New Password">Enter New Password:</label>
						<input type="password" name="new_password" class="form-control">
					</div>
					<button type="submit" name="update" class="btn btn-primary">Update Password</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
