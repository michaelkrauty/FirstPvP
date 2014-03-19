<html>
	<head>
		<?php
			$title = "FirstPvP Shop";
			$pageName = "shop";
			$playerName = "mi16";
			include_once "inc/head.php";
		?>
	</head>
	<body>
	<?php include_once "inc/header.php";?>
		<div class="body">
		
		
			<div class="main">
				
				
				
				<div class="row">
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail">
							<p>Building Blocks</p>
							<?php include_once "inc/image.php";?>
							<img src="<?php echo stretch('textures/blocks/brick.png', 64, 64);?>"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail">
						<p>Decoration Blocks</p>
						<img src="textures/blocks/peony.png" height="64" width="64"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail">
						<p>Redstone</p>
						<img src="textures/items/redstone_dust.png" height="64" width="64"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail">
						<p>Transportation</p>
						<img src="textures/blocks/rail_golden.png" height="64" width="64"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail">
						<p>Miscellaneous</p>
						<img src="textures/items/bucket_lava.png" height="64" width="64"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail">
						<p>Search Items</p>
						<img src="textures/items/iron_ingot.png" height="64" width="64"/>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail">
							<p>Foodstuffs</p>
							<img src="http://hydra-media.cursecdn.com/minecraft.gamepedia.com/7/73/Apple2.png" height="64" width="64"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail">
						<p>Tools</p>
						<img src="textures/items/iron_axe.png" height="64" width="64"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail">
						<p>Combat</p>
						<img src="textures/items/diamond_sword.png" height="64" width="64"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail">
						<p>Brewing</p>
						<img src="textures/items/potion_bottle_empty.png" height="64" width="64"/>
						</a>
					</div>
					<div class="col-xs-6 col-md-2">
						<a class="thumbnail">
						<p>Materials</p>
						<img src="textures/items/stick.png" height="64" width="64"/>
						</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>