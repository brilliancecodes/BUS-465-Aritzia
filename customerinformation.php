<!DOCTYPE html PUBLIC "datalab3.bus.sfu.ca">
<html>
<head>
	<meta charset="utf-8">
	<title>Aritzia's Login Page</title>
    <link rel="stylesheet" href="AritziaStyleSheet.css" />
</head>
<body>
<h1><img id = "aritzia", 
            src="https://www.aritzia.com/on/demandware.static/Sites-Aritzia_CA-Site/-/default/dw29c878d3/images/aritzia_skin/aritzia_logo.svg"> 
        </h1>
        <br><br>
        <hr>
        <br><br>
        <h2 id= "customerlogintitle"> Customer Profile </h2>
        <br><br>
        <hr>
        <br>

<?php
    session_start();
    echo"<div>logged in user:</div>";
    echo $_SESSION['user'];

    $db = mysqli_connect("localhost", "hwa134", "Q968EhWeHbBFc74LfZtsdYXrG");
    if (!$db) { die("Connection failed: " .mysqli_connect_error()); }
    mysqli_select_db($db, "AritziaDB");

	$email = $_SESSION['user'];
    $query = "SELECT * from customerlogin WHERE email = '$email'; "; 
    $result = mysqli_query($db, $query);

    if($result){
        $x=mysqli_fetch_row($result);
        $number = $x[4];
        $masked = str_pad(substr($number,-3), strlen($number), '*', STR_PAD_LEFT);
        echo "<p class='custheading'>Customer Shipping Information</p>";
        echo "
        <table style='border: 1px solid black;margin-left:auto;margin-right:auto;'>
        <tr> 
        <h3><th>First Name:</th><td>",$x[0],"</td></h3>
        </tr>
        <tr>
        <h3><th>Last Name:</th><td>",$x[1],"</td></h3>
        </tr>
        <tr> 
        <h3><th>Email:</th><td>",$x[2],"</td></h3>
        </tr>
        <tr>
        <h3><th>Credit Card:</th><td>",print($masked),"</td></h3>
        </tr>
        <tr> 
        <h3><th>Billing Address:</th><td>",$x[5],"</td></h3>
        </tr>
        <tr> 
        <h3><th>City:</th><td>",$x[6],"</td></h3>
        </tr>
        <tr> 
        <h3><th>Province:</th><td>",$x[7],"</td></h3>
        </tr>
        <tr> 
        <h3><th>Country:</th><td>",$x[8],"</td></h3>
        </tr>
        <tr> 
        <h3><th>Postal Code:</th><td>",$x[9],"</td></h3>
        </tr>
        </table>";
        echo "<p class='custheading'>Customer Billing Information</p>";
        echo "
        <table style='border: 1px solid black;margin-left:auto;margin-right:auto;'>
        <tr> 
        <h3><th>First Name:</th><td>",$x[0],"</td></h3>
        </tr>
        <tr>
        <h3><th>Last Name:</th><td>",$x[1],"</td></h3>
        </tr>
        <tr> 
        <h3><th>Email:</th><td>",$x[2],"</td></h3>
        </tr>
        <tr>
        <h3><th>Credit Card:</th><td>",print($masked),"</td></h3>
        </tr>
        <tr> 
        <h3><th>Billing Address:</th><td>",$x[5],"</td></h3>
        </tr>
        <tr> 
        <h3><th>City:</th><td>",$x[6],"</td></h3>
        </tr>
        <tr> 
        <h3><th>Province:</th><td>",$x[7],"</td></h3>
        </tr>
        <tr> 
        <h3><th>Country:</th><td>",$x[8],"</td></h3>
        </tr>
        <tr> 
        <h3><th>Postal Code:</th><td>",$x[9],"</td></h3>
        </tr>
        </table>";
        
    }
    echo"<a href='confirm.php'>
            <div class='submitbutton'>
                <input type='submit' name ='confirm' value='Confirm' id='confirm'>
            </div>"
        </a>
    mysqli_close($db);
?>
</body>
</html>
