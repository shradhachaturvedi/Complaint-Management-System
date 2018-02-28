<?php

include 'db1.php';

$que = "select * from complaint";
$res = mysqli_query($connect,$que);
if(mysqli_num_rows($res)>0){

   echo '<center><br><br><p style="color:orange; font-size:150%">Displaying All Complaints:</p>';
   echo '<table border="2px"><th>Complaint Id</th><th>employee Id</th><th>section</th><th>complaint type</th><th>specification</th><th>remark</th><th>Assigned to</th><th>Status</th>';
	while($rows = mysqli_fetch_assoc($res)){
	echo '<tr>';
	echo '<td>' .$rows["comp_id"]. '</td><td>' .$rows["employee_id"]. '</td><td>' .$rows["emp_section"]. '</td><td>' .$rows["complaint_type"].'</td><td>'.$rows["complaint_spec"]. '</td><td>' .$rows["complaint_rem"].'</td><td>'.$rows["assigned_to"].'</td><td>'.$rows["status"].'</td>'; 
	echo '</tr>';
	}
echo '</table></center><br>';
echo '<center><a href="engg_homepage.php" style="color:#00bfff; font-size:150%; text-decoration:none">Home</a></center>';
}else{
	echo "No unassigned record found!!!";
}

?>