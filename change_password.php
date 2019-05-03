<?php
	
session_start();
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "tool";
     
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
     if(isset($_POST['submit']))
{
 $oldpass=$_POST['text2'];
 $useremail=$_POST['email'];
 $newpassword=$_POST['text3'];

// $con=mysqli_query($con,"update user set user_pass=' $newpassword' where email='$useremail'");
//$_SESSION['msg1']="Password Changed Successfully !!";
$stmt = $con->prepare("update user set user_pass=' $newpassword' where email='$useremail'");
$stmt-> execute();
}
?>
<html>

  <title>Portal</title>

  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

  <link href="css/change_pass.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div id="form_container">

	<form name="form1" id="form1"method="post">
<div id="old">Enter email</div>

		<input type="email" id="email" name="email"><br><br>

		<div id="old">Enter Your old password</div>

		<input type="password" id="text2" name="text2"><br><br>

		<div id="new">Enter Your new password</div>

		<input type="password" id="text3" name="text3"><br><br>
        
        <div id="new">Confirm Your new password</div>

		<input type="password" id="text4" name="text4"><br><br>

		<input type="submit" id="submit1" name="submit1">

	</form>

	</div>

	<a href="projects.php" id="back">Go Back
	</a>

</body>


</html>