<?php
	include_once "inc/config.php";
	include_once "inc/functions.php";
	include_once "inc/register.php";
	include_once "inc/db_connect.php";
	
	sec_session_start();
	if(login_check($mysqli)){
		$logged = "in";
	}else{
		$logged = "out";
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			$pageName = "register";
			$title = "FirstPvP Registration";
			include_once "inc/head.php";
		?>
	</head>
	<body>
		<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post">
			Minecraft Username:
			<br><input type="text" name="username" class="form-control" placeholder="Minecraft Username" required autofocus>
			FirstPvP Key:
			<br><input type="text" name="key" class="form-control" placeholder="FirstPvP Key" required>
			Password:
			<br><input type="password" name="password" class="form-control" placeholder="Password" required>
			Confirm Password:
			<br><input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
			<br><input class="btn btn-lg btn-success btn-block" type="submit" value="Register">
			<br><input class="btn btn-lg btn-primary btn-block" type="button" value="Back to login" onClick="parent.location='login.php'">
		</form>
	</body>
</html>