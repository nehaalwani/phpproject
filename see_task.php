<?php
session_start();
$host = "localhost";
$db_name = "tool";
$username = "root";
$password = "";
  $u=$_SESSION["user_id"];
  $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
   
$stmt = $con->prepare("SELECT * FROM user where user_id = $u");
$stmt-> execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<html>
<head>

  <title>Portal</title>

  <link href="css/student.css" rel="stylesheet" type="text/css">

  <link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>

  <link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>

  <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>

  <link href='http://fonts.googleapis.com/css?family=Tauri' rel='stylesheet' type='text/css'>

  <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>


<script type="text/javascript">


</script>


    <style type="text/css">
   
    td {
    	text-align:center;
    	padding:10px;
		background-color:rgba(142,140,140,1.00);
		border-radius:10px;
    }
    table {
    	margin:auto;background-color:black;
		border-radius:10px;
    }
    label {
    	font-size:18px;
    	color:black;
        font-weight: bold;
        font-family: cursive;
		border-radius:10px;
    }
    h2,h1 {
    	color:white;
    	text-align:center;
		font-family: '', cursive;
		
    }
	
    th {
    	color:white;
    	font-size:25px;
        font-family: cursive;background-color:rgba(142,140,140,1.00);
		border-radius:10px;
    }
    </style>
</head>


<body>




  <div id="header">

    <div id="navbar">

      <div id="project_title">Project Managment Tool</div>

      <div id="menu_table_container">

          <table border="0">

            <tr>

              <td style="background-color:black;" id="menu_col1"><a href="" id="aboutus">About Us</a></td>

              <td style="background-color:black;" id="menu_col1"><a href="logout.php" id="signout">Sign Out</a></td>

              <td style="background-color:black;" id="menu_col1"><a href="change_password.html" id="signout">Change Password</a></td>

          </table>

      </div>

    </div>

  </div>


  <div id="container">

    <div id="links_table_container">

      <table id="links_table" border="1" cellspacing="0.6" cellpadding="5">

        <tr>

          <td id="projects_col"><a href="projects.php" id="projects">Projects</a></td>

        </tr>

        

	    
		<tr>

          <td id="upload_col"><a href="task.php" id="upload">Add New Task</a></td>

        </tr>
    
	
        
		 <tr>

          <td id="upload_col"><a href="see_task.php"   id="upload" target="data">See Tasks</a></td>

        </tr>
		
    
      </table>

    </div>

    <div id="space_container" >

<h2>Tasks</h2>
    <table border="1" cellspacing="5" cellpadding="5" width="100%">
    	<thead>
    		<tr>
    			<th>Task</th>
    			<th>Member</th>
    			<th>Description</th>
    			<th>Deadline</th>
    			<th>Status</th>
    		</tr>
    	</thead>
    	<tbody>
    	<?php
    		
    		$result = $con->prepare("SELECT * FROM task ORDER BY task_id ASC");
    		$result->execute();
    		for($i=0; $row = $result->fetch(); $i++){
    	?>
    		<tr>
    			<td><label><?php echo $row['task_name']; ?></label></td>
    			<td><label><?php echo $row['task_members']; ?></label></td>
    			<td><label><?php echo $row['task_description']; ?></label></td>
    			<td><label><?php echo $row['task_deadline']; ?></label></td>
    			<td><label><?php echo $row['task_status']; ?></label></td>
    		</tr>
    		<?php } ?>
    	</tbody>
    </table>
 </div>
  </div>


</div>

</body>

</html>
