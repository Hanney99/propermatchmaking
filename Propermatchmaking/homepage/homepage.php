<?php 
include('../registrationandlogin/server.php');
?>
<!DOCTYPE html>
<html>
<title>Homepage</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" type="text/css" href="../reset.css"/>
<link rel="stylesheet" type="text/css" href="style3.php"/>


<body>
  
 <?php if (!isset($_SESSION['username'])) : ?>
	<div class="topbar">
	<div class="topnav">
		  <a class="active" href="../homepage/homepage.php">Home</a>
		  <a href="#play">Play</a>
		  <a href="#about">About</a>
		  <div class="regandlog">
		  <a href="../registrationandlogin/login.php">Sign in</a>
		  <a href="../registrationandlogin/register.php">Sign up</a>
		  </div>
		</div>
	</div>

<?php endif ?>

	 <?php  if (isset($_SESSION['username'])) : ?>
	 <div class="topbar1">
	<div class="dropdown1" style="float:right;">
		  	<button class="drpbtn1"><?php echo $_SESSION['username'];?></button>
		  		<div class="dropdowncontent1">
		  			<a href="../account/Profile.php">Profile</a>
		  			<a href="#">Adjust Gamepreferences</a>
		  			<a href="#">Settings</a>
		  			<a href="homepage.php?logout='1'" style="color: red;">Logout</a>
		  		</div>
		  	</div>

	<div class="topnav1">
		  <a class="active1" href="../homepage/homepage.php">Home</a>
		  <a href="#play">Play</a>
		  <a href="#about">About</a>
		 
		  </div>
		</div>
	</div>
	 <?php endif ?>

<h2>Proper Matchmaking</h2>

<div class="Slideshow" style="max-width:700px;border-radius: 25px">
  <img class="mySlides" src="csgo.jpg" style="width:100%;border-radius: 25px">
  <img class="mySlides" src="overwatch4.jpg" style="width:100%;border-radius: 25px">
  <img class="mySlides" src="leagueoflegends.jpg" style="width:100%;border-radius: 25px">
  <img class="mySlides" src="dota2.jpeg" style="width:100%;border-radius: 25px">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>
</body>
</html>