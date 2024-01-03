<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$book_name = "";
	$author = "";
	$category = "";
	$book_no = "";
	$author_id = "";
	$query = "select books.Book_name,books.Book_no,authors.author_name ,authors.author_id from books left join authors on books.author_id = authors.author_id";
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Reg Books</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	h1{
		color: lawngreen;
		text-align: center;
	}
    .text-warning{
        text-align: center;
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
				<a class="navbar-brand" href="admin_dashboard.php"><h3 >Bangladesh Army International University Of Science And Technology(BAIUST)</h3></a><br>
				<h2 class="text-warning">BAIUST DIGITAL LIBRARY</h2>
			</div>
			
			<font style="color: white"><span><strong> <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
           
		      
		     
		      <li class="nav-item">
		        <a class="nav-link btn btn-info" href="../user_dashboard.php">Back</a>
		      </li>
              <li class="nav-item">
		        <a class="nav-link btn btn-danger" href="logout.php">Logout</a>
		      </li>
		    
		    </ul>
		</div>
	</nav><br>
	
	<span><marquee class="n">--Library opens at 8:00 AM and close at 8:00 PM--</marquee></span><br>
		
		<div class="row ">
        
			<div class="col-md-2 "></div>
			<div class="col-md-8 col">
				<form>
               
					<table class="table-bordered" width="900px" style="text-align: center">
					<center><h4>All Book's</h4><br></center>
						<tr>
							<th>Book Name</th>
							<th>Number</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
							<td><?php echo $row['Book_name'];?></td>
							
							<td><?php echo $row['Book_no'];?></td>
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
