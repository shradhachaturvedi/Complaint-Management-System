<?php

include 'db1.php';
$cids=$_POST['comp_id'];
$date=date("y-m-d H:i:s");
$rem=$_POST['engg_rem'];
//echo $cids;
echo '<br><br><br><br>';
$sql="update complaint set engg_remark = '$rem', rem_date = '$date' where compl = '$cids'";

mysqli_query($connect,$sql);
if(mysqli_affected_rows($connect)>0){
	echo '<div style=" color: white; background-color: #ff6600; font-size: 200%"><center><p>'. $cids .' :Remark Successfully!!</p></center></div>';
	echo '<center><a href="engg_homepage.php" style="color:#00bfff; font-size:150%; text-decoration:none">Back to Home.</a></center>';	
}else{
	echo 'No such complaint found!!!<br> Please check the complaint id.';
	}
$sqlo="INSERT INTO remark (complaint, remark, date) VALUES ('$cids','$rem','$date')";
mysqli_query($connect,$sqlo);
if(mysqli_affected_rows($connect)>0){
echo '<div style=" color: white; background-color: #ff6600; font-size: 200%"><center><p>'. $cids .' :Remark registered Successfully!!</p></center></div>';
}
?>