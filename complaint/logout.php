<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: frame_b.html");
   }
?>