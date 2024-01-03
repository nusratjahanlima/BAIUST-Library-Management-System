<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$book_name = "";
	$author = "";
	$book_no = "";
	
	$query = "select book_name,book_author,book_no * form issued1_books";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Issued Books</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	.m{
		color: whitesmoke;
	}
	h1{
		color: orange;
	}
	.n{
		color: green;
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand m" href="admin_dashboard.php">Bangladesh Army International University Of Science and Technology(BAIUST)</a><br>
			     <h1>BAIUST DIGITAL LIBRARY</h1>
			</div>
			
			<font style="color: white"><span><strong><?php echo $_SESSION['email'];?></strong></font>
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
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
					<center><h4>Issued Book's Detail</h4><br></center>
						<tr>
							<th>Book Name</th>
							<th>Book Author</th>
							<th>Book Number</th>
							
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
						   $book_name=$row['book_name'];
						   $author=$row['book_author'];
						   $book_no=$row['book_no'];
						   
						?>
							<tr>
							<td><?php echo $book_name;?></td>
							<td><?php echo $author;?></td>
							<td><?php echo $book_no?></td>
							
						</tr>
                       
					<?php
						}
					?>	
				</table>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
</body>
</html>
