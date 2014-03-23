<?php ini_set('display_errors',1); 
 error_reporting(E_ALL); session_start();?>
<?php
	include_once "inc/db_connect.php";
	include_once "inc/functions.php";
	
	if(login_check()){
?>
<html>
	<head>
		<?php
			$title = "FirstPvP Permissions Shop";
			$pageName = "permissions";
			include_once "inc/head.php";
		?>
	</head>
	<body>
	<?php include_once "inc/header.php";?>
	<?php include_once "inc/permissions.php";?>
		<div class="body">
		
			<div class="main">
				<div class="well">
		<?php echo shell_exec("screen -x mc/firstpvp -p 0 -X stuff \"`printf \"say test\r\"`\";");?>
		<div class="well">This is a work in progress, and doesn't work yet.</div>
					<div class="panel panel-default">
						<!-- Default panel contents -->
						<div class="panel-heading"><h1>Permissions Shop</h1></div>
						<div class="panel-body">
						</div>
						<!-- Table -->
						<form action="" method="post">
						<table class="table">
						<h1>
							Transportation:
						</h1>
							<tr>
								<th>Command/Ability</th>
								<th>Price</th>
								<th>Buy</th>
							</tr>
							<tr>
								<td>essentials.top</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.top" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.back</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.back" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.back.ondeath</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.back.ondeath" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.sethome.multiple</td>
								<td>$100</td>
								<td><button name="PERMISSION:essentials.sethome.multiple" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.sethome.NUMBER HERE (price set per home)</td>
								<td>$1000</td>
								<td><button name="PERMISSION:" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>horses.set.user</td>
								<td>$1000</td>
								<td><button name="PERMISSION:horses.set.user" action="submit">Buy</button></td>
							</tr>
						</table>
						<h1>
							Stuff:
						</h1>
						<table class="table">
							<tr>
								<td>essentials.ptime</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.ptime" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.repair</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.repair" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.repair.enchanted</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.repair.enchanted" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.repair.all</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.repair.all" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.feed</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.feed" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.hat</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.hat" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.workbench</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.workbench" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.firework</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.firework" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.worth</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.worth" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.sell</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.sell" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.balancetop</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.balancetop" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.depth</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.depth" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.getpos</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.getpos" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.compass</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.compass" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.msg.color AND essentials.chat.color</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.msg.color,essentials.chat.color" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.afk</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.afk" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.motd</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.motd" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.me</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.me" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.mail.send</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.mail.send" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.nick</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.nick" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.nick.color</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.nick.color" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.seen AND essentials.seen.banreason</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.seen,essentials.seen.banreason" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.clearinventory</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.clearinventory" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.ping</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.ping" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.keepxp</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.keepxp" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.signs.color</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.signs.color" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.signs.magic</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.signs.magic" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>essentials.signs.format</td>
								<td>$1000</td>
								<td><button name="PERMISSION:essentials.signs.format" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>stats.signs.place AND stats.signs.destroy</td>
								<td>$1000</td>
								<td><button name="PERMISSION:stats.signs.place,stats.signs.destroy" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>auction.start</td>
								<td>$1000</td>
								<td><button name="PERMISSION:auction.start" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>whatisit.use</td>
								<td>$1000</td>
								<td><button name="PERMISSION:whatisit.use" action="submit">Buy</button></td>
							</tr>
							<tr>
								<td>kits.morekitshere</td>
								<td>$1000</td>
								<td><button name="PERMISSION:" action="submit">Buy</button></td>
							</tr>
						</table>
						<h1>
							Misc:
						</h1>
						<table class="table">
							<tr>
								<td>- stop getting automessage default messages</td>
								<td>$1000</td>
								<td><button name="PERMISSION:automessage.stopdefault" action="submit">Buy</button></td>
							</tr>
						</table>
						</form>
					</div>
				</div>
			<br><br><br><br><br><br><br><br>
			</div>
		</div>
	</body>
</html>
<?php include_once "inc/script.php";?>
<?php
	}else{
		header("Location: login.php");
	}
?>