<?php
	session_start();
	function get_user_issue_book_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$user_issue_book_count = 0;
		$query = "select count(*) as user_issue_book_count from issued1_books where student_id = $_SESSION[id]";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$user_issue_book_count = $row['user_issue_book_count'];
		}
		return($user_issue_book_count);
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
	h1{
		color: lawngreen;
		text-align: center;
	}
	.A:hover{
		cursor: wait;

	}
	.text-whitesmoke{
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
				<a class="navbar-brand" href="admin_dashboard.php"><h5 class="text-whitesmoke">Bangladesh Army International University Of Science And Technology(BAIUST)</h5></a><br>
				<h2 class="text-warning">BAIUST DIGITAL LIBRARY</h2>
			</div>
			
			<font style="color: white"><span><strong><?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
			
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle btn btn-success A" data-toggle="dropdown">My Profile </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="view_profile.php">View Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
	        		<div class="dropdown-divider"></div>
					<a  class="dropdown-item" href="registration.php">Request Book</a>
					<div class="dropdown-divider"></div>
					<a  class="dropdown-item" href="return_book.php">Return Book</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="feedback.php">Feedback</a>


	        		<!-- <a class="dropdown-item" href="change_password.php">Change Password</a> -->
	        	</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link btn btn-danger A" href="logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee class="n">--Library opens at 8:00 AM and close at 8:00 PM--</marquee></span><br>
	<div class="row">
		<div class="col-md-3" style="margin: 25px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Book Issued</div>
				<div class="card-body">
					<p class="card-text">No of book issued: <?php echo get_user_issue_book_count();?></p>
					<a class="btn btn-success A" href="view_issued_book.php">View Issued Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 25px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header"> View Book</div>
				<div class="card-body">
				<p class="card-text">No of book</p>
					<a class="btn btn-success A" href="view_all_books.php">View All Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>