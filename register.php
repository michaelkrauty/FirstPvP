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
			$pageName = "register";
			$title = "FirstPvP Registration";
			include_once "inc/head.php";
		?>
		<?php
			
			if(isset($_POST["username"], $_POST["key"], $_POST["password"], $_POST["confirmpassword"])){
				$username = $_POST["username"];
				$key = $_POST["key"];
				$password = $_POST["password"];
				$confirmpassword = $_POST["confirmpassword"];
				
				if($password == $confirmpassword){
					
					$createUser = createUser($username, $key, $password);
					
					if($createUser != "ERROR:USER"){
					
						if($createUser != "ERROR:PASSWORD"){
							
							if($createUser != "ERROR:KEY"){
								
								if($createUser == "SUCCESS"){
									
									$_SESSION["username"] = $username;
									$_SESSION["key"] = $key;
									$_SESSION["password"] = $password;
									header("Location: register_success.php?m=".$username);
								}else{
									//unknown error
									$_POST["err"] = "Something went wrong. Not sure what :/";
								}
							}else{
								//key is wrong
								$_POST["err"] = "The key you entered is wrong. You can get your current key by using \"/key\" while in the minecraft server.";
							}
						}else{
							//password is already set
							$_POST["err"] = "A password has already been set for your account! You can reset your password by clicking \"Reset Password\" on the login page.";
						}
					}else{
						$_POST["err"] = "That username doesn't exist yet! Have you joined the server before?";
					}
				}else{
					//pass and confirmation don't match
					$_POST["err"] = "Password and Password Confirmation do not match!";
				}
			}
		?>
		<?php
			if(isset($_POST["err"])){
				echo "ERROR: ".$_POST["err"];
			}
		?>
	</head>
  <br><br><br>
	<body>
		<div class="container">
		<div class="well">
			<div class="logintitle">
				Register
			</div>
			<form action="" method="post">
				<br><input type="text" name="username" class="form-control" placeholder="Minecraft Username" required autofocus>
				<br><input type="text" name="key" class="form-control" placeholder="FirstPvP Key" required>
				<br><input type="password" name="password" class="form-control" placeholder="Password" required>
				<br><input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
				<br><input class="btn btn-lg btn-success btn-block" type="submit" value="Register">
				<br><input class="btn btn-lg btn-primary btn-block" type="button" value="Back to login" onClick="parent.location='login.php'">
			</form>
			</div>
		</div>
	</body>
</html>
<?php
	}else{
		header("Location: index.php");
	}
?>