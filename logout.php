<?php    
 session_start();  
 session_destroy();  
 $_SESSION["username"] = null; 
 header("location:index.php");  
 ?>  