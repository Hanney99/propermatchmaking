<?php
session_start();	
		$username="";
		$email_1="";
		$email_2="";
		$password_1="";
		$password_2="";
		$region="";
		$language_1="";
		$language_2="";
		$language_3="";
		$errors= array();


	//CONNECT DATABASE 
	$db = mysqli_connect('localhost', 'root', '', 'propermatchmaking_database');

	//if register is clicked

		if (isset($_POST['register'])) {

			$username = mysqli_real_escape_string($db,$_POST['username']);
			$email_1 = mysqli_real_escape_string($db,$_POST['email_1']);
			$email_2 = mysqli_real_escape_string($db,$_POST['email_2']);
			$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
			$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
			$region = mysqli_real_escape_string($db,$_POST['region']);
			$language_1 = mysqli_real_escape_string($db,$_POST['language_1']);
			$language_2 = mysqli_real_escape_string($db,$_POST['language_2']);
			$language_3 = mysqli_real_escape_string($db,$_POST['language_3']);
		

			//form field are filled in

				if(empty($username)){
					array_push($errors,"Username is required!");
				}
				if(empty($email_1)){
					array_push($errors,"Email is required!");
				}
				if($email_1 != $email_2){
					array_push($errors,"Emails do not match!");
				}
				if(empty($password_1)){
					array_push($errors,"Password is required!");
				}
				if($password_1 != $password_2){
					array_push($errors,"Passwords do not match!");
				}
				if($region == "EMP"){
					array_push($errors,"Please select a region!");
				}
				if($language_1 == "EMP"){
					array_push($errors,"Please select a language!");
				}
				if($language_2 != "EMP" and ($language_1 == $language_2)){
					array_push($errors, "Please select different languages!");
				}
				if($language_3 != "EMP" and ($language_1 == $language_3)){
					array_push($errors, "Please select different languages!");
				}
				if(($language_2 != "EMP" and $language_3 != "EMP"  )and ($language_1 == $language_2)){
					array_push($errors, "Please select different languages!");
				}

				// first check the database to make sure 
				  // a user does not already exist with the same username and/or email
				  $user_check_query = "SELECT * FROM account WHERE AccountName='$username' LIMIT 1";
				  $result = mysqli_query($db, $user_check_query);
				  $user = mysqli_fetch_assoc($result);
				  
				  if ($user) { // if user exists
				    if ($user['AccountName'] === $username) {
				      array_push($errors, "Username already exists");
				    }
				    $user_check_query = "SELECT * FROM accountinfo WHERE EmailAddress='$email_1' LIMIT 1";
				  	$result = mysqli_query($db, $user_check_query);
				  	$user = mysqli_fetch_assoc($result);
				    if ($user['EmailAddress'] === $email_1) {
				      array_push($errors, "email already exists");
				    }
				  }
		

			//no errors

			if (count($errors) == 0){
		
				$password = md5($password_1); //ecrypt password
				mysqli_query($db, "INSERT INTO account (AccountName, SecurityPass) VALUES ('$username', '$password')");
				
				if ($language_2 == "EMP" and $language_3=="EMP") {
				$id = mysqli_insert_id($db);
				mysqli_query($db, "INSERT INTO accountinfo (AccountID, EmailAddress,Region, 1eLanguage ) VALUES ($id, '$email_1', '$region','$language_1' )");
				}
				//else{
					if ($language_2 != "EMP" and $language_3=="EMP") {
						$id = mysqli_insert_id($db);
					mysqli_query($db, "INSERT INTO accountinfo (AccountID, EmailAddress,Region, 1eLanguage, 2eLanguage) VALUES ($id, '$email_1', '$region','$language_1', '$language_2',)");
					}
					//else{
						if ($language_3 != "EMP" and $language_2!="EMP") {
							$id = mysqli_insert_id($db);
						mysqli_query($db, "INSERT INTO accountinfo (AccountID, EmailAddress,Region, 1eLanguage, 2eLanguage, 3eLanguage) VALUES ($id, '$email_1', '$region','$language_1', '$language_2', '$language_3')");
						}	
					//}
				//}

				$_SESSION['username'] = $username;
				$_SESSION['succes'] = "you are now registered";
				header('location:../registrationandlogin/login.php');

			}	
		}

		//log user in via login page
			if(isset($_POST['login'])){
				$username = mysqli_real_escape_string($db,$_POST['username']);
				$password = mysqli_real_escape_string($db,$_POST['password']);
		//everything filled in?
				if(empty($username)){
					array_push($errors,"Username is required!");
				}
				if(empty($password)){
					array_push($errors,"Password is required!");
				}
				if (count($errors) == 0){
		
					$password = md5($password); //ecrypt password
					$result = mysqli_query($db, "SELECT * FROM account WHERE AccountName='$username'AND SecurityPass='$password'");
					if (mysqli_num_rows($result) == 1){
						//log user in
						$_SESSION['username'] = $username;
						$_SESSION['succes'] = "you are now logged in";
						header("location: ../account/Profile.php");
					}
					else{
						array_push($errors, "Wrong Username/password combination!" );
						
					}

				}
			}	



		//logout
			if(isset($_GET['logout'])){
				session_destroy();
				unset($_SESSION['username']);
				header("location: {$_SERVER['HTTP_REFERER']}");
			}
?>