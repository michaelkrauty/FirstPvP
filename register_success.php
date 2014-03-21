<?php
	session_start();
	if(isset($_GET["m"])){
		$username = $_GET["m"];
?>

<html>
	<head>
		<?php include_once "inc/head.php";?>
	</head>
	<body>
		<div class="jumbotron">
			<center>
				<h1>Welcome to FirstPvP, <?php echo $username;?>!
				<br>
				<a href="login.php">Log in</a>
				</h1>
				<?php echo $_SESSION["username"];?>
			</center>
		</div>
	</body>
</html>


<?php
	}else{
		header("Location: index.php");
	}
?>