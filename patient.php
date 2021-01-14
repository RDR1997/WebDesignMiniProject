<?php
	include("session.php");
	include("connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Online Patient Management System</title>
		<link rel="stylesheet" href="css/patient_reg.css">
		<link rel="stylesheet" href="css/patient.css">
	</head>
	<body>
		<?php
			if(isset($_POST['my_profile'])){
				$id = $_SESSION['username'];
				$query = "SELECT patient_ID,first_name,last_name,DOB,gender,address FROM patient WHERE username = {$_SESSION['username']}LIMIT 1";
				$result = mysql_query($connect,$query);
				$row = mysql_fetch_array($result);
				if(mysql_num_rows($result)>0){
					while($row){
						$patient_ID = $row['patient_ID'];
						$first_name = $row['first_name'];
						$DOB = $row['DOB'];
						//$age = $row['age'];
						$gender = $row['gender'];
						//$patient_email = $row['patient_email'];
						//$contact_number = $row['contact_number']
						$address = $row['address'];
					}
				}
				else{
					echo "Undefined username";
				}
				$mysql_free_result($result);
				$mysql_close($conn);
			}
		?>
		<div class="container">
		<div class="nav">
			<ul>
				<li><a href = "logout.php">Log out</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Home</a></li>
			</ul>
		</div>
		<br>
		<div class="row">
			
			<div class="column left">
			<form action="patient.php" method="POST">
				<table>
					<tr><td><button class="side_nav" name="my_profile">My Profile</button></td></tr>
					<tr><td><button class="side_nav">Book Appointments</button></td></tr>
					<tr><td><button class="side_nav">Treatment History</button></td></tr>
					<tr><td><button class="side_nav">View Bookings</button></td></tr>
					<tr><td><button class="side_nav">Search Doctors</button></td></tr>
				</table>
			</div>
			<div class="column center">
			
				<h3>Family Details</h3>
				<table border="1px solid #000" class="f_info">
					<tr>
						<td>Family ID</td>
						<td><input type="text" name="family_ID"></td>
					</tr>
					<tr>
						<td>Family Name</td>
						<td><input type="text" name="family_name"></td>
					</tr>
					<tr>
						<td>Contact Number</td>
						<td><input type="text" name="contact_number"></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" name="family_address"></td>
					</tr>
				</table>
			
			</div>
			<div class="column right">
				<h3>Patient Details</h3>
				<table border="1px solid #000" class="f_info">
					<tr>
						<td>Patient ID</td>
						<td><input type="text" name="patient_ID"></td>
					
						<td>Name</td>
						<td><input type="text" name="first_name"></td>
					</tr>
					<tr>
						<td>Date of Birth</td>
						<td><input type="text" name="DOB"></td>
					
						<td>Age</td>
						<td><input type="text" name="age"></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><input type="text" name="gender"></td>
					
						<td>E-mail address</td>
						<td><input type="text" name="patient_email"></td>
					</tr>
					<tr>
						<td>Contact Number</td>
						<td><input type="text" name="contact_number"></td>
					
						<td>Address</td>
						<td><input type="text" name="address"></td>
					</tr>
				</table>
			</div>
			</form>
		</div>
		</div>
	</body>
</html>