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

	$price = $x[1];
	$image = array($x[3], $x[5], $x[7]);
	$colour = array($x[2], $x[4], $x[6]);

	mysqli_close($db);

	?>

<form action="Cart.php" method="POST" name="myForm">
	<br>
	<h2 style='font-family: sans-serif; text-align: left; font-weight: normal;font-size: medium;'>
	<img style="float:left;height:600px;" src="<?php echo $image[0] ?>" name="myImage"/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $item ?></span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>$<?php echo $price ?></span>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Colour: <select name="colourselect" size="1" onchange="switchImage();">
	<option value="0"><?php echo $colour[0]?></option>
	<option value="1"><?php echo $colour[1]?></option>
	<option value="2"><?php echo $colour[2]?></option>
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
    $_SESSION['price']=$price;
    ?>
</form>

<script>
	var imageList = Array();
    imageList[0] = new Image(70, 70);
    imageList[0].src = "<?php echo $image[0] ?>";
	imageList[1] = new Image(70, 70);
    imageList[1].src = "<?php echo $image[1] ?>";
	imageList[2] = new Image(70, 70);
    imageList[2].src = "<?php echo $image[2] ?>";

function switchImage(){
	var selectedImage = document.myForm.colourselect.options[document.myForm.colourselect.selectedIndex].value;
    document.myImage.src = imageList[selectedImage].src;
	}
</script>
</body>
</html>