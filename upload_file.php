<?php
	// Session is started and it is checked whether the user has logged in or not
	session_start();
	
	$db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "tool";  
   
   
	
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$project_title = $_POST['project_title'];
$manager=$_POST['manager'];
$project_time=$_POST['project_time'];
$check=$_POST['check'];
if($check=='')
{
	$check="In Process";}

$chk = implode(', ', $_POST['developers']);
	
	
	 $file_name = $_FILES['file']['name'];
      $file_tmp = $_FILES['file']['tmp_name'];
      $target_dir = "uploads/";
         move_uploaded_file($file_tmp,"uploads/".$file_name);
	
	$target = $target_dir . basename(time().$_FILES["file"]["name"]);
 	

	 $sql2="INSERT INTO project (project_name,project_description,developers,manager,project_status,project_time) VALUES
	( '$project_title','$target','$chk','$manager', '$check', '$project_time')";
     
    $conn->exec($sql2);
    echo "<script>alert('Project successfully added!'); window.location='projects.php'</script>";

?>