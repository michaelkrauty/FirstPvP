<?php
	include_once 'inc/db_connect.php';
	include_once 'inc/functions.php';

	sec_session_start();

	if (login_check($mysqli) == true) {
		$logged = 'in';
	} else {
		$logged = 'out';
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php
  		$pageName = "login";
  		$title = "FirstPvP Login";
  		include_once "inc/head.php";
  	
  	?>
  </head>
  <div class="strokeme">
  </div>
  <br>
  <body>
    	<div class="container">
	  	  <div class="well">
	  	    <form action="includes/login.inc.php" class="form-signin" role="form" method="post" name="login_form">
	  	    	<center><logintitle>Sign In</logintitle></center>
		      	<?php
	  	    	  if (isset($_GET['error'])) {
	        	  	echo '<p class="error">Error Logging In!</p>';
	        		}
	      		?>
	      		<br><input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
	      		<br><input type="password" name="password" class="form-control" placeholder="Password" required>
			<input class="btn btn-lg btn-primary btn-block" type="submit" value="Login" onclick="formhash(this.form, this.form.password);">
			<table width="100%">
			<tr>
			<th width="48%">
  			<input class="btn btn-lg btn-success btn-block" type="button" value="Register" onClick="parent.location='register.php'">
     			<th width="4%">
			<th width="48%">
			<input class="btn btn-lg btn-warning btn-block" type="button" value="Forgot Password" onClick="parent.location='forgotpassword.php'">
			</tr>
					</form>
				</div>
			</div>
		</center>
	</body>
</html>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
