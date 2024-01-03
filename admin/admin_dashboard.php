<?php
	require("functions.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	h1{
		color: orange;
		
	}
	.m{
		color: whitesmoke;
	}
	body{
		background-color:black;
	}
	
	body{
		background-color: whitesmoke;
	}
	.bg{
		background-color:gray;
	}
	.bg1{
		background-color:darkseagreen;
	}
	.bg2{
		background-color:gray;
	}
	.bg3{
		background-color:lightgreen;
	}
	.bg4{
		background-color:cadetblue;
	}
	.bg5{
		background-color: lightsteelblue;
	}
	.col{
		margin-top: 1000px;
	}
	.n{
		color: green;
	}
	.bg8{
		background-color:lightblue;
	}
	

	.bg7{
		background-color:lightgrey;
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg  navbar-secondary bg-secondary">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand m" href="admin_dashboard.php"><b>Bangladesh Army International University Of Science And Technology(BAIUST)</b></a><br>
				<h1>BAIUST DIGITAL LIBRARY</h1>
			</div>
			
			<font style="color: white"><span><strong> <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle btn btn-success" data-toggle="dropdown">My Profile </a>
				
	        	<div class="dropdown-menu">
				
	        		<a class="dropdown-item" href="view_profile.php">View Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="change_password.php">Change Password</a>
					
	        	</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link btn btn-danger" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee class="n">--Library opens at 8:00 AM and close at 8:00 PM--</marquee></span><br>
	<nav class="navbar navbar-expand-lg  navbar-black bg-black text">
		<div class="container-fluide ">
			
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
		        <a class="nav-link btn btn-success text " href="admin_dashboard.php">Dashboard</a>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle btn btn-info " data-toggle="dropdown">Books </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_book.php">Add New Book</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_book.php">Manage Books</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle  btn btn-danger" data-toggle="dropdown">Category </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_cat.php">Add New Category</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_cat.php">Manage Category</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle  btn btn-warning" data-toggle="dropdown">Authors</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_author.php">Add New Author</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_author.php">Manage Author</a>
	        	</div>
		      </li>
	          <li class="nav-item">
		        <a class="nav-link  btn btn-primary text" href="issue_book.php">Issue Book</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	
	<div>
	<div class="row">
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg" style="width: 300px">
				<div class="card-header">1</div>
				<div class="card-body">
					<p class="card-text">Registered User </p>
					<a class="btn btn-danger" href="Regusers.php" target="_blank">View Registered Users</a>
				</div>
			</div>
       </div>
	   
	   
		<div class="col-md-3" style="margin: 0px">
			 <div class="card bg4" style="width: 300px">
				<div class="card-header">2</div>
				<div class="card-body">
					<p class="card-text">Book Registered</p>
					<a class="btn btn-success" href="view_breg.php" target="_blank">View Registrated Books</a>
				</div>
			</div>
			
		</div>
		
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg1" style="width: 300px">
				<div class="card-header">3</div>
				<div class="card-body">
					<p class="card-text">Total Book</p>
					<a class="btn btn-success" href="Regbooks.php" target="_blank">View All Books</a>
				</div>
			</div>
		</div>
		
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg2" style="width: 300px">
				<div class="card-header">4</div>
				<div class="card-body">
					<p class="card-text">Book Categories</p>
					<a class="btn btn-warning" href="Regcat.php" target="_blank">View Categories</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col" style="margin: 0px">
			<div class="card bg3" style="width: 300px">
				<div class="card-header">5</div>
				<div class="card-body">
					<p class="card-text"> Authors: <?php echo get_author_count();?></p>
					<a class="btn btn-primary" href="Regauthor.php" target="_blank">View Authors</a>
				</div>
			</div>
       </div>
	   <div class="col-md-3" style="margin: 0px">
			<div class="card bg5" style="width: 300px">
				<div class="card-header">6</div>
				<div class="card-body">
					<p class="card-text">Book Issued</p>
					<a class="btn btn-success" href="view_issued_book.php" target="_blank">View Issued Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg7" style="width: 300px">
				<div class="card-header">7</div>
				<div class="card-body">
					<p class="card-text">Returned Book</p>
					<a class="btn btn-success" href="view_returned_book.php" target="_blank">View Returned Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg8" style="width: 300px">
				<div class="card-header">8</div>
				<div class="card-body">
					<p class="card-text">Feedback</p>
					<a class="btn btn-success" href="view_feedback.php" target="_blank">View Feedback</a>
				</div>
			</div>
		</div>
		
    <div>
</div>
<br><br>

		
	   
		
	</div>
	<div class="col-md-3"></div>
		<div class="col-md-3"></div>
</div>
	
		

		
	
</body>
</html>
