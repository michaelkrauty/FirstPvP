<?php
	$error_msg = "";

	if($_POST["password"] != $_POST["confirmpassword"]){
		$_GET["err"] = "Password and Password Confirmation do not match!";
	}
	
	if(isset($_POST["username"], $_POST["key"], $_POST["password"]) && !isset($_GET["err"])){
		$username = $_POST["username"];
		$key = $_POST["key"];
		$password = $_POST["password"];
		
		$stmt = $mysqli->prepare("SELECT id FROM members WHERE username=? LIMIT 1");
		
		if($stmt){
			$stmt->bind_param("s", $username);
			$stmt->execute();
			$stmt->store_result();
			
			if($stmt->num_rows == 1){
				$error_msg = "A user with this username already exists.";
			}
		}else{
			$error_msg = "Database error";
		}
		
		if(empty($error_msg)){
			$insert_stmt = null;
			if($insert_stmt == $mysqli->prepare("INSERT INTO members (username, key, password) VALUES (?,?,?)")){
				$insert_stmt->bind_param("sss", $username, $key, $password);
				if(!$insert_stmt->execute()){
					header("Location: ../error.php?err=registration failure: INSERT");
				}
			}
			header("Location: register_success.php");
		}
	}
?>