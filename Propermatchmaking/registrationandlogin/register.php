<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="../reset.css"/>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>

	<div class="topbar">
	<div class="topnav">
		  <a href="../homepage/homepage.php">Home</a>
		  <a href="#play">Play</a>
		  <a href="#about">About</a>
		  <div class="regandlog">
		  <a href="login.php">Sign in</a>
		  <a class="active" href="register.php">Sign up</a>
		  </div>
		</div>
	</div>
	<div class="middle">
	<div class="header">
		<h2>Register</h2>
	</div>
<form action="register.php" method="post">
	<table>
		<tr>
			<th colspan="4">
				<!-- display errors -->	
				<?php include('errors.php'); ?>
				<p class="mandatory">fields with * are required</p>
			</th>	
		</tr>
		<tr>
			<td class="inputlabel">
					*Username:
			</td>
			<td class="inputinput">
				<input type="text" name="username" value="<?php echo $username ?>" />
			</td>
			<td class="inputlabel">
					*Password:
			</td>
			<td class="inputinput">
				<input type="password" name="password_1"/>
			</td>

		</tr>

		<tr>
			<td class="inputlabel">
					*Email:
			</td>
			<td class="inputinput">
				<input type="email" name="email_1" value="<?php echo $email_1 ?>" />
			</td>
			<td class="inputlabel">
					*Confirm Password:
			</td>
			<td class="inputinput">
				<input type="password" name="password_2"/>
			</td>
		</tr>

		<tr>
			<td class="inputlabel">
					*Confirm Email:
			</td>
			<td class="inputinput">
				<input type="email" name="email_2" value="<?php echo $email_2 ?>"/>
			</td>
			<td class="inputlabel">
					*Birthday:
			</td>
			<td class="inputinput">
				<input type="date" name="bdate" min="01/01/2005"/>
			</td>
		</tr>
		
		<tr>
			<td class="inputlabel">
					*Region:
			</td>
			<td class="inputinput">
				<select name="region">
				<option value="EMP">Select a region</option>
				<option value="ANT">Antwerpen</option>
				<option value="LIM">Limburg</option>
				<option value="OVL">Oost-Vlaanderen</option>
				<option value="VLB">Vlaams-Brabant</option>
				<option value="WVL">West-Vlaanderen</option>
				<option value="Hen">Henegouwen</option>
				<option value="LUI">Luik</option>
				<option value="LUX">Luxemburg</option>
				<option value="NAM">Namen</option>
				<option value="WLB">Waals-Brabant</option>
				<option value="BRU">Brussel</option>
			</select>
			</td>
			<td class="inputlabel">
					*Language:
			</td>
			<td class="inputinput">
				<select name="language_1">
				<option value="EMP">Select a language</option>
				<option value="ENG">English</option>
				<option value="NED">Nederlands/Vlaams</option>
				<option value="FRA">Francais</option>
			</select>
			</td>
		</tr>
		
		<tr>
			<td>
					
			</td>
			<td>
				
			</td>
			<td class="inputlabel">
				2nd Language:	
			</td>
			<td class="inputinput">
				<select name="language_2">
				<option value="EMP">Select a language</option>
				<option value="ENG">English</option>
				<option value="NED">Nederlands/Vlaams</option>
				<option value="FRA">Francais</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>
					
			</td>
			<td>
				
			</td>
			<td class="inputlabel">
					3rd Language:
			</td>
			<td class="inputinput">
				<select name="language_3">
				<option value="EMP">Select a language</option>
				<option value="ENG">English</option>
				<option value="NED">Nederlands/Vlaams</option>
				<option value="FRA">Francais</option>
			</select>
			</td>
		</tr>
		
		<tr>
			<td>
				<button type="submit" name="register" class="bttn">Sign up</button>
			</td>
		</tr>
	</table>
	<p class="inputlabel">
		Already Registered? Sign in <a href="login.php">here</a>
	</p>
</form>
</div>
</body>
</html>