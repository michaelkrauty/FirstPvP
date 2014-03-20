<?php
	include_once "inc/functions.php";
	
	sec_session_start();
	if(login_check($mysqli)){
		$logged = "in";
	}else{
		$logged = "out";
	}
	echo $logged;
?>