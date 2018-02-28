<?php
$connect=mysqli_connect('localhost','root','','complaints');

if(mysqli_connect_errno($connect)){
	echo "failed to connect";
}

?>