<?php session_start();?>
<?php echo $_SESSION["username"];?>
<?php
function screenOnline(){
	return strpos(shell_exec("screen -list mc/"), "firstpvp");
}

function executeCommand($command){
	if(screenOnline()){
		shell_exec("screen -x mc/firstpvp -p 0 -X stuff \"`printf \"$command\r\"`\";");
	}
}

var_dump(screenOnline());
var_dump(shell_exec("screen -list mc/"));
var_dump(shell_exec("pwd"));
var_dump($_SESSION);
var_dump($_SERVER);


?>