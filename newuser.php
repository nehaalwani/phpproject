
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
    
     
   $user_name = $_POST['user_name'];
$name = $_POST['name'];
$email = $_POST['email'];
$user_pass =($_POST['user_pass']);
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$gender =  $_POST['gender'];

$role = $_POST['role'];

if ($role =='Admin')
{	
	$role_id = 1;
}
if ($role=='Manager')
{	
	$role_id = 2;
}  
if ($role =='Developer')
{	
	$role_id = 3;
} 
   $sql="INSERT INTO user (name,user_name, user_pass, email, role_id, dob, gender, phone) VALUES
	( '$name','$user_name', '$user_pass', '$email', '$role_id', '$dob', '$gender', '$phone')";
     
    $conn->exec($sql);
    echo "<script>alert('Account successfully added!'); window.location='projects.php'</script>";
    mysqli_close($con);
?>




</body>

</html>