<?php
   include("db1.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($connect,$_POST['username']);
      $mypassword = mysqli_real_escape_string($connect,$_POST['password']); 
      if($myusername=="adminZ"){
		  echo "This is not the admin login!!!";
	  }else{
      $sql = "SELECT eng_id FROM engineer WHERE U_name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
		 $_SESSION['login_id']=$row['eng_id'];
         
         header("location: engg_homepage.php");
      }else {
         echo  "Invalid Credentials!!!";
      }
	  }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
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
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div>
            <div style = "background-color:orange; color:white; padding:3px; font-size:150%;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label style="font-size: 150%; color:#00bfff">UserName  :</label><br><br><input type = "text" name = "username" class = "box"/><br /><br />
                  <label style="font-size: 150%; color:#00bfff">Password  :</label><br><br><input type = "password" name = "password" class = "box" /><br/><br />
                  <input class="button" type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>