<?php

// Starting the session, necessary
// for using session variables
session_start();

// Declaring and hoisting the variables
$email = "";
$errors = array();
$_SESSION['success'] = "";

// DBMS connection code -> hostname,
// username, password, database name
$db = mysqli_connect('localhost', 'root', '', 'student');

// Registration code

// User login
if (isset($_POST['login_user'])) {
	
	// Data sanitization to prevent SQL injection
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = $_POST['password'];


	// Error message if the input field is left blank
	if (empty($email)) {
		array_push($errors, "email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// Checking for the errors
	if (count($errors) == 0) {
		
		// Password matching
		// $password = md5($password);
		
		$query = "SELECT * FROM user WHERE email=
				'$email' AND password='$password'";
		$results = mysqli_query($db, $query);
		$row = mysqli_fetch_assoc($results);

		

		// $results = 1 means that one user with the
		// entered username exists
		if (mysqli_num_rows($results)) {
			
			// Storing username in session variable
			$_SESSION['email'] = $email;
			
			// Welcome message
			$_SESSION['success'] = "You have logged in!";
			
			// Page on which the user is sent
			// to after logging in
			header('location: student_profile.php');
		}
		else {
			
			// If the username and password doesn't match
			array_push($errors, "email or password incorrect");
		}
	}
}

?>
