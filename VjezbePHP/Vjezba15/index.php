<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registracija</title>
	<style>
		body {
			text-align: center;
		}
		h1 {
			padding-top: 50px;
		}
		input {
			margin-bottom: 25px;
		}
	</style>
</head>
<body>
<?php 
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);

	print '
	<h1>Registration Form</h1>
	<div id="register">';
	
	if ($_POST['_action_'] == FALSE) {
		$MySQL = mysqli_connect("localhost","root","","baza_podataka_php") or die('Error connecting to MySQL server.');
		print '
		<form action="" id="registration_form" name="registration_form" method="POST">
			<input type="hidden" id="_action_" name="_action_" value="TRUE">
			
			<label for="fname">First Name *</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name.." required>
			<br>
			<label for="lname">Last Name *</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
			<br>	
			<label for="email">Your E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Your e-mail.." required>
			<br>
			<label for="username">Username:* <small>(Username must have min 5 and max 10 char)</small></label>
			<input type="text" id="username" name="username" pattern=".{5,10}" placeholder="Username.." required><br>
			<br>
									
			<label for="password">Password:* <small>(Password must have min 4 char)</small></label>
			<input type="password" id="password" name="password" placeholder="Password.." pattern=".{4,}" required>
			<br>
			<label for="country">Country:</label>
			<select name="country" id="country">
				<option value="">Molimo odaberite</option>';
				$query = "SELECT * FROM countries";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
			print '
			</select>
			<br>
			<input type="submit" value="Submit">
		</form>';
	}
	else if ($_POST['_action_'] == TRUE) {
		
		$MySQL = mysqli_connect("localhost","root","","baza_podataka_php") or die('Error connecting to MySQL server.');
		
		$query  = "SELECT * FROM users";
		$query .= " WHERE user_email='" .  $_POST['email'] . "'";
		$query .= " OR user_username='" .  $_POST['username'] . "'";
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if ($row['email'] == '' || $row['username'] == '') {
			$pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
			
			$query  = "INSERT INTO users (user_firstname, user_lastname, user_email, user_username, user_password, user_country)";
			$query .= " VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['email'] . "', '" . $_POST['username'] . "', '" . $pass_hash . "', '" . $_POST['country'] . "')";
			$result = @mysqli_query($MySQL, $query);

			echo '<p>' . ucfirst(strtolower($_POST['firstname'])) . ' ' .  ucfirst(strtolower($_POST['lastname'])) . ', thank you for your registration! </p>
			<hr>';
		}
		else {
			echo '<p>User with this email or username already exist!</p>';
		}
	}
	print '
	</div>';
?>
</body>
</html>
