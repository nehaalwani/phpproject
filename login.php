<?php  
 
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      
	  header("location:projects.php");  
 }  
 else  
 {  
      header("location:index.php");  
 }  
 ?>  