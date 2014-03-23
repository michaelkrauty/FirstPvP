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
		<div class="body">
		
		
			<div class="main">
				<div class="well">
					nothing here yet, move along...
				</div>
				
			</div>
		</div>
	</body>
</html>
<?php include_once "inc/script.php";?>
<?php }else{
header("Location: login.php");
}
?>