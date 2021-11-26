<!DOCTYPE html>
<html>
<head>
	<title>Catalogue</title>
<link rel="stylesheet" href="AritziaStyleSheet.css"/>
		
    <link rel="stylesheet" href="AritziaStyleSheet.css?v=<?php echo time(); ?>">
	<h1><img id = "aritzia", 
		src="https://www.aritzia.com/on/demandware.static/Sites-Aritzia_CA-Site/-/default/dw29c878d3/images/aritzia_skin/aritzia_logo.svg"> 
	</h1>
	<br><br>
	<hr>
	<br><br>
	<h2 id= "customerlogintitle"> Catalogue </h2>
	<br><br>
	<hr>
	<br>
	
	
</head>

<body>
<form action="Cart.php" method="POST">
<!-- Item image and name would come from a catalogue page full of products. Customer would pick their option and have it POST to this page. -->
	<img style="float:left;height:600px;" src="<?php $image="https://aritzia.scene7.com/is/image/Aritzia/medium/f21_04_a05_83755_1274_on_a.jpg"; echo $image ?>">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php $item="The New Cocoon Long Coat"; echo $item ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$<?php $price=378; echo $price ?>
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
    <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Proceed to Cart"/>
    <?php
    session_start();
    $_SESSION['item']=$item;
    $_SESSION['image']=$image;
    $_SESSION['price']=$price;
    ?>
</form>
</body>
</html>
