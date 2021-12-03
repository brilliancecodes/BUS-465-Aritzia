<!DOCTYPE html PUBLIC "datalab3.bus.sfu.ca">
<html>
<head>
<title>Confirmation</title>
</head>
<body>
<?php
session_start();
$email = $_SESSION['user'];
$location = $_SESSION['location'];
$item = $_SESSION['item'];
$size = $_SESSION['size'];
$colour = $_SESSION['colour'];
$quantity = $_SESSION['quantity'];
$total = $_SESSION['total'];

$db = mysqli_connect("localhost", "hwa134", "Q968EhWeHbBFc74LfZtsdYXrG");
if (!$db) { die("Connection failed: " .mysqli_connect_error()); }
mysqli_select_db($db, "AritziaDB");

$query = "SELECT * FROM customerlogin WHERE email = '$email';";

$result = mysqli_query($db, $query);

$x=mysqli_fetch_row($result);

// print_r($x);

/* $query2 = "SELECT * FROM orders";

$result2 = mysqli_query($db, $query2); */


$query3 = "INSERT INTO orders(custfirstname,custlastname,email,location,
item,size,colour,quantity,total,creditcard,billingaddress) 
    VALUES ('$x[0]','$x[1]','$x[2]','$location','$item','$size','$colour',
    '$quantity','$total','$x[4]','$x[7]');";

$result3 = mysqli_query($db, $query3);

mysqli_close($db);

header("Location: Order Summary.php");

?>
</body>
</html>
