<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	h2{
		color: orange;
		text-align: center;
	}
	h3{
		color: whitesmoke;
	}
	.col{
        width: 700px;
		height: auto;
		background: transparent;
		border: 5px solid black;
		color:black;
		border-radius: 20px;
		padding: 30px 40px;
		
		
		margin: 50px;
    }
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="user_dashboard.php"><h3>Bangladesh Armay Internationaln University Of Science And Technology(BAIUST)</h3></a><br>
				<h2>BAIUST DIGITAL LIBRARY</h2>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			
		    <ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
		        <a class="nav-link btn btn-primary" href="../user_dashboard.php">Back</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link btn btn-danger" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	
		
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 col">
				<form action="update_password.php" method="post">
				<center><h4>Change Student email</h4><br></center>
					<div class="form-group">
						<label for="email">Enter Email:</label>
						<input type="email" class="form-control" name="old_email">
					</div>
					<div class="form-group">
						<label for="New email">Enter New Email:</label>
						<input type="email" name="new_email" class="form-control">
					</div>
					<button type="submit" name="update" class="btn btn-primary">Update Email</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
