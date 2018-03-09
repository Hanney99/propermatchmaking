<?php 
include('../registrationandlogin/server.php');

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../registrationandlogin/login.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="../reset.css"/>
	<link rel="stylesheet" type="text/css" href="style2.css">
	
</head>
<body>
<div class="topbar">
	<div class="dropdown" style="float:right;">
		  	<button class="drpbtn"><?php echo $_SESSION['username'];?></button>
		  		<div class="dropdowncontent">
		  			<a class="active" href="#">Profile</a>
		  			<a href="#">Adjust Gamepreferences</a>
		  			<a href="#">Settings</a>
		  			<a href="Profile.php?logout='1'" style="color: red;">Logout</a>
		  		</div>
		  	</div>

	<div class="topnav">
		  <a href="../homepage/homepage.php">Home</a>
		  <a href="#play">Play</a>
		  <a href="#about">About</a>
		 
		  </div>
		</div>
	</div>

	<h1>Profile Page</h1>
</body>
</html>