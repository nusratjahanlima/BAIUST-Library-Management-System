
<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#main_content{
		width: 700px;
		height: auto;
		background: transparent;
		border: 2px solid black;
		color:#fff;
		border-radius: 20px;
		padding: 30px 40px;
		margin-top: 0px;
		margin-bottom: 0px;
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
		margin-top:0 px;
	}
	.A:hover{
      cursor: wait;
	}
	h1{
		color: lawngreen;
		text-align: center;
	}
	.col{
		width: 300px;
		height: auto;
		padding: 30px;
		border: 5px solid #34495e;
		border-radius: 10px;
		overflow: none;
	}
	.text-whitesmoke{
		color: whitesmoke;
	}
	.form-group{
		color: black;
	}
	.text-black{
		color: black;
	}
	.n{
		color: green;
	}
	
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary ">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><h3 class="text-whitesmoke">Bangladesh Army International University Of Science And Technology(BAIUST)</h3></a><br>
				<h2 class="text-warning">BAIUST DIGITAL LIBRARY</h2>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
		        <a class="nav-link btn btn-info A" href="user_dashboard.php"> Back</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link btn btn-danger A" href="logout.php"> Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee class="n">Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br>
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
		<div class="col-md-8 " id="main_content">
			<center><h3 class="text-black"> Registration For Book</h3></center>
			<form action="register1.php" method="post">
				<div class="form-group">
					<label for="name"><b>Full Name:</b></label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email"><b>Email ID:</b></label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password"><b>Student ID:</b></label>
					<input type="text" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="mobile"><b>Mobile:</b></label>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="address"><b>Department & Level-Term:</b></label>
					<textarea name="address" class="form-control" required></textarea> 
				</div>
                <div class="form-group">
					<label for="book"><b>Book Name:</b></label>
					<input type="text" name="book" class="form-control" required>
				</div>
                <div class="form-group">
					<label for="number"><b>Book Number:</b></label>
					<input type="text" name="number" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary A">Submit</button>	
			</form>
		</div>
	</div>
</body>
</html>