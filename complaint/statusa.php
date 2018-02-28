<?php

include 'db1.php';
//$cids=$_POST['cid'];
//$cids=$cids;

$sql="select * from complaint";

echo '<center><br><br><p style="color:orange; font-size:150%;">Status:</p><br><br>';
if ($result=mysqli_query($connect, $sql)) {
 echo '<table border="2px"><th>Complaint Id</th><th>status</th><th>Engineer Status</th><th>Status Date</th><th>progress</th>';
	while($row = mysqli_fetch_array($result))
{
	echo '<tr>';
	echo '<form method="post" action="progress.php"><td><input type="text" name="comp_id" value="' .$row["comp_id"]. '"></td><td>' .$row["status"]. '</td><td>' .$row["engg_remark"] . '</td><td>' .$row["rem_date"] . '</td><td><input type="submit" value="check progress"></td></form>';
	echo '</tr>';
}
echo '</table></center><br>';
echo '<center><a href="admin_homepage.php" style="color:#00bfff; font-size:150%; text-decoration:none">Home</a></center>';

}else{
	echo "No such complaint found!!!<br> Please check the complaint id.";
}




?>