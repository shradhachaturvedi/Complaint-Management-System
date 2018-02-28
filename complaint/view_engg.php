<?php

include 'db1.php';

$que = "select * from engineer";
$res = mysqli_query($connect,$que);
if(mysqli_num_rows($res)>0){

   echo '<center><br><br><p style="color:orange; font-size:150%">Engineer details:</p>';
   echo '<table border="2px"><th>Engineer Id</th><th>User name</th><th>Name</th><th>total complaint assigned</th><th>total closed</th>';
	while($rows = mysqli_fetch_assoc($res)){
	echo '<tr>';
	echo '<td>' .$rows["eng_id"]. '</td><td>' .$rows["U_name"]. '</td><td>' .$rows["name"]. '</td><td></td><td></td>'; 
	echo '</tr>';
	}
echo '</table></center><br>';
echo '<center><a href="admin_homepage.php" style="color:#00bfff; font-size:150%; text-decoration:none">Home</a></center>';
}else{
	echo "No Open record found!!!";
}

?>