<!DOCTYPE html>
<html>
<head>
	<title>Catalogue</title>
<link rel="stylesheet" href="AritziaStyleSheet.css"/>		
    <link rel="stylesheet" href="AritziaStyleSheet.css?v=<?php echo time(); ?>">
	<h1>
        <br>
        <img id = "aritzia", 
		src="https://www.aritzia.com/on/demandware.static/Sites-Aritzia_CA-Site/-/default/dw29c878d3/images/aritzia_skin/aritzia_logo.svg"> 
        <br>
	</h1>
	<hr>
	<br><br>
	<h2 id= "customerlogintitle"> Catalogue </h2>
	<br><br>
	<hr>

</head>

<body>
	<?php
/* 	echo $_GET['item'];
	echo "<br>";
	echo $_GET['image']; */
	session_start();
    if (session_id()=="") session_start();
	if (isset($_SESSION['login']) && $_SESSION['login'] == TRUE) {
		echo "<h2 class='heading4'>Logged in user: ",$_SESSION['user'];
		echo "<a href='logout.php'> <input type='submit' id='logout' style='float: right; margin-top: 0px;' value='Logout'></a>";
		}

	$db = mysqli_connect("localhost", "hwa134", "Q968EhWeHbBFc74LfZtsdYXrG");
	if (!$db) { die("Connection failed: " .mysqli_connect_error()); }
	mysqli_select_db($db, "AritziaDB");

	$item=$_GET['item'];

	$query="SELECT * FROM catalogue WHERE item='$item'";
	$result = mysqli_query($db, $query);
	$x=mysqli_fetch_row($result);

	$image = $x[1];
	$price = $x[2];

	mysqli_close($db);

	?>

<form action="Cart.php" method="POST">
<!-- Item image and name would come from a catalogue page full of products. Customer would pick their option and have it POST to this page. -->
	<br>
	<h2 style='font-family: sans-serif; text-align: left; font-weight: normal;font-size: medium;'>
	<img style="float:left;height:600px;" src="<?php echo $image ?>">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $item ?></span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>$<?php echo $price ?></span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Colour: <select name="colour" size=1>
	<option value="White">White
	<option value="Black">Black
	<option value="Blue">Blue
	</select>
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Size: <select name="size" size=1>
	<option value="S">S
	<option value="M">M
	<option value="L">L
	</select>
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity: <input type="text" size=1 value="1" name="quantity">
    <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Proceed to Cart"/> </h2>
    <?php
    $_SESSION['item']=$item;
    $_SESSION['image']=$image;
    $_SESSION['price']=$price;
    ?>
</form>
</body>
</html>