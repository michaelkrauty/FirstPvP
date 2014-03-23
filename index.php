<?php session_start();?>
<?php
	include_once "inc/db_connect.php";
	include_once "inc/functions.php";
?>
<html>
	<head>
		<?php
			$title = "FirstPvP Home";
			$pageName = "index";
			include_once "inc/head.php";
		?>
	</head>
	<body>
	<?php include_once "inc/header.php";?>
		<div class="body">
		
		
			<div class="main">
				<div class="well">
					
					Welcome to the FirstPvP Website!
					<br>
					There isn't much here yet, but more content will be added as time goes on!
					
					
					
				</div>
				<a href="http://topg.org/Minecraft"><img src="http://topg.org/image/120314/75603.jpg" alt="minecraft servers"></a>
			</div>
			
			
		</div>
	</body>
</html>
<?php include_once "inc/script.php";?>