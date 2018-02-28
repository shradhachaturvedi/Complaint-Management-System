<?php

include 'db1.php';
$aname=$_POST['assigned'];
$compl=$_POST['comp_id'];
echo $aname;
echo $compl;
$quer="select eng_id from engineer where U_name = '" . $aname ."'";

if ($result=mysqli_query($connect, $quer)) {

	while($row = mysqli_fetch_array($result))
{

$sql="update complaint set assigned_to = '$aname' where compl = '$compl'";

mysqli_query($connect,$sql);
if(mysqli_affected_rows($connect)>0){
	echo '<div style=" color: white; background-color: #ff6600; font-size: 200%"><center><p>assignment Successfull!!</p></center></div>';
	}else{
	echo "No such complaint found!!!<br> Please check the complaint id.";
	}

}


}else{
	echo "No such complaint found!!!<br> Please check the complaint id.";
}
echo '<center><a href="admin_homepage.php" style="text-decoration:none; color:#00bfff; font-size:150%">Back To Home!!!</a></center>'





?>