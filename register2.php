<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$query = "insert into return1_books values('','$_POST[name]','$_POST[id]','$_POST[email]',$_POST[book_name],'$_POST[book_no]','$_POST[return_date]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfull...You may Login now !!");
	window.location.href = "user_dashboard.php";
</script>