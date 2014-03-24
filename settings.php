<?php session_start();?>
<?php
	include_once "inc/db_connect.php";
	include_once "inc/functions.php";
	
	if(login_check()){
?>
<html>
	<head>
		<?php
			$title = "FirstPvP Account Settings";
			$pageName = "settings";
			include_once "inc/head.php";
		?>
	</head>
	<body>
	<?php include_once "inc/header.php";?>
		<?php
			if(isset($_GET[""])){
				//put shit here
			}
		?>
		<div class="body">
			<div class="main">
				<div class="header">
					<div class="well">
						<h1>Account Settings</h1>
					</div>
				</div>
				<div class="content">
					<div class="emailcontainer">
						<div class="well">
							<h3>Add/Edit Email Address</h3>
						</div>
					</div>
					<div class="passwordcontainer">
						<div class="well">
							<h3>Edit Password</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php include_once "inc/script.php";?>
<?php
}else{
	header("Location: login.php");
}
?>