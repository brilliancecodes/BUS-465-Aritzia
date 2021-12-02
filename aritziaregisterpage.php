<!DOCTYPE html PUBLIC "datalab3.bus.sfu.ca">
<html>
<head>
	<title>Aritzia's Registration Page</title>
    <link rel="stylesheet" href="AritziaStyleSheet.css" />
	<h1>
        <br>
        <img id = "aritzia", 
		src="https://www.aritzia.com/on/demandware.static/Sites-Aritzia_CA-Site/-/default/dw29c878d3/images/aritzia_skin/aritzia_logo.svg"> 
        <br>
	</h1>
	<hr>
	<br><br>
	<h2 id= "customerlogintitle"> Registration </h2>
	<br><br>
	<hr>
	<br>
</head>
<body>

<?php
    if (session_id()=="") session_start();
	if(!isset($_SESSION["cart"]))$_SESSION["cart"]=array();
?>

<form action="newaritziaregister.php" id="aritziaregister" method="POST" onSubmit="return registerValidate(this);">

<script type="text/javascript">
function registerValidate(frm){
if(frm.firstname.value == ""){ alert('A first name is required for sign up.'); frm.firstname.focus(); return false; }
if(frm.lastname.value == ""){ alert('A last name is required for sign up.'); frm.lastname.focus(); return false; }
if(frm.email.value == ""){ alert('An email is required for sign up.'); frm.email.focus(); return false; }
if(frm.password.value == ""){ alert('A password is required for sign up.'); frm.password.focus(); return false; }
if(frm.password.value.length <5){alert('Please enter a password that is 5-12 characters in length'); frm.password.focus(); return false;}
if(frm.confirmpassword.value != frm.password.value) { alert('Passwords are not matched.'); frm.confirmpassword.focus(); return false; }
if(frm.creditcard.value == ""){ alert('A credit card is required to be stored on file for future purchases.'); frm.creditcard.focus(); return false; }
if(frm.creditcard.value.length <16 ){ alert('Please enter at a 16-20 digit credit card number'); frm.creditcard.focus(); return false; }
if(frm.creditcard.value.length >20 ){ alert('Please enter at a 16-20 digit credit card number'); frm.creditcard.focus(); return false; }
if(frm.expiry.value == ""){ alert('Please enter a valid expiry date.'); frm.expiry.focus(); return false; }
if(frm.cvv.value == ""){ alert('Please enter a valid credit card CVV.'); frm.cvv.focus(); return false; }
if(frm.billingaddress.value == ""){ alert('A billing address is required to be stored on file for future purchases.'); frm.billingaddress.focus(); return false; }
if(frm.city.value == ""){ alert('A city is required to be stored on file for future purchases.');frm.city.focus(); return false; }
if(frm.province.value == ""){ alert('A province is required to be stored on file for future purchases.'); frm.province.focus(); return false; }
if(frm.country.value == ""){ alert('A country is required to be stored on file for future purchases.'); frm.country.focus(); return false; }
if(frm.postalcode.value == ""){ alert('A postal code is required to be stored on file for future purchases.'); frm.postalcode.focus(); return false; }
return true;}

function autofill(){

document.getElementById("firstname").value="Truffle";
document.getElementById("lastname").value="Wang";
document.getElementById("email").value="truffle@hotmail.com";
document.getElementById("password").value="truffle";
document.getElementById("confirmpassword").value="truffle";
document.getElementById("creditcard").value="4444555566667777";
document.getElementById("expiry").value="08/26";
document.getElementById("cvv").value="826";
document.getElementById("billingaddress").value="18 Water Street";
document.getElementById("city").value="Vancouver";
document.getElementById("province").value="BC";
document.getElementById("country").value="Canada";
document.getElementById("postalcode").value="V5P1E8";
}
</script>

<h2 class="heading2">Please enter all information to store on file for login and purchases</h2>
<h2 class="heading3">
<table class="registertable"> 
<tr>
	<td><label for="firstname"><h5> First Name: </h5></label></td>
	<td><input name="firstname" id="firstname" type="text" maxlength="15" class="registerinput"/></td>
</tr>
<tr>
	<td><label for="lastname"><h5> Last Name: </h5></label></td>
	<td><input name="lastname" id="lastname" type="text" maxlength="15" class="registerinput"/></td>
</tr>
<tr>
	<td><label for="email"><h5> Email: </h5></label></td>
	<td><input name="email" id="email" type="email" maxlength="40" class="registerinput"/></td>
</tr>
<tr>
	<td><label for="password"><h5> Password: </h5></label></td>
	<td><input name="password" id="password" type="password" maxlength="12" class="registerinput"/></td>
</tr>
<tr>
	<td><label for="confirmpassword"><h5> Confirm Password: </h5></label></td>
	<td><input name="confirmpassword" id="confirmpassword" type="password" maxlength="12" class="registerinput"/></td>
</tr>
<tr>
	<td><label for="creditcard"><h5> Credit Card: </h5></label></td>
	<td><input name="creditcard" id="creditcard" type="number" maxlength="16" class="registerinput"/></td>
</tr>
<tr>
	<td><label for="expiry"><h5> Expiry Date: </h5></label></td>
	<td><input name="expiry" id="expiry" type="text" pattern="(?:0[1-9]|1[0-2])/[0-9]{2}" maxlength="5" class="registerinput"/></td>
</tr>
<tr>
	<td><label for="cvv"><h5> CVV: </h5></label></td>
	<td><input name="cvv" id="cvv" type="number" maxlength="10" class="registerinput"/></td>
</tr>
<tr>
	<td><label for="billingaddress"><h5> Billing Address: </h5></label></td>
	<td><input name="billingaddress" id="billingaddress" type="text" maxlength="50" class="registerinput"/></td>
</tr>
<tr>
	<td><label for="city"><h5> City: </h5></label></td>
	<td><input name="city" id="city" type="text" maxlength="30" class="registerinput"/></td>
</tr>
<tr>
	<td><label for="province"><h5> Province: </h5></label></td>
	<td><input name="province" id="province" type="text" maxlength="2" class="registerinput"/></td>
</tr>
<tr>
	<td><label for="country"><h5> Country: </h5></label></td>
	<td><input name="country" id="country" type="text" maxlength="20" class="registerinput"/></td>
</tr>
<tr>
	<td><label for="postalcode"><h5> Postal Code</h5></label></td>
	<td><input name="postalcode" id="postalcode" type="text" maxlength="30" class="registerinput" 
		   pattern="\d{5}(?:-\d{4})?|[a-zA-Z]\d[a-zA-Z] ?\d[a-zA-Z]\d"/></td>
</tr></h2>
<tr>
	<td>
<input class="submit"type="button" value="Cancel" id="submit" onClick="location.href='aritzia login page.php';" /> &nbsp;&nbsp;&nbsp;&nbsp;
<input class="submit" type="reset" value="Reset" id="submit" /><br><br>
<input class="submit" type="submit" value="Register" id="submit" onClick="return registerValidate(this)"/>&nbsp;&nbsp;&nbsp;&nbsp;
<input class ="submit" type="button" value="Autofill for testing" id="submit" onClick="autofill();" />
</td></tr>
</table>
</form>

</body>
</html>
