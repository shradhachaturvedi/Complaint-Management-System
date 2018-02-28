<?php
include 'db1.php';
include 'sessions.php';

$cid=null;
$section1=$_POST['section'];
$type=$_POST['Ctype'];
$cspec1=$_POST['cspec'];
$nspec1=$_POST['nspec'];
$pspec1=$_POST['pspec'];
$remark=$_POST['rem'];
$date=date("y-m-d H:i:s");
$datec=date("0000-00-00 00:00:00");
$employee_id=$_SESSION['login_id'];
$status="open";
$assigned="none";

$fir=null;

if($type == "Computer"){
$specific=$cspec1;
$fir="C";
}
if($type == "Printer"){
$specific=$pspec1;
$fir="P";
}
if($type == "network"){
$specific=$nspec1;
$fir="N";
}

$thi=$specific[0];

$sec = date("d") . date("m");

$sqlo="select count(*) from complaint";
$res=mysqli_query($connect,$sqlo);
$row = mysqli_fetch_array($res);


$cid=$fir . $thi . $section1 . $sec . $row['count(*)'];

$que = "select * from complaint where compl = '$cid'";
$res = mysqli_query($connect,$que);
if(mysqli_num_rows($res)>0){

while($rows = mysqli_fetch_assoc($res)){
echo $row['compl'][10];
}
}


$complaint_id=null;

echo'<br><br><br><center><p  style="color:#00bfff;">Your complaint has been regestered. the complaint id is:</p></center> ';
$complaint_id = $cid;
echo '<center>';
echo '<p style="color:orange;">' . $complaint_id . '</p>';
echo '</center>';


mysqli_query($connect,"INSERT INTO complaint (comp_id,compl, employee_id, complaint_type, complaint_spec, date_lodge, date_closed, status, assigned_to, complaint_rem, emp_section) VALUES ('
$cid','$cid','$employee_id','$type','$specific','$date',null,'$status','$assigned','$remark','$section1')");

if(mysqli_affected_rows($connect)>0){
	echo '<p style="color:orange;">Data entry success!!!</p>';
	echo '<a href="user_homepage.php" style="text-decoration: none; font-size: 150%; color:#00bfff">Back to home Page.</a>';
	}else{
	echo mysqli_error($connect);
	}


?>