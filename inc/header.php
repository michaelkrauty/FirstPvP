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
				<?php echo "<li";if($pageName == "wiki"){echo" class='active'";}echo">";echo"<a href='wiki' title='Wiki'>Wiki<br></a></li>";?>
				<?php echo "<li";if($pageName == "map"){echo" class='active'";}echo">";echo"<a href='http://firstpvp.dominationvps.com:8123' title='Map'>Map<br></a></li>";?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $pageName; ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/mpcp/settings/"><span class="glyphicon glyphicon-dashboard"></span> Settings</a></li>
						<li><a href=""><span class="glyphicon glyphicon-plus-sign"></span> Sub Users</a></li>
						<li><a href="/mpcp/forum/"><span class="glyphicon glyphicon-question-sign"></span> Support</a></li>
						<li><a href="/mpcp/knowledgebase/"><span class="glyphicon glyphicon-info-sign"></span> Knowledgebase</a></li>
						<li><a href="/mpcp/forum/"><span class="glyphicon glyphicon-comment"></span> Forum</a></li>
						<li><a href=""><span class="glyphicon glyphicon-exclamation-sign"></span> Access Log</a></li>
						<li class="divider"></li>
						<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>