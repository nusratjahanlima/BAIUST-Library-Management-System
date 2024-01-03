<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$name = "";
	$email = "";
	$mobile = "";
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
		color:orange;
		
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
	.n{
		color: green;
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="user_dashboard.php"><h3>Bangladesh Army International University Of Science And Technology(BAIUST)</h3></a><br>
				<h2>BAIUST DIGITAL LIBRARY</h2>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			
		    <ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
		        <a class="nav-link btn btn-primary" href="user_dashboard.php">Back</a>
		      </li
		      <li class="nav-item">
		        <a class="nav-link btn btn-danger" href="logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee class="n">--Library opens at 8:00 AM and close at 8:00 PM--</marquee></span><br>
		
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 col">
				<form>
				<center><h4>Student Profile Detail</h4><br></center>
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" value="<?php echo $name;?>" disabled>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" value="<?php echo $email;?>" class="form-control" disabled>
					</div>
					<div class="form-group">
						<label for="mobile">Mobile:</label>
						<input type="text" value="<?php echo $mobile;?>" class="form-control" disabled>
					</div>
					<div class="form-group">
						<label for="email">Department & Level-Term</label>
						<input type="text" value="<?php echo $address;?>" class="form-control" disabled>
					</div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
