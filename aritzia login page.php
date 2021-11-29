<!DOCTYPE html PUBLIC "datalab3.bus.sfu.ca">
<html>
<head>
	<title>Aritzia's Login Page</title>
    <link rel="stylesheet" href="AritziaStyleSheet.css?v=<?php echo time(); ?>">
	<h1>
        <br>
        <img id = "aritzia", 
		src="https://www.aritzia.com/on/demandware.static/Sites-Aritzia_CA-Site/-/default/dw29c878d3/images/aritzia_skin/aritzia_logo.svg"> 
        <br>
	</h1>
	<hr>
	<br><br>
	<h2 id= "customerlogintitle"> Customer Login </h2>
	<br><br>
	<hr>
	<br>
</head>
<body>

<?php 

session_start();
if (isset($_SESSION['user']) && $_SESSION['user'] == TRUE) {
	if (isset($_SESSION['location']) && $_SESSION['location'] == TRUE) {
		header('Location: customerinformation.php');
		/* 	echo "<h2 class='heading4'>The chosen location is: ",$_SESSION['location']; */
			}
		else{
			$location=$_POST['location'];
			$_SESSION['location']=$location;
		}
}
else{
	echo"
	<form action='aritzia.php' method='POST'>
	<p class = 'submitbutton'>
		Email Address: <INPUT TYPE='emailaddress' NAME='email' value= '' id='log1'><br><br>
		Password: <input type='password' name='password' value='' id='pw1'> <br> <br>
		<input type='submit' name='submit' value='Sign In' id='submit'>
	</p>
	</form>
	<a href = 'aritziaregisterpage.php'>
	<div class= 'submitbutton'>
		<input type='submit' name='register' value='Register' id='submit'> 
	</div>
	</a>";
	if (isset($_SESSION['location']) && $_SESSION['location'] == TRUE) {
		/* 	echo "<h2 class='heading4'>The chosen location is: ",$_SESSION['location']; */
			}
		else{
			$location=$_POST['location'];
			$_SESSION['location']=$location;
		}
}

?>
</body>
</html>