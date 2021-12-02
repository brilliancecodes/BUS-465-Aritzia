<!DOCTYPE html PUBLIC "datalab3.bus.sfu.ca">
<html>
<head>
	<title>Aritzia's Registration Page</title>
    <link rel="stylesheet" href="AritziaStyleSheet.css">
	<h1>
        <br>
        <img id = "aritzia", 
		src="https://www.aritzia.com/on/demandware.static/Sites-Aritzia_CA-Site/-/default/dw29c878d3/images/aritzia_skin/aritzia_logo.svg"> 
        <br>
	</h1>
	<hr>
	<br><br>
	<h2 id= "customerlogintitle"> Registration </h2>
	<br><br>
	<hr>
	<br>
	<a href="logout.php"> <input type="submit" id="logout" style="float: right; margin-top: 0px;" value="Logout"></a>
</head>
<body>

<?php
session_start();
if (session_id()=="") session_start();
if(!isset($_SESSION["login"]))$_SESSION["login"]=0;
if(!isset($_SESSION["user"]))$_SESSION["user"]='0';

$db = mysqli_connect("localhost", "hwa134", "Q968EhWeHbBFc74LfZtsdYXrG", "AritziaDB");
if (!$db) { die("Connection failed: " .mysqli_connect_error()); }

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])
	&& isset($_POST['creditcard']) && isset($_POST['expiry']) && isset($_POST['cvv']) && isset($_POST['billingaddress'])
	&& isset($_POST['city']) && isset($_POST['province']) && isset($_POST['country']) && isset($_POST['postalcode'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$creditcard=$_POST['creditcard'];
		$expiry=$_POST['expiry'];
		$cvv=$_POST['cvv'];
		$billingaddress=$_POST['billingaddress'];
		$city=$_POST['city'];
		$province=$_POST['province'];
		$country=$_POST['country'];
		$postalcode=$_POST['postalcode'];
		$sql="SELECT * from customerlogin WHERE email='$email'";
		$result=mysqli_query($db,$sql);
		if (mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
			if ($email==$row['email'])
			{
				echo "Email is already in use <br>
				<a href='aritzia login page.php'>Click here</a> to return to try logging in again.";
			}
			
			}
		else{
 			$sql = "INSERT INTO customerlogin(firstname,lastname,email,password,creditcard,expiry,cvv,
			 billingaddress,city,province,country,postalcode) 
			 VALUES( '$firstname','$lastname','$email','$password','$creditcard','$expiry','$cvv','$billingaddress', 
			 '$city','$province','$country','$postalcode');";
			$result=mysqli_query($db,$sql);
			$_SESSION["login"]=TRUE; 
			$_SESSION['user']=$email;
			echo "<h2 class='heading4'>You have successfully created an account with Aritzia. Here are the details 
			of your registration:</h2><br>";
			echo "<h2 class='heading2'>Customer Account Information</h2>";
			echo "
			<h2 class='heading3'>
			<table style='border: 1px solid black;margin-left:auto;margin-right:auto;'>
			<tr> 
			<label><h3><th>First Name:</th><td>",$_POST['firstname'],"</td></h3>
			</tr>
			<tr>
			<h3><th>Last Name:</th><td>",$_POST['lastname'],"</td></h3>
			</tr>
			<tr> 
			<h3><th>Email:</th><td>",$_POST['email'],"</td></h3>
			</tr>
			<tr>
			<h3><th>Credit Card:</th><td>",$_POST['creditcard'],"</td></h3>
			</tr>
			<tr>
			<h3><th>Expiry Date:</th><td>",$_POST['expiry'],"</td></h3>
			</tr>
			<tr>
			<h3><th>CVV:</th><td>",$_POST['cvv'],"</td></h3>
			</tr>
			<tr> 
			<h3><th>Billing Address:</th><td>",$_POST['billingaddress'],"</td></h3>
			</tr>
			<tr> 
			<h3><th>City:</th><td>",$_POST['city'],"</td></h3>
			</tr>
			<tr> 
			<h3><th>Province:</th><td>",$_POST['province'],"</td></h3>
			</tr>
			<tr> 
			<h3><th>Country:</th><td>",$_POST['country'],"</td></h3>
			</tr>
			<tr> 
			<h3><th>Postal Code:</th><td>",$_POST['postalcode'],"</td></h3>
			</tr>
			</table>
			</h2>";
			echo '<div class="submitbutton"><a href = "cartsummary.php"><input type="submit" name="confirmationpage" 
			value="Cart Summary" id="submit"></a>';
			}
			
				}

else{
echo "Form cannot be submitted at this time";
}

mysqli_close($db);


?>

</body>
</html>
