<?php
	include_once "config.php";
	include_once "db_connect.php";
	
	function sec_session_start(){
		$session_name = "sec_session_id";
		$secure = SECURE;
		$httponly = true;
		if(ini_set("session.use_only_cookies", 1) === FALSE){
			header("Location: ../error.php?err=Could not initiate a safe session (ini_set_");
			exit();
		}
		$cookieParams = session_get_cookie_params();
		session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
		session_name($session_name);
		session_start();
		session_regenerate_id();
	}
	
	
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
		$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
		if(isset($_SESSION["user_id"], $_SESSION["username"], $_SESSION["login_string"])){
			$user_id = $_SESSION["user_id"];
			$login_string = $_SESSION["login_string"];
			$username = $_SESSION["username"];
			
			$user_browser = $_SERVER["HTTP_USER_AGENT"];
			
			if($stmt == $mysqli->prepare("SELECT password FROM members WHERE id=? LIMIT 1")){
				$stmt->bind_param("i", $user_id);
				$stmt->execute();
				$stmt->store_result();
				
				if($stmt->num_rows == 1){
					$stmt->bind_result($password);
					$stmt->fetch();
					if($password == $login_string){
						return true;
					}
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	
?>