<?php
	require("functions.php");
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
     $id = "";
     $name = "";
	 $email = "";
     $feedback = "";
    
	$query = "select * from feedback1 where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$id = $row['id-'];
        $name = $row['name'];
		$email = $row['email'];
        $feedback = $row['opinion'];
        

		
        
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
  			 alert("Send successfully...");
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
</head>
<style>
	h1{
		color: orange;
		
	}
	.col{
		width: 300px;
		height:auto;
		padding: 30px;
		border: 5px solid #34495e;
		border-radius: 10px;
		overflow: none;
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
				<a class="navbar-brand m" href="admin_dashboard.php">Bangladesh Army International University Of Science And Technology(BAIUST)</a><br>
				<h1>BAIUST DIGITAL LIBRARY</h1>
			</div>
			
			<font style="color: white"><span><strong> <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link  btn btn-success" href="../admin/admin_dashboard.php">Back </a>
	        	
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
			<div class="col-md-8 col">
				<table class="table table-bordered table-hover">
				<center><h4>User Feedback</h4><br></center>
					<thead>
						<tr>
                            <th>ID</th>
							<th>Name</th>
							
							<th>Email</th>
							<th>Opinion</th>
                            
                           

							
							
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"lms");
						$query = "select * from feedback1";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
                                <td><?php echo $row['id-'];?></td>
								<td><?php echo $row['name'];?></td>
								
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['opinion'];?></td>
                               
                                
								
								
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
