<?php
include 'sessions.php';
include 'db1.php';
$cids=$_POST['comp_id'];
//$cids=$cids;
$id=$_SESSION['login_id'];
$sql="select * from remark where complaint = '$cids'";

echo '<center><br><br><p style="color:orange; font-size:150%;">Progress:</p><br><br>';
if ($result=mysqli_query($connect, $sql)) {
 echo '<table border="2px"><th>Complaint Id</th><th>remark</th><th>Date</th>';
	while($row = mysqli_fetch_array($result))
{
	echo '<tr>';
	echo '<td>' .$row["complaint"]. '</td><td>' .$row["remark"]. '</td><td>' .$row["date"] . '</td>';
	echo '</tr>';
}
echo '</table></center><br>';
echo '<center><a href="statusa.php" style="color:#00bfff; font-size:150%; text-decoration:none">Status</a></center>';

}else{
	echo "No such complaint found!!!<br> Please check the complaint id.";
}




?>