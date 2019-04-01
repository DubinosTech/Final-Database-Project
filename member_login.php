<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Users login</title>
	
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="css/form.css">

	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
</head>
<body>

	<!-- HEADER -->
	<div id="header">
		
		<div class="page-full-width cf">
			
			<div id="login-intro" class="fl">
				
				<h1>Users login</h1>
				<h5>Please enter your login information below</h5>
				
			</div> <!-- login-intro -->
			
		</div> <!-- end full-width -->	

	</div> <!-- end header -->
	
	
	
	<!-- MAIN CONTENT -->
	<div id="content">
		
		<form action="" method="POST" id="login-form">
			
			<fieldset>

				<p>
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" class="round full-width-input" required/>
				</p>

				<p>
					<label for="pass">Password:</label>
					<input type="password" id="pass" name="pass" class="round full-width-input" required/>
				</p>
				
				<input class="button round blue image-right ic-right-arrow" type="submit" name="login" value="Login"/>

			</fieldset>

			<br/><div class="information-box round">Please ensure that you have correctly entered all information, then click Login</div>

		</form>
<?php
include_once "inc/prelude.php";
?>
		<?php
		session_start();
		if (array_key_exists('login', $_POST)) {
			$email = $_POST['email'];
			$member_password = $_POST['pass'];

			connectDB();

			// Establish the connection
			$dbconn = pg_connect("host=localhost port=5432 dbname=cojoDatabase user=postgres password=admin") or die('Could not connect: ' . pg_last_error());

			$query = "select * from cojoDatabase.Users where email='".$_POST['email']."' and password='".$_POST['pass']."';";
			$result = pg_query($query) or die('Query failed: ' . pg_last_error());

			$row_count = pg_num_rows($result);
			if($row_count>0){
				$_SESSION['email']=$email;
				$_SESSION['loggedin']=true;
				header("location: index.php");
				exit;
			} else {
			    $_SESSION['loggedin']=false;
				echo "Login failed!";				
			}

			pg_free_result($result);
			pg_close($dbconn);
		}
		?>
		
	</div> <!-- end content -->
</body>
</html>
