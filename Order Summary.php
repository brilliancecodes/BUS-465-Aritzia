<!DOCTYPE html PUBLIC "datalab3.bus.sfu.ca">
<html>
<head>
<title>Aritzia</title>
    <link rel="stylesheet" href="AritziaStyleSheet.css?v=<?php echo time(); ?>">
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
	
	<hr>
	<br>


 <script type="text/javascript">
  </script> 
</head>

<body>

<p class="display" align = center > Thank you </p>
		<p class="display" align = center>Pick up order created. Your item(s) will be held for 14 days. 
			Please use the order ID number as reference when picking up in-store </p>
<?php

	
$db = mysqli_connect("localhost", "hwa134", "Q968EhWeHbBFc74LfZtsdYXrG");
if (!$db) { die("Connection failed: " .mysqli_connect_error()); }
mysqli_select_db($db, "AritziaDB");

session_start();
$email=$_SESSION['user'];


$query = "SELECT * FROM orders WHERE email = '$email'
order by ordernumber desc limit 1";
$result = mysqli_query($db, $query);
$x=mysqli_fetch_row($result);


mysqli_close($db);

?>

<h2 class='heading2'>Pick-up Details</h2>
<div>
<table id="myTable" class="display" cellspacing="0" width="0%" Border =1 align = center>
<thead>
<tr>
<td>Order Id:</td>
<td><?php echo $x[0]  ?>
</td>
</tr>

<tr>
<td>Customer Name:</td>
<td><?php echo $x[1]  ?> <?php echo $x[2]  ?> 
</td>
</tr>


<tr>
<td> Email Address: </td>
<td> <?php echo $x[3]  ?>			
</td>
</tr>


<tr>
<td> Location: </td>
<td> <?php echo $x[4]  ?>
</td>
</tr>


</div>

</tr>
</thead>
</table>

<h2 class='heading2'>Item(s)</h2>
<table id="myTable" class="display" cellspacing="0" width="0%"  Border =1 align = center>
<thead>
<tr>
<td>Item:</td>
<td> <?php echo $x[5]  ?>
</td>
</tr>

<tr>
<td>Size:</td>
<td> <?php echo $x[6]  ?>					
</td>
</tr>

<tr>
<td> Colour: </td>
<td>	<?php echo $x[7]  ?>					
</td>
</tr>

<tr>
<td> Quantity: </td>
<td> <?php echo $x[8]  ?>					
</td>
</tr>
</thead>
</table>


<h2 class='heading2'>Payment Information</h2>
<table id="myTable" class="display" cellspacing="0" width="0%"  Border =1 align = center>
<thead>
<tr>
<td>Total:</td>
<td> <?php echo $x[9]  ?>		
</td>
</tr>

<tr>
<td>Credit Card Number:</td>
<td><?php $number = $x[10];
        $masked = str_pad(substr($number,-4), strlen($number), '*', STR_PAD_LEFT); 
		echo $masked  ?>						 
</td>
</tr>

<tr>
<td> Billing Address: </td>
<td> <?php echo $x[11]  ?>						
</td>
</tr>


</thead>
</table>
<br>


</body>
</html>
