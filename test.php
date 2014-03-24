<?php session_start();?>
<?php echo $_SESSION["username"];?>
<?php
function screenOnline(){
	if(strpos(shell_exec("screen -list mc/"), "firstpvp")){return true;}else{return false;}
}

function executeCommand($command){
	if(screenOnline()){
		shell_exec("screen -x mc/firstpvp -p 0 -X stuff \"`printf \"$command\r\"`\";");
	}
}
echo "screenOnline()<br>";
var_dump(screenOnline());
echo "shell_exec('screen -list mc/')<br>";
var_dump(shell_exec("screen -list mc/"));
echo "executeCommand('say test')<br>";
var_dump(executeCommand("say test"));
echo "shell_exec(stuff)";
var_dump(shell_exec("screen -x mc/firstpvp -p 0 -X stuff \"`printf \"$command\r\"`\";"));
echo "shell_exec('pwd')<br>";
var_dump(shell_exec("pwd"));
echo "_SESSION<br>";
var_dump($_SESSION);
echo "_SERVER<br>";
var_dump($_SERVER);


?>