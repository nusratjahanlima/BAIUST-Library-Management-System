<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Issue Book</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">
  		function alertMsg(){
  			alert("Submit successfully...");
  			window.location.href = "user_dashboard.php";
  		}
  	</script>
</head>
<style>
	.n{
		color: green;
	}
	.m{
		color: whitesmoke;
	}
	h1{
		color: orange;
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand m" href="admin_dashboard.php">Bangladesh Armay International University Of Science and Technology(BAIUST)</a><br>
				<h1>BAIUST DIGITAL LIBRARY</h1>
			</div>
			
			<font style="color: white"><span><strong><?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link btn btn-success" href="user_dashboard.php">Back </a>
	        	
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
			<div class="col-md-4">
				<form action="" method="post">
				<center><h4>Return Book</h4><br></center>
					<div class="form-group">
						<label for="book_name">Name:</label>
						<input type="text" name="name" class="form-control" required>
					</div>
					
					<div class="form-group">
						<label for="book_no">ID:</label>
						<input type="text" name="id" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="student_id">Email:</label>
						<input type="text" name="email" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="book_no">Book_name:</label>
						<input type="text" name="book_name" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="book_no">Book_number:</label>
						<input type="text" name="book_no" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="return_date">Return Date:</label>
						<input type="text" name="return_date" class="form-control" value="<?php echo date("yy-m-d");?>" required>
					</div>
					<button type="submit" name="issue_book" class="btn btn-primary">Submit</button>
					<a href="view_issued_book.php"></a>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
<?php
	if(isset($_POST['issue_book']))
	{
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "insert into return1_books values(null,'$_POST[name]',$_POST[id],'$_POST[email]','$_POST[book_name]',$_POST[book_no],'$_POST[return_date]')";
		$query_run = mysqli_query($connection,$query);
		#header("Location:admin_dashboard.php");
	}
?>
