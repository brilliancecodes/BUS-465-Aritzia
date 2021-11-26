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
	<h2 id= "customerlogintitle"> Cart Summary </h2>
	<br><br>
	<hr>
	<br>
	<a href="logout.php"> <input type="submit" id="logout" style="float: right; margin-top: 0px;" value="Logout"></a>
</head>
<body>
<?php
session_start();
if (session_id()=="") session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == TRUE) {
	echo "<h2 class='heading4'>Logged in user: ",$_SESSION['user'];
	}
else { 
	echo "<h2 class='heading4'>Please click <a href='aritzia login page.php'>here</a> to log in.</h2>";
	exit();
	}

$email = $_SESSION['user'];
$item=$_SESSION['item'];
$colour=$_SESSION['colour'];
$size=$_SESSION['size'];
$quantity=$_SESSION['quantity'];
$location = $_SESSION['location'];
//SESSION test
/* echo"$item";
echo"$colour";
echo"$size";
echo"$location"; */

$db = mysqli_connect("localhost", "hwa134", "Q968EhWeHbBFc74LfZtsdYXrG");
if (!$db) { die("Connection failed: " .mysqli_connect_error()); }
mysqli_select_db($db, "AritziaDB");

$query = "SELECT * from customerlogin WHERE email = '$email'; "; 
$result = mysqli_query($db, $query);
$x=mysqli_fetch_row($result);
$number = $x[4];
$masked = str_pad(substr($number,-3), strlen($number), '*', STR_PAD_LEFT);

/* echo "
<br>
<h2 class='heading3'>
<div style='display:flex;justify-content:center; align-items:center; text-align: center;'>
<table style='float:left;'>
	<tr>
		<h2 class='heading2' style='margin-right:12%;'> Customer Information</h2>
	</tr>
</table>
<table>
	<tr>
	<h2 class='heading2' style='margin-left:11%;'> Cart Information</h2>
	</tr>
</table>
</div>

</div>
<div style='width:610px;height:auto;position:relative;'>
<table style='float: left; margin-right:10px; display:inline:block; padding-inline-start: 20%;'>
		<tr> 
		<h3><th>First Name:</th><td>",$x[0],"</td></h3>
		</tr>
		<tr>
		<h3><th>Last Name:</th><td>",$x[1],"</td></h3>
		</tr>
		<tr> 
		<h3><th>Email:</th><td>",$x[2],"</td></h3>
		</tr>
		<tr> 
		<h3><th>Shipping Address:</th><td>",$x[7],"</td></h3>
		</tr>
		<tr> 
		<h3><th>City:</th><td>",$x[8],"</td></h3>
		</tr>
		<tr> 
		<h3><th>Province:</th><td>",$x[9],"</td></h3>
		</tr>
		<tr> 
		<h3><th>Country:</th><td>",$x[10],"</td></h3>
		</tr>
		<tr> 
		<h3><th>Postal Code:</th><td>",$x[11],"</td></h3>
		</tr>
	</table>

	<table>
		<tr> 
		<h3><th>Pickup Location</th><td>",$location,"</td></h3>
		</tr>
		<tr>
		<h3><th>Item Name</th><td>",$item,"</td></h3>
		</tr>
		<tr> 
		<h3><th>Item Colour</th><td>",$colour,"</td></h3>
		</tr>
		<tr> 
		<h3><th>Item Size</th><td>",$size,"</td></h3>
		</tr>
	</table>
</div>
</h2>"; */

echo "
<br>
<br>
<p>
<table style='border-spacing: 3px; border: 1px solid black;margin-left:auto;margin-right:auto;'>
  <tr>
  <th>First Name</th><td>",$x[0],"</td>
    <th width='20%'>Pickup Location</th><td>",$location,"</td>
  </tr>
  <tr>
  <th>Last Name:</th><td>",$x[1],"</td>	
	<th>Item Name</td><td>",$item,"</td>
  </tr>
  <tr>
  <th>Email:</th><td>",$x[2],"</td>
  <th>Item Colour</th><td>",$colour,"</td>
  </tr>
  <tr>
  <th>Shipping Address:</th><td>",$x[7],"</td>
  <th>Item Size</th><td>",$size,"</td>
  </tr>
  <tr>
  <th>City:</th><td>",$x[8],"</td>
  </tr>
  <tr>
  <th>Province:</th><td>",$x[9],"</td>
  </tr>
  <tr>
  <th>Country:</th><td>",$x[10],"</td>
  </tr>
  <tr>
  <th>Postal Code:</th><td>",$x[11],"</td>
  </tr>
</table>";

echo '<div class="submitbutton"><a href = "orderconfirm.php"><input type="submit" name="finalconfirmation" value="Confirm Order" id="submit"></a>';

mysqli_close($db);


?>


</body>
</html>