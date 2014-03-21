<?php session_start();?>
<?php
	include_once "inc/db_connect.php";
	include_once "inc/functions.php";
	
	if(!login_check()){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php
  		$pageName = "login";
  		$title = "FirstPvP Login";
  		include_once "inc/head.php";
  	?>
	<?php
		if(isset($_POST["username"], $_POST["password"])){
			$user = getUser($_POST["username"]);
			
			if($user != "ERROR:USER"){
				
				if($_POST["password"] == $user["password"]){
					//logged in
					$_SESSION["username"] = $user["username"];
					$_SESSION["key"] = $user["key"];
					$_SESSION["password"] = $user["password"];
					header("Location: index.php");
				}else{
					//incorrect password
					$_POST["err"] = "Incorrect Password";
				}
			}else{
				//user not in DB
				$_POST["err"] = "Username not found";
			}
		}
	?>
  </head>
  <br><br><br>
  <body>
	<?php
		if(isset($_POST["err"])){
			echo "ERROR: ".$_POST["err"];
		}
	?>
    	<div class="container">
	  	  <div class="well">
	  	    <form action="" class="form-signin" method="post">
	  	    	<div class="logintitle">Sign In</div>
	      		<br><input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
	      		<br><input type="password" name="password" class="form-control" placeholder="Password" required>
			<input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
			<table width="100%">
			<tr>
			<th width="48%">
  			<input class="btn btn-lg btn-success btn-block" type="button" value="Register" onClick="parent.location='register.php'">
     			<th width="4%">
			<th width="48%">
			<input class="btn btn-lg btn-warning btn-block" type="button" value="Forgot Password" onClick="">
			</tr>
					</form>
				</div>
			</div>
		</center>
	</body>
</html>
<?php
	}else{
		header("Location: index.php");
	}
?>