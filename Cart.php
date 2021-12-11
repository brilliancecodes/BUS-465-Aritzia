<!DOCTYPE html>
<html>
<head>
<title>Cart</title>
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
	<h2 id= "customerlogintitle"> Cart </h2>
	<br><br>
	<hr>
<script type="text/javascript">
    function select()
    {
     var1=document.getElementById("radio1");
     var2=document.getElementById("radio2");
     if(var1.checked==true)
     {
        document.myform.action="Delivery.html";
     }
     else if (var2.checked==true)
     {
        document.myform.action="Location.php";
     }
	}
  </script>
</head>

<body>

<?php
	session_start();
    if (session_id()=="") session_start();
	if (isset($_SESSION['login']) && $_SESSION['login'] == TRUE) {
		echo "<h2 class='heading4'>Logged in user: ",$_SESSION['user'];
		echo "<a href='logout.php'> <input type='submit' id='logout' style='float: right; margin-top: 0px;' value='Logout'></a>";
		}

	?>

<?php
	$db = mysqli_connect("localhost", "hwa134", "Q968EhWeHbBFc74LfZtsdYXrG");
	if (!$db) { die("Connection failed: " .mysqli_connect_error()); }
	mysqli_select_db($db, "AritziaDB");

	$item=$_SESSION['item'];

	$query="SELECT * FROM catalogue WHERE item='$item'";
	$result = mysqli_query($db, $query);
	$x=mysqli_fetch_row($result);

	$imageList = array($x[3], $x[5], $x[7]);
	$colourList = array($x[2], $x[4], $x[6]);
	$colour=$colourList[$_POST['colourselect']];
	$image=$imageList[$_POST['colourselect']];

?>
<form action="" method="POST" name="myform" onsubmit="select()">
<div>
  <div>
  <h2 style='font-family: sans-serif; text-align: left; font-weight: normal;font-size: medium;'>
	<br>
	<img id="image" style="float:left;height:300px;" src="<?php echo $image ?>">
	&nbsp;&nbsp;&nbsp;<span><?php session_start(); echo $_SESSION['item'] ?></span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Size <span><?php $size = $_POST['size']; echo $size ?></span>, <span><?php echo $colour ?></span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qty: <span><?php $quantity = $_POST['quantity']; echo $quantity ?></span>
	<br>&nbsp;&nbsp;&nbsp;$<span><?php $price = $_SESSION['price']; echo $price ?></span>
	<br><br>&nbsp;&nbsp;&nbsp;
	</h2>
  </div>
</div>

<div class="contant">

  <div class="out">
  <h2 style='font-family: sans-serif; text-align: left; font-weight: normal;font-size: medium;'>
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
	</h2>
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