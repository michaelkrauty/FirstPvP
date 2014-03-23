<?php session_start();?>
<?php
	include_once "inc/db_connect.php";
	include_once "inc/functions.php";
?>
<html>
	<head>
		<?php
			$title = "FirstPvP Voting";
			$pageName = "vote";
			include_once "inc/head.php";
		?>
	</head>
	<body>
	<?php include_once "inc/header.php";?>
		<div class="body">
		
		
			<div class="main">
			<div class="well" style="margin-left:30%;margin-right:30%;">
			<h2>Voting Links:</h2>
			</div>
					<h3>
					<p><button class="btn btn-lg btn-info" onClick="window.open('http://www.planetminecraft.com/server/firstpvp--pvp-raiding-custom-plugins-minigames-247/vote/')">planetminecraft.com</button></p>
					<p><button class="btn btn-lg btn-info" onClick="window.open('http://minecraftservers.org/vote/128291')">minecraftservers.org</button></p>
					<p><button class="btn btn-lg btn-info" onClick="window.open('http://theminecraftserverlist.com/vote/firstpvp.dominationvps.com')">theminecraftserverlist.com</button></p>
					<p><button class="btn btn-lg btn-info" onClick="window.open('http://minecraft-server-list.com/server/220728/vote/')">minecraft-server-list.com</button></p>
					<p><button class="btn btn-lg btn-info" onClick="window.open('http://mineservers.com/server/22425/vote')">mineservers.com</button></p>
					<p><button class="btn btn-lg btn-info" onClick="window.open('http://www.serverlistminecraft.com/?server=5950&vote=1')">serverlistminecraft.com</button></p>
					<p><button class="btn btn-lg btn-info" onClick="window.open('http://minecraft-mp.com/server/40124/vote/')">minecraft-mp.com</button></p>
					<p><button class="btn btn-lg btn-info" onClick="window.open('http://topg.org/Minecraft/in-382081')">topg.org</button></p>
					</h3>
					
					</div>
			
			
		</div>
	</body>
</html>
<?php include_once "inc/script.php";?>