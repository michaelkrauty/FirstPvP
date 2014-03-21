<?php session_start();?>
<?php
	include_once "inc/db_connect.php";
	include_once "inc/functions.php";
	
	if(login_check()){
?>
<html>
	<head>
		<?php
			$title = "FirstPvP Permissions Shop";
			$pageName = "permissions";
			include_once "inc/head.php";
		?>
	</head>
	<body>
	<?php include_once "inc/header.php";?>
		<div class="body">
		
		
			<div class="main">
				<div class="well">
					
				</div>
			</div>
			
			
		</div>
	</body>
</html>
<?php
	}else{
		header("Location: login.php");
	}
?>