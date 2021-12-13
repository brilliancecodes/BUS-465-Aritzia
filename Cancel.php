<?php

session_start();
$email=$_SESSION['user'];

$db= mysqli_connect("localhost", "hwa134", "Q968EhWeHbBFc74LfZtsdYXrG");
if (!db) {die("Connection failed: ". mysqli_connect_error()); }
mysqli_select_db($db, "AritziaDB");

$sql = "UPDATE orders SET Status = 'Cancelled' WHERE email = '$email'
order by ordernumber desc limit 1";

if($db -> query($sql) === TRUE){
	echo "ORDER has been Cancelled";

}
else {
	echo "Error:" . $sql . "<br>" . $db -> error;

}

echo '<div class="submitbutton"><a href = "CatalogueList.php">
<input type="submit" name="backtocatalogue" value="Back to Catalogue" id="submit"></a>';

?>
