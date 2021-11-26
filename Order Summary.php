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

?>

<h1> Pick-up Details </h1>


<table id="myTable" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th>Order Id</th>
<th>Customer First Name</th>
<th> Customer Last Name </th>
<th> Email Address </th>
<tbody>
<?php
$query = "SELECT * FROM orders
WHERE email = '$_SESSION['user']' 
Limit 1";

$result = mysqli_query($db, $query);

while($row = mysqli_fetch_row($result)) {
	
	echo "<tr>";
	foreach($row as $cell=>$singledata)
		echo "<td>$singledata</td>"."  ";
		
	echo "</tr>\n";
	}

 mysqli_close($connect);
?>
</tbody>
<th>Pick-up Location: $<span><?php session_start(); echo $_SESSION['Location'] ?></span> </th>
<tbody>
</tr>
</thead>

<h1> Item(s) </h1>

<table id="myTable" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th>Item: $<span><?php session_start(); echo $_SESSION['item'] ?></span> </th>
<th>Size: $<span><?php session_start(); echo $_SESSION['size'] ?></span>
<th>Colour: $<span><?php session_start(); echo $_SESSION['colour'] ?></span></th>
<th> Quantity: $<span><?php session_start(); echo $_SESSION['quantity'] ?></span></th>
<tbody>
</tr>
</thead>

<h1> Payment Information </h1>

<table id="myTable" class="display" cellspacing="0" width="100%">
<thead>
<tr>

<th>Total: $<span><?php session_start(); echo $_SESSION['total'] ?></span> </th>

<th>Credit Card Number</th>
<th>Billing Address </th>
<tbody>
<?php
$query = "SELECT * FROM orders";

$result = mysqli_query($db, $query);

while($row = mysqli_fetch_row($result)) {
	
	echo "<tr>";
	foreach($row as $cell=>$singledata)
		echo "<td>$singledata</td>"."  ";
		
	echo "</tr>\n";
	}

 mysqli_close($connect);
?>
</tbody>


</tbody>
</tr>
</thead>
















<tbody>

<?php
$query = "SELECT * FROM orders";

$result = mysqli_query($db, $query);

while($row = mysqli_fetch_row($result)) {
	
	echo "<tr>";
	foreach($row as $cell=>$singledata)
		echo "<td>$singledata</td>"."  ";
		
	echo "</tr>\n";
	
	
	}

 mysqli_close($connect);


?>

</tbody>



	<img id="image" style="float:left;height:300px;" src="<?php session_start(); echo $_SESSION['image'] ?>">
	&nbsp;&nbsp;&nbsp;<span><?php session_start(); echo $_SESSION['item'] ?></span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Size <span><?php $size = $_POST['size']; echo $size ?></span>, <span><?php $colour = $_POST['colour']; echo $colour ?></span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qty: <span><?php $quantity = $_POST['quantity']; echo $quantity ?></span>
	<br>&nbsp;&nbsp;&nbsp;$<span><?php $price = $_SESSION['price']; echo $price ?></span>
	<br><br>&nbsp;&nbsp;&nbsp;
  </div>
</div>

<div class="split right">
  <div>
    Order Summary
	<table border=1 style="border:1px">
	<tr>
	<td>Subtotal: $<span><?php $subtotal = $price*$quantity; echo $subtotal ?></span></td>
	</tr>
	<tr>
	<td>Taxes: $<span><?php $taxes = $subtotal*0.12; echo $taxes ?></span></td>
	</tr>
	<tr>
	<td>Total: $<span><?php $total = $taxes + $subtotal; echo $total ?></span></td>
	</tr>
	<tr>
	<td><input type="radio" id="radio1" name="checkout" value="deliver">Deliver
	<br><input type="radio" id="radio2" name="checkout" value="pickup">Pick-up In-store
	<br>
	<br><input type="submit" value="Checkout"></td>
	</tr>
	</table>
  </div>
</div>

<?php
session_start();
$_SESSION['size']=$size;
$_SESSION['colour']=$colour;
$_SESSION['quantity']=$quantity;
$_SESSION['total']=$total;
?>
</form>
</body>
</html>
