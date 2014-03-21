<?php
	include_once "config.php";
	include_once "db_connect.php";	
	
	function login($username, $password = null, $key = null){
		if($stmt == $mysqli->prepare("SELECT id, username, key, password FROM members WHERE username=? LIMIT 1")){
			$stmt->bind_param("s", $username);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($user_id, $username, $key, $db_password);
			$stmt->fetch();
			
			if($stmt->num_rows == 1){
				if(checkbrute($user_id, $mysqli)){
					return false;
				}else{
					if($db_password == $password){
						$user_browser = $_SERVER["HTTP_USER_AGENT"];
						$user_id = preg_replace("/[^0-9]+/", "", $user_id);
						$_SESSION["user_id"] = $user_id;
						$username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);
						$_SESSION["username"] = $username;
						$_SESSION["key"] = $key;
						$_SESSION["login_string"] = $password;
						return true;
					}
				}
			}else{
				return false;
			}
		}
	}
	
	function login_check(){
		if(isset($_SESSION["username"], $_SESSION["key"], $_SESSION["password"])){
			$dbuser = getUser($_SESSION["username"]);
			if($dbuser["key"] == $_SESSION["key"] && $dbuser["password"] == $_SESSION["password"]){
				return true;
			}
		}else{
			return false;
		}
	}
	
?>