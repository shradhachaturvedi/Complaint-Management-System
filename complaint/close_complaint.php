<?php

include 'db1.php';

$que = "select * from complaint where status = 'open'";
$res = mysqli_query($connect,$que);
if(mysqli_num_rows($res)>0){

   echo '<br><br><center><p style="color:#00bfff; font-size:150%;">Listing all Open Complaints:</p><br><br>';
   echo '<table border="2px"><th>Complaint Id</th><th>employee Id</th><th>section</th><th>complaint type</th><th>specification</th><th>remark</th><th>Close</th>';
	while($rows = mysqli_fetch_assoc($res)){
	echo '<tr>';
	echo '<form method="post" action="close.php"><td><input type="text" name="comp_id" value="' .$rows["comp_id"]. '"></td><td>' .$rows["employee_id"]. '</td><td>' .$rows["emp_section"]. '</td><td>' .$rows["complaint_type"].'</td><td>'.$rows["complaint_spec"]. '</td><td>' .$rows["complaint_rem"].'</td><td><input type="submit" value="Close"></td></form>'; 
	echo '</tr>';
	}
echo '</table></center><br><br>';
echo '<center><a href="admin_homepage.php" style="color:#00bfff; font-size:150%; text-decoration:none">Home</a></center>';
}else{
	echo "No unassigned record found!!!";
}
?>