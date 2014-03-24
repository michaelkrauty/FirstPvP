<?php
	include_once "config.php";
	include_once "db_connect.php";
	
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