<?php

include 'db1.php';
include 'sessions.php'; 

$que = "select * from complaint where assigned_to = '" . $_SESSION['login_user'] ."'";
$res = mysqli_query($connect,$que);
if(mysqli_num_rows($res)>0){

   echo 'Complaint details:';
   echo '<table border="2px"><th>Complaint Id</th><th>employee Id</th><th>section</th><th>complaint type</th><th>specification</th><th>remark</th>';
	while($rows = mysqli_fetch_assoc($res)){
	echo '<tr>';
	echo '<td>' .$rows["comp_id"]. '</td><td>' .$rows["employee_id"]. '</td><td>' .$rows["emp_section"]. '</td><td>' .$rows["complaint_type"].'</td><td>'.$rows["complaint_spec"]. '</td><td>' .$rows["complaint_rem"].'</td>'; 
	echo '</tr>';
	}
echo '</table>';
}else{
	echo "No assigned complaint found!!!";
}

?>