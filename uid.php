<?php
if(isset($_POST["u"])){
	include_once "inc/db_connect.php";
	
	$res = getUser($_POST["u"]);while($row = mysqli_fetch_assoc($res)){$data[] = $row;}$player["ID"] = $data[0]["ID"];$player["player"] = $data[0]["player"];$player["UID"] = $data[0]["UID"];
	echo $player["ID"]." ".$player["player"]." ".$player["UID"];
}
$_
?>

<form action="uid.php" method="post">
	<input name="u" type="text" placeholder="Type a player's username" autofocus/>
</form>
