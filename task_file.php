
<html>
<head>
  <title>Portal</title>
  <link href="css/new_user.css" rel="stylesheet" type="text/css">
</head>

<body>




    <?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "tool";
     
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
     
   $project_name = $_POST['project_name'];
$task_name = $_POST['task_name'];
$task_members = $_POST['task_members'];
$task_description =$_POST['task_description'];
$task_deadline = $_POST['task_deadline'];

if ($task_deadline >= date("Y-m-d"))
{	
	$task_status = 'In Process';
}
else
{	
	
	$task_status = 'Experied';
} 
   $sql="INSERT INTO task (project_name,task_name, task_members, task_description, task_deadline,task_status) VALUES
	( '$project_name', '$task_name', '$task_members', '$task_description', '$task_deadline','$task_status')";
     
    $conn->exec($sql);
    echo "<script>alert('Task successfully added!'); window.location='projects.php'</script>";
    mysqli_close($con);
?>




</body>

</html>