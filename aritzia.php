<!DOCTYPE html>
<html>
<head>
<title>Aritzia</title>
</head>
<body>
	<?php
		session_start();
		
		$email= $_POST["email"]; 
		$password =$_POST["password"];

		$db = mysqli_connect("localhost", "hwa134", "Q968EhWeHbBFc74LfZtsdYXrG");
		if (!$db) { die("Connection failed: " .mysqli_connect_error()); }
		mysqli_select_db($db, "AritziaDB");
		
		//echo "For testing purpose only: email =",$email, "password=",$password;
		
		$query = "SELECT * from customerlogin
				  WHERE email = '$email' AND password = '$password'; "; 

		$result = mysqli_query($db, $query);

		$count = mysqli_num_rows($result);
		 
	 	if($count == 1){
			echo "<p>Successfully logged in!</p>";
			$_SESSION["login"]=1; 
			$_SESSION['user']=$email;
			header("Location: customerinformation.php?$email");
		}

		else{
			$_Session["login"]=0;
			$_SESSION["email"]='0';
			echo "<p>Sorry, the email or password is incorrect. Click <a href='https://datalab3.bus.sfu.ca/hwa134/aritzia%20login%20page.html'>here to go back to Homepage</a>";
			//echo "<br>For testing purpose, value of count=",$count;
			
			
		}

		mysqli_close($db);

	?>
	
</body>
</html>
