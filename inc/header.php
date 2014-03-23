<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class='container'>
		<div class='navbar-header'>
			<span class='sr-only'>Toggle navigation</span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
			<a class='navbar-brand' href='index.php';"vertical-align:middle";> FirstPvP </a>
		</div>
		<div class='navbar-collapse'>
			<ul class='nav navbar-nav'>
				<?php echo "<li";if($pageName == "index"){echo" class='active'";}echo">";echo"<a href='index.php' title='Home'>Home</a></li>";?>
				<?php echo "<li";if($pageName == "shop"){echo" class='active'";}echo">";echo"<a href='shop.php' title='Shop'>Shop</a></li>";?>
				<?php echo "<li";if($pageName == "permissions"){echo" class='active'";}echo">";echo"<a href='permissions.php' title='Permissions'>Permissions Shop</a></li>";?>
				<?php echo "<li";if($pageName == "vote"){echo" class='active'";}echo">";echo"<a href='vote.php' title='Vote'>Voting</a></li>";?>
				<?php echo "<li";if($pageName == "info"){echo" class='active'";}echo">";echo"<a href='info.php' title='Info'>Info<br></a></li>";?>
				<?php echo "<li";if($pageName == "map"){echo" class='active'";}echo">";echo"<a href='http://firstpvp.dominationvps.com:8123' title='Map'>Map<br></a></li>";?>
				<?php echo "<li";if($pageName == "stats"){echo" class='active'";}echo">";echo"<a href='stats' title='Stats'>Stats<br></a></li>";?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<?php if(login_check()){?>
			<?php
			if(isset($_POST["logout"])){
				session_destroy();
				header("Location: index.php");
			}
			if(isset($_POST["settings"])){
				header("Location: settings.php");
			}
			?>
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION["username"]; ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li style="text-align:center;"><form method="post"><button style="width:90%;margin-top:10px;" name="settings" type="submit" class="btn btn-sm btn-info">Account Settings</button></form></li>
						<li class="divider"></li>
						<li style="text-align:center;"><form method="post"><button style="width:90%;" name="logout" type="submit" class="btn btn-sm btn-info">Logout</button></form></li>
					</ul>
				</li>
				<?php }if(!login_check()){?>
					<?php 
						if(isset($_POST["login"])){
							header("Location: login.php");
						}
					?>
					<div style="margin-top:10px;"><form method="post"><button name="login" type="submit" class="btn btn-sm btn-info">Log In</button></form></div>
				<?php }?>
			</ul>
		</div>
	</div>
</div>