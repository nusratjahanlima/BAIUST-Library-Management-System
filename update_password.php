<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$email = "";
	$query = "select * from users where id = '$_SESSION[id]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$email = $row['email'];
	}
	if($email == $_POST['new_email']){
		$query = "update users set email = '$_POST[new_email]' where email = '$_SESSION[email]'";
		$query_run = mysqli_query($connection,$query);
		?>
		<script type="text/javascript">
			alert("Updated successfully...");
			window.location.href = "user_dashboard.php";
		</script>
		<?php
	}
	else{
		?>
		<script type="text/javascript">
			alert("Wrong User Password...");
			window.location.href = "change_password.php";
		</script>
		<?php
	}
?>
