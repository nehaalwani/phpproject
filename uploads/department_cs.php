<?php
include_once("config.php");
$department=$_POST['department'];
$adminSuggest=$_POST['adminSuggestion'];
$userReview=$_POST['userReview'];
$userSuggestion=$_POST['userSuggestion'];

$sql = "INSERT INTO department(departmentName, userReview, userSuggestion, adminSuggestion,status)VALUES 
('$department','$userReview','$userSuggestion','$adminSuggest','issue')";

$result=$conn->query($sql);

$sql2 = "update feedback set status='done' where sbox='{$userSuggestion}' and review='{$userReview}'";
$result2=$conn->query($sql2);
if($result && $result2)
{
	session_start();
	
	header("location:admin.php");
	}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	
}



?>