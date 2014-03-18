<?php 
	include_once "inc/functions.php";
	include_once "inc/db_connect.php";
	
	sec_session_start();
	if(!(login_check($mysqli) == true)){
		$logged = "out";
?>

<html>
	<head>
		<?php
			$title = "FirstPvP Registration";
			$pageName = "register";
//			$userEmail = $_SESSION['email'];
//			$userName = $_SESSION['username'];
			include_once "inc/head.php";
			include_once "inc/register.php";
			include_once "inc/functions.php";
		?>
	</head>
	<body>
		<div class="container">
			<div class="well">
				<div class="center">
					<form action="<?php echo esc_url($_SERVER["PHP_SELF"]);?>" method="post" name="registration_form">
					<?php if(isset($_POST['email'], $_POST['password'], $_POST['username'])){ createUser($_POST['email'], $_POST['password'], $_POST['username'], 'saltysalt');}?>
						<p><pagetitle>Register</pagetitle></p>
						Minecraft Username:
						<br><input type="text" name="username" class="form-control" placeholder="Minecraft Username" required autofocus>
						Email:
						<br><input type="email" name="email" class="form-control" placeholder="Email Address" required>
						Password:
						<br><input type="password" name="password" class="form-control" placeholder="Password" required>
						Confirm Password:
						<br><input type="password" name="confirmpwd" class="form-control" placeholder="Confirm Password" required>
						<br><input class="btn btn-lg btn-success btn-block" type="submit" value="Register"  />
						<br><input class="btn btn-lg btn-primary btn-block" type="button" value="Back to login" onclick="parent.location='login.php';" />
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
<script type="text/JavaScript" src="js/sha512.js"></script>
<script type="text/JavaScript" src="js/forms.js"></script>
<?php 
	}else{
		$logged = "in";
	}
?>