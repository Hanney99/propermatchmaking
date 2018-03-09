<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="../reset.css"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<div class="topbar">
	<div class="topnav">
		  <a href="../homepage/homepage.php">Home</a>
		  <a href="#Play">Play</a>
		  <a href="#about">About</a>
		  <div class="regandlog">
		  <a class="active" href="login.php">Sign in</a>
		  <a href="register.php">Sign up</a>
		  </div>
		</div>
	</div>

	<div class="middle">

	<div class="header">
		<h2>Login</h2>
	</div>

<form action="login.php" method="post">
	
	<table>
		<tr>
			<td>
				<label class="inputlabel">Username:</label>
				<div class="inputinput">
				<input type="text" name="username">
				</div>
			</td>
			<th rowspan="2">
				<!--errors-->
				<?php include('errors.php'); ?>
			</th>
		</tr>
		<tr>
			<td>
				<label class="inputlabel">Password:</label>
				<div class="inputinput">
				<input class="inputinput" type="password" name="password"/>
				</div>
			</td>
		</tr>
		
	<tr>
		<td>
			<div class="input">
			<button type="submit" name="login" class="bttn">Sign in</button>
			</div>
		</td>
	</tr>
	<tr>
		<td class="inputlabel">
	
		Not registered yet? Register <a href="register.php">here</a>
		</td>
	</tr>
	</table>
</form>
</div>
</body>
</html>