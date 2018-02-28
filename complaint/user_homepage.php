<?php
include 'sessions.php';
?>
<html>
<head>
<title>User_homepage</title>
<style>
.button {
    background-color: #00bfff;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>
</head>
<body>
<br><br><br><br>
<center>
<button class="button" onclick="window.location.href='complaint_form.php'">Lodge complaint!!!</button><br><br>
<button class="button" onclick="window.location.href='status.php'">check status</button><br><br>
<button class="button" onclick="window.location.href='close_comlpaint.php'">Close Complaint</button><br><br>
<br><br><br>
<a href="logout.php" style="text-decoration: none; font-size: 150%; color:#00bfff">Logout</a>
</center>
</body>
</html>