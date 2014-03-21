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
					<div class="panel panel-default">
						<!-- Default panel contents -->
						<div class="panel-heading">Permissions Shop</div>
						<div class="panel-body">
							<tr>
								<td>test2</td>
								<td>test3</td>
							</tr>
						</div>
						<!-- Table -->
						<table class="table">
							<tr>
								<td>test1</td>
								<td>test2</td>
							</tr>
						</table>
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