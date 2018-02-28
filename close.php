<?php

include 'db1.php';
$cids=$_POST['comp_id'];
$date=date("y-m-d H:i:s");

//echo $cids;
echo '<br><br><br><br>';
$sql="update complaint set status = 'closed', date_closed = '$date' where compl = '$cids'";

mysqli_query($connect,$sql);
if(mysqli_affected_rows($connect)>0){
	echo '<div style=" color: white; background-color: #ff6600; font-size: 200%"><center><p>'. $cids .' :Closing Successfull!!</p></center></div>';
	echo '<center><a href="close_comlpaint.php" style="color:#00bfff; font-size:150%; text-decoration:none">Back to Close.</a></center>';	
}else{
	echo 'No such complaint found!!!<br> Please check the complaint id.';
	}

?>