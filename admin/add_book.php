<?php
	require("functions.php");
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$name = "";
	$email = "";
	$mobile = "";
	$query = "select * from admin where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Book</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">
  		function alertMsg(){
  			alert("Book added successfully...");
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
</head>
<style>
	h1{
		color: lawngreen;
		text-align:center ;
	}
	.col{
		width: 300px;
		height: auto;
		padding: 30px;
		border: 5px solid #34495e;
		border-radius: 10px;
		overflow: none;
		
	}
	.text{
		color:black;
	}
	.text1{
		color: black;
	}
	.A:hover{
		cursor:wait;

	}
	h3{
		color: whitesmoke;
	}
	h2{
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
				<a class="navbar-brand" href="admin_dashboard.php"><h3>Bangladesh Army International University Of Science And Technology(BAIUST)</h3></a><br>
				<h2>BAIUST DIGITAL LIBRARY</h2>

			</div>
			
			<font style="color: white"><span><strong> <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
		        <a class="nav-link btn btn-success text A" href="../admin/admin_dashboard.php">Back</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link btn btn-danger text A" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	
	<span><marquee class="n">--Library opens at 8:00 AM and close at 8:00 PM--</marquee></span><br>
		
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 col">
				<form action="" method="post">
				<center><h4>Add a new Book</h4><br></center>
					<div class="form-group text">
						<label for="email">Book Name:</label>
						<input type="text" name="book_name" class="form-control" required>
					</div>
					<div class="form-group text">
	
						<label for="mobile">Author ID:</label>
						<input type="text" name="book_author" class="form-control" required>
					</div>
					<div class="form-group text">
						<label for="mobile">Category ID:</label>
						<input type="text" name="book_category" class="form-control" required>
					</div>
					<div class="form-group text">
						<label for="mobile">Book Number:</label>
						<input type="text" name="book_no" class="form-control" required>
					</div>
					
					<button type="submit" name="add_book" class="btn btn-primary A">Add Book</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>

<?php
	if(isset($_POST['add_book']))
	{
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "insert into books values(null,'$_POST[book_name]','$_POST[book_author]','$_POST[book_category]',$_POST[book_no])";
		$query_run = mysqli_query($connection,$query);
		#header("location:add_book.php");
	}
?>
