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
    echo $_SESSION['user'];

    $db = mysqli_connect("localhost", "hwa134", "Q968EhWeHbBFc74LfZtsdYXrG");
    if (!$db) { die("Connection failed: " .mysqli_connect_error()); }
    mysqli_select_db($db, "AritziaDB");

	$email = $_SESSION['user'];
    $query = "SELECT * from customerlogin WHERE email = '$email'; "; 
    $result = mysqli_query($db, $query);
    
    if($result){
        $x=mysqli_fetch_row($result);
        echo "
        <table><tr>
        <td>
        <br><h3>First Name: ",$x[0],"</h3>
        <br><h3>Last Name: ",$x[1],"</h3>
        </td></tr></table>";
    }

    mysqli_close($db);
?>
</body>
</html>
