 <?php  
 session_start(); 
 isset($_SESSION['is_logged_in']); 
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "tool";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["user_name"]) || empty($_POST["user_pass"]))  
           {  
                $message = '<label><h3>All fields are required</h3></label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM user WHERE user_name = :username AND user_pass = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username' => $_POST["user_name"],  
                          'password' => $_POST["user_pass"]  
                     )  
                );  
                $count = $statement->rowCount(); 
									 
				$row = $statement->fetch(PDO::FETCH_ASSOC); 
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["user_name"]; 

					 $_SESSION["user_id"] = $row["user_id"];
                     header("location:login.php");  
                }  
                else  
                {  
                     $message = '<label><h3>Incorrect username or password<br>Please try again.</h3></label>'; 
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 } 
 ?>  
 <html>

<head>
	
<title>Portal</title>
	
<link href="css/index.css" rel="stylesheet" type="text/css">
	
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	
<link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
	
<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Wendy+One' rel='stylesheet' type='text/css'>

<script type="text/javascript">
	



</script>

</head>  
      <body>  
           <br />  
           <div id="test">
	
	<div id="title">Project Management Tool</div>
	
	</div>

	<div id="login">Login</div>
	
<div id="login_container"> 
                
                <form method="post" >  
                
                <table id="login_table" border="0">
<tr>
	<td id="col1">Username</td>

				        <td id="col2"><input type="text" name="user_name" id="user_name"  /> </td>
</tr>

                
			<tr>
<td id="col1">Password</td>
				
				<td id="col2"><input type="password" name="user_pass" id="user_pass" /> 
		</td>
</tr>
                     </table> 
                       <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  <br /> 
                     <input type="submit" name="login" id="btn2" value="Login" /> 
                    <br \> 
                </form>  
           
           <br /> 
          
	</div>
	<div id="required_text">Cannot leave fields empty</a></div> 
      </body>  
 </html>