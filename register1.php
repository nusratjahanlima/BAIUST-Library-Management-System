<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$query = "insert into reg_book values('','$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]','$_POST[book]','$_POST[number]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfull...You may Login now !!");
	window.location.href = "user_dashboard.php";
</script>