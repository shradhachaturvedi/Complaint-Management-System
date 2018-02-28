<?php
include "sessions.php";
?>
<html>
<head>
<title>Admin_homepage</title>
<style>
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
</head>
<body>
<br><br><br><br>
<center>
<button class="button" onclick="window.location.href='statusa.php'">View status</button>
<button class="button" onclick="window.location.href='view_engg.php'">View Engineer details</button>
<button class="button" onclick="window.location.href='view_open.php'">View all open compalints</button>
<button class="button" onclick="window.location.href='view_closed.php'">View all closed complaints</button><br><br>
<button class="button" onclick="window.location.href='view_all.php'">View all complaints</button>
<button class="button" onclick="window.location.href='close_complaint.php'">Close Complaint</button>
<a class="button" href="logout.php">Logout</a>
<div>
<?php

include 'db1.php';

$que = "select * from complaint where assigned_to = 'none'";
$res = mysqli_query($connect,$que);
if(mysqli_num_rows($res)>0){

   echo '<p style="color:orange; font-size:150%">Unassigned Complaint details:<p><br>';
   echo '<table border="2px"><th>Complaint Id</th><th>employee Id</th><th>section</th><th>complaint type</th><th>specification</th><th>remark</th><th>Assign to</th><th>Save</th>';
	while($rows = mysqli_fetch_assoc($res)){
	echo '<tr>';
	echo '<form method="post" action="assign.php"><td><input type="text" name="comp_id" value="' .$rows["comp_id"]. '"></td><td>' .$rows["employee_id"]. '</td><td>' .$rows["emp_section"]. '</td><td>' .$rows["complaint_type"].'</td><td>'.$rows["complaint_spec"]. '</td><td>' .$rows["complaint_rem"].'</td><td><select name="assigned"><option value="watsonJ">John Watson</option><option value="holmesS">Sherlock Holmes</option><option value="potterH">Harry Potter</option><option value="starkT">Tony Stark</option></select></td><td><input type="submit" value="Save"></td></form>'; 
	echo '</tr>';
	}
echo '</table>';
}else{
	echo "No unassigned record found!!!";
}

?>
</div>
</center>
</body>
</html>