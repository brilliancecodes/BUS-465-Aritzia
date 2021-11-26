<!DOCTYPE html PUBLIC "datalab3.bus.sfu.ca">
<html>
<head>
	<meta charset="utf-8">
	<title>Aritzia's Registration Page</title>
    <link rel="stylesheet" href="AritziaStyleSheet.css">
	<h1><img id = "aritzia", 
		src="https://www.aritzia.com/on/demandware.static/Sites-Aritzia_CA-Site/-/default/dw29c878d3/images/aritzia_skin/aritzia_logo.svg"> 
	</h1>
	<br><br>
	<hr>
	<br><br>
	<h2 id= "customerlogintitle"> Registration </h2>
	<br><br>
	<hr>
	<br>
</head>
<body>

<?php
$msg="";
$reg=register();
if($reg){
	echo "You have successfully created an account with Aritzia.";
	echo "Here are the details of your registration.<br>";
	echo "<p class='custheading'>Customer Account Information</p>";
	echo "
	<table style='border: 1px solid black;margin-left:auto;margin-right:auto;'>
	<tr> 
	<h3><th>First Name:</th><td>",$_POST['firstname'],"</td></h3>
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
	</table>";
}
else{
	echo "Please try again later",$msg;
	}

// echo '<script>
function register(){
global $msg;
$db = mysqli_connect("localhost", "hwa134", "Q968EhWeHbBFc74LfZtsdYXrG");
if (!$db) { die("Connection failed: " .mysqli_connect_error()); }
mysqli_select_db($db, "AritziaDB");

if($db!=NULL) {
	if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"]) && isset($_POST["password"])
	&& isset($_POST["creditcard"]) && isset($_POST["expiry"]) && isset($_POST["cvv"]) && isset($_POST["billingaddress"])
	&& isset($_POST["city"]) && isset($_POST["province"]) && isset($_POST["country"]) && isset($_POST["postalcode"])){
		$firstname=$_POST["firstname"];
		$lastname=$_POST["lastname"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$creditcard=$_POST["creditcard"];
		$expiry=$_POST["expiry"];$cvv=$_POST["cvv"];
		$billingaddress=$_POST["billingaddress"];
		$city=$_POST["city"];
		$province=$_POST["province"];
		$country=$_POST["country"];
		$postalcode=$_POST["postalcode"];
		$sql="SELECT email from customerlogin WHERE email='$email'";
		$result=mysqli_query($db,$sql);
		if($result){
			$x=mysqli_num_rows($result);
			if($x!=0){
				$msg="This email has already been used.";return false;
			}
			else if($x==0){
				$sql="INSERT INTO 'customerlogin' ('firstname','lastname','email','password','creditcard',
				'expiry','cvv','billingaddress','city','province','country','postalcode') 
					VALUES ('$firstname','$lastname','$email','$password','$creditcard','$expiry','$cvv','$billingaddress'
					'$city','$province','$country','$postalcode');";
				$result=mysqli_query($db,$sql);
			}
			// if($result){
				$msg="Successfully signed up.";return true;
			// } 
/* 			else{
				$msg="Cannot register for an account at this moment."; return false;
			} */
		} 
		else{
			$msg="Cannot register for an account at this moment."; return false;
		}

	}
	else {
		$msg="Cannot register for an account at this moment."; return false;
	}
	}
else{
	$msg="Cannot register for an account at this moment."; return false;
}
mysqli_close($db);
}
// else{$$msg="Cannot register for an account at this moment."; return false;}

// }
// </script>'
?>

</body>
</html>
