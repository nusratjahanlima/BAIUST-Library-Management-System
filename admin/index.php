<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LMS | Login</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="./bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="./bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#main_content{
		width: 700px;
		height: 450px;
		background: transparent;
		border: 2px solid rgba(255,255,255,.2);
		color:#fff;
		border-radius: 20px;
		padding: 30px 40px;
		background-color:darkcyan;
		margin: 50px;
	}
	#side_bar{
		color: black;
		height:auto;
		padding: 30px;
		width: 250px;
		/* border: 5px solid #34495e; */
		border-radius: 10px;
		overflow: none;
		margin:20px;
		background-color: gainsboro;
	}
	h1{
		color:lawngreen;
		text-align: center;
		
	}
	center{
		color: whitesmoke;
	}
	p{
		color: whitesmoke;
	}
	a{
		color: whitesmoke;
	}
	.A:hover{
		cursor: wait;
	}
	body{
		background-color:whitesmoke;
	}
</style>
<body background="imeages/Remove It_1692340706144.jpeg">
	<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
		<div class="container-fluid">
			<div class="navbar-header">
			<a class="navbar-brand" href="index.php"><h3 class="text-whitesmoke">Bangladesh Armay Internationaln University Of Science And Technology(BAIUST)</h3></a><br>
				<h2 class="text-warning">BAIUST DIGITAL LIBRARY</h2>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link btn btn-primary A" href="index.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link btn btn-success A" href="../signup.php"></span>Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link btn btn-info A" href="../index.php">Users Login</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	
	<div class="row">
		<div class="" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening: 8:00 AM</li>
				<li>Closing: 8:00 PM</li>
				<li>(Friday & Saturday)</li>
			</ul>
			<h5>What We provide ?</h5>
			<ul>
				
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>RO Water</li>
				<li>Peacefull Environment</li>
			</ul>
		</div>
		<div class="" id="main_content">
			<center><h3><u>Admin Login</u></h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="email"><h2>Email ID:</h2></label>
					<input type="text" name="email" class="form-control" placeholder="Your email--" required>
				</div>
				<div class="form-group">
					<label for="password"><h2>Password:</h2></label>
					<input type="password" name="password" class="form-control" placeholder="Your password--" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary A"><h4>Login</h4></button>	
			</form>
			<?php 
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from admin where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								$_SESSION['id'] =  $row['id'];

								header("Location: admin_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
			?>
		</div>
	</div>
</body>
</html>
