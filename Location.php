<html> 
<head>
<head>
	<title>Aritzia's Location</title>
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
	<h2 id= "customerlogintitle"> Location </h2>
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
else{
    echo"not logged in";
}

$item=$_SESSION['item'];
$colour=$_SESSION['colour'];
$size=$_SESSION['size'];
$quantity=$_SESSION['quantity'];

$db = mysqli_connect("localhost", "hwa134", "Q968EhWeHbBFc74LfZtsdYXrG");
if (!$db) { die("Connection failed: " .mysqli_connect_error()); }
mysqli_select_db($db, "AritziaDB");

$query1 = "SELECT * FROM ITEMS
WHERE Item_Name='$item' AND Item_Colour='$colour' AND Size='$size';";
$result1 = mysqli_query($db, $query1);

/*     if($result1){
        $x=mysqli_fetch_row($result1);
        foreach ($x as $x){
        echo $x;}
    } */
    $x=mysqli_fetch_row($result1);
    $query2 = "SELECT * FROM Items_At_Location
    WHERE ITEM_ID = $x[0] AND Quantity >= $quantity";
    $result2 = mysqli_query($db, $query2);

    $locationarray = [];
    while($row = mysqli_fetch_array($result2)) {
        $locationarray[] = $row['LOCATION_ID']; // Print a single column data
    };

    // print_r($locationarray);



    $query3 = "SELECT * FROM LOCATION WHERE LOCATION_ID IN (" . implode(',',$locationarray) . ")";
    $result3 = mysqli_query($db, $query3);

    // echo mysqli_num_rows($result3);
/*     if($result3){
        $location=mysqli_fetch_row($result3);}; */
    $location = [];
    while($row2 = mysqli_fetch_array($result3)) {
        $location[] = $row2['LOCATION_NAME'];
    };
    // print_r($location);
    
    $numrows = mysqli_num_rows($result3);
    // $i=0;
/*     while($i<$numrows){
        echo $location[$i];
        $i++;
    } */


    

/*     $locationnames = [];
    while($row2 = mysqli_fetch_array($result3)) {
        $locationnames[] = $row2['LOCATION_NAME']; // Print a single column data
    };
    echo print_r($locationnames); */

?>
<p style='font-family: sans-serif;text-align: center;font-weight: bold; font-size: 20pt;'> Aritzia </p>
<h2 style='font-family: sans-serif;text-align: center;font-weight: bold; font-size: 16pt;'>Pick-up Location </h2>

<form method = POST action = "aritzia login page.php" align = center onsubmit="return check();">
<select name = "location" id = "selected">
	<option value = "Metrotown">Metrotown</option>
	<option value = "Guildford">Guildford</option>
	<option value = "Richmond">Richmond</option>
</select>
<br>



<input type = "submit" name="CheckAvail" value = "Check Availability">
<script type="text/javascript">
     function check(){
         var numrows = <?php echo $numrows ?>;
         var location = <?php echo json_encode($location); ?>;
         var selected = document.getElementById("selected");
         var selected2 = selected.options[selected.selectedIndex].value;
         var i = 0;
         var j = 0;
         while (i<numrows){
             if (selected2 == location[i]){
                 alert("Available at this location. Continue to checkout.");
                 // window.location.href = "Delivery.html";
                 j=1;
                 document.getElementById('location').value = location[i];
             }
             i++
         }
         if (j==1){
             return true;
         }
         else{
             alert("Not available at this location. Select another location.")
             return false;
         }
     }
   </script>

<!-- <script type="text/javascript">
  document.getElementById('location').value = "<?php echo $_GET['location'];?>";
</script> -->

<!-- <?php
echo"<script type='text/javascript'>";
echo"function check(){
        var numrows = ".$numrows.";
        var location = json_encode($location);
        var selected = document.getElementById('selected');
        var selected2 = selected.options[selected.selectedIndex].value;
        var i = 0;
        var j = 0;
        while (i<numrows){
            if (selected2 == location[i]){
                alert('Available at this location. Continue to checkout.');
                // window.location.href = 'Delivery.html';
                j=1;

            }
            i++
        }
        if (j==1){
            return true;
        }
        else{
            alert('Not available at this location. Select another location.');
            return false;
        }
    }";
echo"</script>";
?> -->
</form>


 </body>


</html>