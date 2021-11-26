<!DOCTYPE html PUBLIC "datalab3.bus.sfu.ca">
<html>
<head>
<title>Aritzia</title>
    <link rel="stylesheet" href="AritziaStyleSheet.css">
	<h1>
        <br>
        <img id = "aritzia", 
		src="https://www.aritzia.com/on/demandware.static/Sites-Aritzia_CA-Site/-/default/dw29c878d3/images/aritzia_skin/aritzia_logo.svg"> 
        <br>
	</h1>
	<hr>
	<br><br>
	<h2 id= "customerlogintitle"> Order Summary </h2>
	<br><br>
	<p> Thank you </p>
		<br> <br>
		<p>Pick up order created. Your item(s) will be held for 14 days. Please use the order ID number as reference when picking up in-store </p>
	<hr>
	<br>


 <script type="text/javascript">
  </script> 
</head>

<body>
<?php

	$db = mysqli_connect("localhost", "hwa134", "Q968EhWeHbBFc74LfZtsdYXrG", "AritziaDB");
if (!$db) { die("Connection failed: " .mysqli_connect_error()); }

mysqli_select_db($db, 'AritziaDB');

$query = "SELECT * FROM customerlogin WHERE email = '$email';";



$result = mysqli_query($db, $query);

$x=mysqli_fetch_row($result);

?>

<h1> Pick-up Details </h1>

<div>
<table id="myTable" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<td>Order Id:</td>
<td>	</td>
</tr>

<tr>
<td>Customer Name:</td>
<td>					</td>
</tr>

<tr>
<td> Customer Last Name: </td>
<td>					</td>
</tr>

<tr>
<td> Email Address: </td>
<td>				</td>
</tr>


<tr>
<td> Location </td>
<td> 			</td>
</tr>


</div>

</tr>
</thead>
</table>

<h1> Item(s) </h1>
<table id="myTable" class="display" cellspacing="0" width="100%">

<tr>
<td>Item:</td>
<td>	</td>
</tr>

<tr>
<td>Size:</td>
<td>					</td>
</tr>

<tr>
<td> Colour: </td>
<td>					</td>
</tr>

<tr>
<td> Quantity: </td>
<td>				</td>
</tr>

</table>


<h1> Payment Information </h1>
<table id="myTable" class="display" cellspacing="0" width="100%">
<tr>
<td>Total:</td>
<td>	</td>
</tr>

<tr>
<td>Credit Card Number:</td>
<td>					</td>
</tr>

<tr>
<td> Billing Address: </td>
<td>					</td>
</tr>

<tr>
<td> Quantity: </td>
<td>				</td>
</tr>

</thead>
</table>

















</form>
</body>
</html>
