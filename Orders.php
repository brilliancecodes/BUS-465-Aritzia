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
	<h2 id= "customerlogintitle"> Order History </h2>
	<br><br>
	
	<hr>
	<br>


 <script type="text/javascript">
  </script> 
</head>


<body>

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


/*$query4 = "SELECT COUNT(email) FROM orders WHERE email = '$email'";
$result4 = mysqli_query($db, $query4);
$y = mysqli_fetch_row($result4);

print_r($y);*/

mysqli_close($db);

?>


<h2 class='heading2'>Order Details</h2>


<div class = "newTable">
<table id="myTable" class="display" cellspacing="0" width="0%" Border =1 align = center>
<thead>
<tr>
<td>Order Id:</td>
<td><?php echo $x[0]  ?> 
</td>
</tr>
<tr>
<td> Location: </td>
<td> <?php echo $x[4]  ?>
</td>
</tr>
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
<td>
</thead>
</table>



</div>

<?php
 echo '<div class="submitbutton"><a href = "Cancel.php"> 
<input type="submit" name="Cancel Order" value="Confirm Order" id="submit"></a>';
echo '<div class="submitbutton"><a href = "CatalogueList.php">
<input type="submit" name="backtocatalogue" value="Back to Catalogue" id="submit"></a>';
?>
</body>



</html>