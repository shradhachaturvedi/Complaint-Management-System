
<?php
include "sessions.php";
?>
<html>

<head>
<title>USER_COMPLAINT</title>

<style>
label{
	display:inline-block;
		width:200px;
		margin-bottom:10px;
}

.button {
    background-color: #00bfff;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>

<script language="javascript" type="text/javascript">
function second() {
    var x = document.getElementById("Ctype").value;
    //document.getElementById("label1").style.display = "block";
	if (x == "Computer"){ 
	
	document.getElementById("cspec").style.display = "block";
	document.getElementById("pspec").style.display = "none";
	document.getElementById("nspec").style.display = "none";
	}
	if (x == "Printer") {
	document.getElementById("pspec").style.display = "block";
	document.getElementById("cspec").style.display = "none";
	document.getElementById("nspec").style.display = "none";
	}
	if (x == "network") {
	document.getElementById("nspec").style.display = "block";
	document.getElementById("pspec").style.display = "none";
	document.getElementById("cspec").style.display = "none";
	}

}
</script>

</head>

<body>
<center>
<form method="post" action="process.php">
<h1 style="font-size: 200%; color:orange">Fill Up The Complaint Details</h1><br>

<label  style="font-size: 150%; color:#00bfff">Section:</label><br>
<input type="text" name="section"><br><br>
<label  style="font-size: 150%; color:#00bfff">Complaint Type:</label><br>

<select name="Ctype" id="Ctype"  onchange="second()">
        <option value="Computer">Computer hardware</option>
        <option VALUE="Printer"> Printer</option>
        <option VALUE="network"> Networking Issues</option>
</select><br><br>
<label  style="font-size: 150%; color:#00bfff">Specifications:</label><br>
<select id="cspec" name="cspec">
        <option  value="turn">Wont turn on</option>
        <option  value="freeze">Lockups and freeze</option>
		<option  value="overheating">Over heating</option>
		<option  value="noice">Strange noices</option>
</select>
<select id="pspec" name="pspec" style="display:none;">
        <option  value="slow">Slow printing</option>
		<option  value="paper">Paper stuck</option>
		<option  value="ink">ink spill</option>
		<option  value="nores">no response</option>
</select>
<select id="nspec" name="nspec" style="display:none;">
        <option  value="slow">Slow network</option>
		<option  value="dns">DNS error</option>
		<option  value="cantconnect">Cant connect</option>
		<option  value="nonet">No network found</option>
</select>
<br><br>
<label  style="font-size: 150%; color:#00bfff">Remarks:</label><br>
<input type="text" name="rem" ><br><br>
<input class="button" type="submit" value="Lodge Complaint" >
</form>
<br><br>
<a href="user_homepage.php" style="text-decoration: none; font-size: 150%; color:orange">Back to home page.</a>
</center>
</body>


</html>