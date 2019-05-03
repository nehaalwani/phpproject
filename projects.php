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

              <td style="background-color:black;"id="menu_col1"><a href="change_password.php" id="signout">Change Password</a></td>

          </table>

      </div>

    </div>

  </div>


  <div id="container">

    <div id="links_table_container">

      <table id="links_table" border="1" cellspacing="0.6" cellpadding="5">

       

        
 <?php     if($row['role_id']==1)
{ ?>
	 <tr>

          <td id="projects_col"><a href="projects.php" id="projects">Projects</a></td>

        </tr>
        <tr>

          <td id="upload_col"><a href="upload.php" id="upload">Add Project</a></td>

        </tr>
		
		 <tr>

          <td id="upload_col"><a href="sign.html" id="upload">Add New User</a></td>

        </tr>
        <tr>

          <td id="upload_col"><a href="view_user.php" id="upload">View User</a></td>

        </tr>
		
        <?php }
        
        
            if($row['role_id']==2)
{ ?>
	 <tr>

          <td id="projects_col"><a href="projects.php" id="projects">Projects</a></td>

        </tr>
        
		<tr>

          <td id="upload_col"><a href="task.php" id="upload">Add New Task</a></td>

        </tr>
		 <tr>

          <td id="upload_col"><a href="see_task.php" id="upload">See Tasks</a></td>

        </tr>
		
        <?php }
        
        
         if($row['role_id']==3)
{ ?>
	 <tr>

          <td id="projects_col"><a href="projects.php" id="projects">Projects</a></td>

        </tr>
        
		
		 <tr>

          <td id="upload_col"><a href="see_task1.php" id="upload">My Tasks</a></td>

        </tr>
		
        <?php } ?>
        
        
      </table>

    </div>

    <div id="space_container">

<h1>Projects</h1>
    <table border="1" cellspacing="5" cellpadding="5" width="100%">
    	<thead>
    		<tr>
    			<th>Id</th>
    			<th>Name</th>
    			<th>Developers</th>
    			<th>Manager</th>
    			<th>Status</th>
    		</tr>
    	</thead>
    	<tbody>
    	<?php
    		
    		$result = $con->prepare("SELECT * FROM project ORDER BY project_id ASC");
    		$result->execute();
    		for($i=0; $row = $result->fetch(); $i++){
    	?>
    		<tr>
    			<td><label><?php echo $row['project_id']; ?></label></td>
    			<td><label><?php echo $row['project_name']; ?></label></td>
    			<td><label><?php echo $row['developers']; ?></label></td>
    			<td><label><?php echo $row['manager']; ?></label></td>
    			<td><label><?php echo $row['project_status']; ?></label></td>
    		</tr>
    		<?php } ?>
    	</tbody>
    </table>
 </div>
  </div>


</div>

</body>

</html>
