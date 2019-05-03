<?php
session_start();
$host = "localhost";
$db_name = "tool";
$username = "root";
$password = "";
 
try{
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
// to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}

?>
<html>
<head>

	<title>Portal</title>

	<link href="css/upload.css" rel="stylesheet" type="text/css">

	<link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>

	<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>

	<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>

	<link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>




</head>

<body>

	<div id="test">

		<div id="title">Project Managment Tool</div>

		<table id="menu_table" border="0">

			<tr>

				<td id="c1"><a href="projects.php" id="home">Home</a></td>

				<td id="c4"><a href="logout.php" id="signout">Sign Out</a></td>

				<td id="c4"><a href="change_password.html" id="signout">Change Password</a></td>

			</tr>

		</table>
	
	</div>


	
		<div id="signup_text">Add Project</div>

		<form action="upload_file.php" method="post" enctype="multipart/form-data">

		<table id="table" border="0">

			<tr>

				<td id="col1">Project Title<sup id="required">*</td>

				<td id="col2"><input type="text" id="project_title" name="project_title" required></td>

			</tr>

			<tr>

				<td id="col1">Developers<sup id="required">*</td>

	<td id="col2"><select multiple name="developers[]" id="developers"size=1>
    
                <?php
$stmt = $con->prepare("SELECT name FROM user where role_id=3");
$stmt-> execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	extract($row);?>

  <option value=<?php echo $row['name']; ?>><?php echo $row['name'];?> </option> <?php }
?>
  </select></td>

			</tr>
		
			<tr>

				<td id="col1">Manager<sup id="required">*</td>

				<td id="col2"><select name="manager" id="manager" >
                <option value="">----Select manager----</option>
                <?php
$stmt = $con->prepare("SELECT name FROM user where role_id=2");
$stmt-> execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	extract($row);?>

  <option value=<?php echo $row['name']; ?>><?php echo $row['name'];?> </option> <?php }
?>
  </select></td>
			</tr>
		
			<tr>
		
				<td id="col1">Time Log<sup id="required">*</td>

				<td id="col2"><input type="text" id="project_time" name="project_time" required/></td>
	
			</tr>
	

				<tr>

					<td id="col1">Upload Info File<sup id="required">*</td>

					<td id="col2"><input type="file" id="file" required name="file" style="text-align: center" required></td>

				</tr>

				<tr>

					<td id="col1">Completed?</td>

					<td id="col2"><input type="checkbox" id="check" name="check" value="Completed"/>
                    </td>

				</tr>

				

				<tr>

					<td id="col1"></td>

					<td id="col2"><input type="submit" value="Add Project" style="font-size:1em; width: 50%; position: relative; left: 40%;" id="upload_button" name="upload_button"/></td>

				</tr>

		</table>

	</form>

		<div id="required_text">* Marked Details Required</div>

	
</body>



</html>