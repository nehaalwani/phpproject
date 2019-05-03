<?php 
	include_once("config.php");
	session_start();
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
		<!-- for-mobile-apps -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<meta name="keywords" content="Feedback Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<!-- //for-mobile-apps -->
		<link href='//fonts.googleapis.com/css?family=Amaranth:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Josefin+Slab:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script>
			var userReview, userSuggestion, department, index, adminSuggestion;
			
			function myFunction(x) {
				var table = document.getElementsByTagName("table")[0];
				var tbody = table.getElementsByTagName("tbody")[0];
				tbody.onclick = function (e) {
					e = e || window.event;
					var data = [];
					var target = e.srcElement || e.target;
					while (target && target.nodeName !== "TR") {
						target = target.parentNode;
					}
					if (target) {
						var cells = target.getElementsByTagName("td");
						userReview=cells[1].innerHTML;
						userSuggestion=cells[11].innerHTML;
						
					}
					
				};
				
				//alert("Row index is: " + x.rowIndex);
				var rates = document.getElementsByName('experience');
				var rate_value;
				index = x.rowIndex-1;
				rates[x.rowIndex-1].checked=true;
				for(var i = 0; i < rates.length; i++){
					if(rates[i].checked){
						
						var table = document.getElementById('example');
						var rowSelected = table.getElementsByTagName('tr')[i+1];
						rowSelected.style.backgroundColor = "yellow";
						document.getElementsByName('adminSuggest')[i].disabled = false;
						document.getElementsByName('lp')[i].disabled = false;
						
					}
					else{
						var table = document.getElementById('example');
						var rowSelected = table.getElementsByTagName('tr')[i+1];
						rowSelected.style.backgroundColor = "";
						document.getElementsByName('adminSuggest')[i].disabled = true;
						document.getElementsByName('lp')[i].disabled = true;
						
					}
				}
			}
			
			function sendData(){
				
				department = document.getElementsByName('department')[index].value;
				adminSuggestion = document.getElementsByName('adminSuggest')[index].value;
				alert(userReview+userSuggestion+department+adminSuggestion);
				
				var theForm, newInput1, newInput2;
				// Start by creating a <form>
				theForm = document.createElement('form');
				theForm.action = 'admin_cs.php';
				theForm.method = 'post';
				// Next create the <input>s in the form and give them names and values
				newInput1 = document.createElement('input');
				newInput1.type = 'hidden';
				newInput1.name = 'department';
				newInput1.value = department;
				newInput2 = document.createElement('input');
				newInput2.type = 'hidden';
				newInput2.name = 'adminSuggestion';
				newInput2.value = adminSuggestion;
				newInput3 = document.createElement('input');
				newInput3.type = 'hidden';
				newInput3.name = 'userReview';
				newInput3.value = userReview;
				newInput4 = document.createElement('input');
				newInput4.type = 'hidden';
				newInput4.name = 'userSuggestion';
				newInput4.value = userSuggestion;
				// Now put everything together...
				theForm.appendChild(newInput1);
				theForm.appendChild(newInput2);
				theForm.appendChild(newInput3);
				theForm.appendChild(newInput4);
				// ...and it to the DOM...
				document.getElementById('hidden_form_container').appendChild(theForm);
				// ...and submit it
				theForm.submit();
				alert(userReview+userSuggestion+department+adminSuggestion);
			}
			
		</script>
	</head>
	<body>
		<div class="content">
			<h1>Admin Panel</h1>
			<div class="main" >
				<table id="example" class="myTable">
					<thead>
						<tr style="font-weight:bold">
							<th></th>
							<th>User Review</th>
                            <th>Experience</th>
                            <th>Checkin</th>
                            <th>Baggage</th>
                            <th>Food</th>
                            <th>Security</th>
                            <th>Cleanliness</th>
                            <th>Pickup</th>
                            <th>Waiting_area</th>
                            <th>Facilities</th>
							<th>User Suggestion</th>
							<th>Select Department</th>
							<th>Your Suggestion</th>
							<th></th>
						</tr>
					</thead>
					<tbody class="product-options">
						<form id="tye" name="admin">
							<?php
								$query = "select * from feedback ";
								$r = mysqli_query($conn,$query);
								while($row = mysqli_fetch_array($r)){
								?>
								<tr class="table" onClick="myFunction(this)">
									<td>
										<div class="radio-btns">
											<input type="radio" id="test" name="experience" value="Very Good">
										</div>
									</td>
                                    
									<td><?php echo $row['review']?></td>
                                    <td><?php echo $row['experience']?></td>
                                    <td><?php echo $row['checkin']?></td>
                                    <td><?php echo $row['baggage']?></td>
                                    <td><?php echo $row['food']?></td>
                                    <td><?php echo $row['security']?></td>
                                    <td><?php echo $row['cleanliness']?></td>
                                    <td><?php echo $row['pickup']?></td>
                                    <td><?php echo $row['waiting_area']?></td>
                                    <td><?php echo $row['facilities']?></td>
									<td><?php echo $row['sbox']?></td>
									<td><select style="width:95%;" name="department">
									<option value="checkin@gmail.com">checkin</option>
									<option value="baggage@gmail.com">baggage</option>
									<option value="food@gmail.com">food</option>
                                    <option value="security@gmail.com">security</option>
									<option value="cleanliness@gmail.com">cleanliness</option>
                                    <option value="pickup@gmail.com">pickup</option>
                                    <option value="waitingarea@gmail.com">waiting area</option>
                                    <option value="facilities@gmail.com">facilities</option></select></td>
									<td><input type="text" id="suggest" name="adminSuggest" disabled required></td>
									<td><button type="button" onClick="sendData()">Submit</button></td>
									
								</tr>
								
								<?php
								}
							?>   
						</tbody>
					</form>
				</table>
			</div>	
			<div id="hidden_form_container" style="display:none;"></div>
		</body>
	</html>
