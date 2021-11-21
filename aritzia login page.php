<!DOCTYPE html PUBLIC "datalab3.bus.sfu.ca">
<html>
<head>
	<meta charset="utf-8">
	<title>Aritzia's Login Page</title>
    <link rel="stylesheet" href="AritziaStyleSheet.css?v=<?php echo time(); ?>">
	<h1><img id = "aritzia", 
		src="https://www.aritzia.com/on/demandware.static/Sites-Aritzia_CA-Site/-/default/dw29c878d3/images/aritzia_skin/aritzia_logo.svg"> 
	</h1>
	<br><br>
	<hr>
	<br><br>
	<h2 id= "customerlogintitle"> Customer Login </h2>
	<br><br>
	<hr>
	<br>
</head>
<body>
	<form action="aritzia.php" method="POST">
		<p class = "submitbutton">
			Email Address: <INPUT TYPE="emailaddress" NAME="email" value= "" id="log1"><br><br>
			Password: <input type="password" name="password" value="" id="pw1"> <br> <br>
			<input type="submit" name="submit" value="Sign In" id="submit">
		</p>
	</form>
	<a href = "aritziaregister.php">
		<div class= "submitbutton">
			<input type="submit" name="register" value="Register" id="submit"> 
		</div>
	</a>
<?php session_start();
$_SESSION['location']=$_POST['location'];
?>
</body>
</html>
