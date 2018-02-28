<?php
include 'sessions.php';
include 'db1.php';
//$cids=$_POST['cid'];
//$cids=$cids;
$id=$_SESSION['login_id'];
$sql="select * from complaint";

echo '<center><br><br><p style="color:orange; font-size:150%;">Status:</p><br><br>';
if ($result=mysqli_query($connect, $sql)) {
 echo '<table border="2px"><th>Complaint Id</th><th>status</th><th>Engineer Status</th><th>Remark_date</th>';
	while($row = mysqli_fetch_array($result))
{
	echo '<tr>';
	echo '<td>' .$row["comp_id"]. '</td><td>' .$row["status"]. '</td><td>' .$row["engg_remark"] . '</td><td>' .$row["rem_date"] . '</td>'; 
	echo '</tr>';
}
echo '</table></center><br>';
echo '<center><a href="user_homepage.php" style="color:#00bfff; font-size:150%; text-decoration:none">Home</a></center>';

}else{
	echo "No such complaint found!!!<br> Please check the complaint id.";
}




?>