/* first draft template */

<!DOCTYPE html>
<html>
<head>
<title>Aritzia</title>
</head>
<body>
	<?php
		$e= $_POST['email']; $p =$_POST['password'];

		$db = mysqli_connect("localhost", "hwa134", "Q968EhWeHbBFc74LfZtsdYXrG");
		if (!$db) { die("Connection failed: " .mysqli_connect_error()); }
		mysqli_select_db($db, "AritziaDB");
		
		$query = "SELECT email from customerlogin
				  WHERE email = '$e' and password = '$p' ; "; 

		$result = mysqli_query($db, $query);

		$row_cnt = mysqli_num_rows($result);
		 
	 	if($row_cnt == 1)
			echo '<p>Successfully logged in!</p>';

		else 
			echo '<p>Sorry, the email or password is incorrect.</p>';
		 
		mysqli_close($db);
	?>
	
</body>
</html>
