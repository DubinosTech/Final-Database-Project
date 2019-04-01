<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COJO OLYMPIC GAMES :: LOG OUT PAGE</title>
    <?php include "inc/resources.php" ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>COJO OLYMPICS</h1>
        </header>

        <a href="member_login.php" class="LOG IN AGAIN "> LOG IN BACK ?</a>

        <?php
	
			// Initialize the session
			session_start();

			// Unset all of the session variables
			$_SESSION = array();

			if(isset ($_SESSION['loggedin']) && $_SESSION['loggedin'])
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
				echo "<p id='connectMsg' class='alert alert-success'> =====> LOGGED OUT !</p>";
			}
		?>

        
    </div>
</body>
</html>