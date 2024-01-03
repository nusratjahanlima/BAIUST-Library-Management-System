<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$name = "";
	$email = "";
	$mobile = "";
	$address = "";
	$query = "select * from users where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		$address = $row['address'];
	}
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
		
	}
	h4{
		color: whitesmoke;
	}
	.col{
        width: 700px;
		height: 550px;
		background: transparent;
		border: 5px solid black;
		color:black;
		border-radius: 20px;
		padding: 30px 40px;
		
		
		margin: 50px;
    }
	.n{
		color: green;
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-secodary bg-secondary">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php"><h4>Bangladesh Armay Internationaln University Of Science And Technology(BAIUST)</h4></a><br>
				<h2>BAIUST DIGITAL LIBRARY</h2>
			</div>
			<font style="color: white"><span><strong><?php echo $_SESSION['name'];?></strong></span></font>
			
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
	<span><marquee class="n">--Library opens at 8:00 AM and close at 8:00 PM--</marquee></span><br>
		
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 col">
				<form action="update.php" method="post">
				<center><h3 class="text-black">Edit Profile</h3><br></center>
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" value="<?php echo $name;?>">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" name="email" class="form-control" value="<?php echo $email;?>">
					</div>
					<div class="form-group">
						<label for="mobile">Mobile:</label>
						<input type="text" name="mobile" class="form-control" value="<?php echo $mobile;?>">
					</div>
					<div class="form-group">
						<label for="mobile">Department & Level-Term:</label>
						<textarea rows="3" cols="40" name="address" class="form-control"><?php echo $address;?></textarea>
					</div>
					<button type="submit" name="update" class="btn btn-primary">Update</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
