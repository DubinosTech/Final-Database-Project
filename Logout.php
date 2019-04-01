<?php
	
	// Initialize the session
	session_start();

	// Unset all of the session variables
	$_SESSION = array();

	if($_SESSION['loggedin'])
	{		 
			// Destroy the session.
			session_destroy();
			 
			// Redirect to login page
			header("location: member_login.php");
			exit;
			echo "<p id='connectMsg' class='alert alert-success'>YOU ARE ALREADY LOGGED OUT, PLEASE ENTER YOUR USERNAME AND PASSWORD TO LOG IN AGAIN !</p>";
	}
	else 
	{
		echo "<p id='connectMsg' class='alert alert-success'> ====> YOU ARE ALREADY LOGGED OUT</p>";
	}
?>