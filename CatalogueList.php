<!DOCTYPE html>
<html>
<head>
	<title>Catalogue List</title>
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
	session_start();
    if (session_id()=="") session_start();
	if (isset($_SESSION['login']) && $_SESSION['login'] == TRUE) {
		echo "<h2 class='heading4'>Logged in user: ",$_SESSION['user'];
		echo "<a href='logout.php'> <input type='submit' id='logout' style='float: right; margin-top: 0px;' value='Logout'></a>";
		}

	?>


<div class="container">
  <div class="leftpane">
  <a href="Catalogue.php?item=The New Cocoon Long Coat"><img style="height:600px;" src="https://aritzia.scene7.com/is/image/Aritzia/medium/f21_04_a05_83755_1274_on_a.jpg">
</div>
  <div class="middlepane">
  <a href="Catalogue.php?item=Polar Zip-Up"><img style="height:600px;" src="https://aritzia.scene7.com/is/image/Aritzia/zoom/f21_03_a03_80189_2175_on_b.jpg"></div>
  <div class="rightpane">
  <a href="Catalogue.php?item=Prospect Shirt Jacket"><img style="height:600px;" src="https://aritzia.scene7.com/is/image/Aritzia/zoom/f21_03_a04_79830_14140_on_a.jpg"></div>
</div>

</body>
</html>
