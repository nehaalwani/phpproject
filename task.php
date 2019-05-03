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


	
		<div id="signup_text">Add Task</div>

		<form action="task_file.php" method="post">

		<table id="table" border="0">

			<tr>

				<td id="col1">Project Title<sup id="required">*</td>

				<td id="col2"><select name="project_name" id="project_name">
    
                <?php
$stmt = $con->prepare("SELECT project_name FROM project");
$stmt-> execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	extract($row);?>

  <option value=<?php echo $row['project_name']; ?>><?php echo $row['project_name'];?> </option> <?php }
?>
  </select>
			</tr>

			<tr>

				<td id="col1">Task Name<sup id="required">*</td>

				<td id="col2"><input type="text" id="task_name" name="task_name" required/></td>

			</tr>
		
			<tr>

				<td id="col1">Task Member<sup id="required">*</td>

				<td id="col2"><select name="task_members" id="task_members">
    
                <?php
$stmt = $con->prepare("SELECT name FROM user");
$stmt-> execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	extract($row);?>

  <option value=<?php echo $row['name']; ?>><?php echo $row['name'];?> </option> <?php }
?>
  </select>
			</tr>
            <tr>

				<td id="col1">Task Description<sup id="required"></td>

				<td id="col2"><input type="text" id="task_description" name="task_description"/></td>
	
			</tr>
		
			<tr>
		
				<td id="col1">Task Deadline<sup id="required">*</td>

				<td id="col2"><input type="date" id="task_deadline" name="task_deadline" required/></td>
	
			</tr>

<tr>
						<td></td>
						<td><button type="submit" value="Sign Up" id="signup_button" /> Add Task</td>
					</tr>

		</table>

	</form>

		<div id="required_text">* Marked Details Required</div>

	
</body>



</html>