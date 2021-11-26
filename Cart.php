<!DOCTYPE html>
<html>
<head>
	
		<title>Cart</title>
    <link rel="stylesheet" href="AritziaStyleSheet.css?v=<?php echo time(); ?>">
	<h1><img id = "aritzia", 
		src="https://www.aritzia.com/on/demandware.static/Sites-Aritzia_CA-Site/-/default/dw29c878d3/images/aritzia_skin/aritzia_logo.svg"> 
	</h1>
	<br><br>
	<hr>
	<br><br>
	<h2 id= "customerlogintitle"> Cart </h2>
	<br><br>
	<hr>
	<br>
<link rel="stylesheet" href="AritziaStyleSheet.css"/>

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

<form action="" method="POST" name="myform" onsubmit="select()">
<div>
  <div>
	<img id="image" style="float:left;height:300px;" src="<?php session_start(); echo $_SESSION['image'] ?>">
	&nbsp;&nbsp;&nbsp;<span><?php session_start(); echo $_SESSION['item'] ?></span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Size <span><?php $size = $_POST['size']; echo $size ?></span>, <span><?php $colour = $_POST['colour']; echo $colour ?></span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qty: <span><?php $quantity = $_POST['quantity']; echo $quantity ?></span>
	<br>&nbsp;&nbsp;&nbsp;$<span><?php $price = $_SESSION['price']; echo $price ?></span>
	<br><br>&nbsp;&nbsp;&nbsp;
  </div>
</div>

<div class="contant">

  <div class="out">
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
