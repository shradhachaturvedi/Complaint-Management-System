<?php
//include 'sessions.php'; 
?>
<html>
<head>
<title>Engineer_homepage</title>
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
<button class="button" onclick="window.location.href='view_alle.php'">View all complaints</button>
<a class="button" href="logout.php">Logout</a><br><br>
<?php
include 'db1.php';
include 'sessions.php'; 

$que = "select * from complaint where assigned_to = '" . $_SESSION['login_user'] ."'";
$res = mysqli_query($connect,$que);
if(mysqli_num_rows($res)>0){

   echo '<p style="color:orange; font-size:150%">Displaying Assigned Complaints:</p>';
   echo '<table border="2px"><th>Complaint Id</th><th>employee Id</th><th>section</th><th>complaint type</th><th>specification</th><th>remark</th><th>engineer remark</th><th>Save remark</th>';
	while($rows = mysqli_fetch_assoc($res)){
	echo '<tr>';
	echo '<form method="post" action="submit_remark.php"><td><input type="text" name="comp_id" value="' .$rows["comp_id"]. '"></td><td>' .$rows["employee_id"]. '</td><td>' .$rows["emp_section"]. '</td><td>' .$rows["complaint_type"].'</td><td>'.$rows["complaint_spec"]. '</td><td>' .$rows["complaint_rem"].'</td><td><input type="text" name="engg_rem"></td><td><input type="submit" value="Save remark"></td>'; 
	echo '</tr>';
	}
echo '</table>';
}else{
	echo "No assigned complaint found!!!";
}


?>
</center>
</center>
</body>
</html>