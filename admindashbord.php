<!DOCTYPE html>
<html>
	<head>
		<title>Admin Dashbord</title>
		<link rel="stylesheet" type="text/css" href="css/admindashbord.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
	<!-- navigation bar------------------------------------------------------------------------------------------------------------------------------------- -->
			<ul>
				<img src="img/logo.png"alt="logo"style="width:55px;height:55px; padding-left: 10px;"align="left";>
				<li class="logo">My Doctor Hospitals
				
				</li>
				
				<li class="nav"><a href="index.php">Logout</a></li>
				<li class="nav"><a href="contact.php">Contact</a></li>
				<li class="nav"><a href="about.php">About us</a></li>
				<li class="nav"><a href="services.php">Services</a></li>
				<li class="nav"><a href="index.php">Home</a></li>
			</ul>
			
		<!--profile line--------------------------------------------------------------------------------------------------------------------------------------->	
		<div class="split left">
			<div class="centered">
				<img src="img/img_avatar2.png" alt="Avatar woman">
				<h2>Jane Flex</h2>
				<p>Some text.</p>
				<p>Some text.</p>
				<p>Some text.</p>
				<p>Some text.</p>
				<p>Some text.</p>
			</div>
		</div>	
		
		<!--counters--------------------------------------------------------------------------------------------------------------------------------------->
		<table class="table3">	
				<tr>
					<th>
						<?php
						$conn  = mysqli_connect("localhost","root","","my doctor");
						mysqli_select_db($conn,"my doctor");

						$result = mysqli_query( $conn,"SELECT * FROM doctor");
						$num_rows = mysqli_num_rows($result);

						echo "$num_rows\n";
						?>
					</th>
			
					<th>
						<?php
						$conn  = mysqli_connect("localhost","root","","my doctor");
						mysqli_select_db($conn,"my doctor");

						$result = mysqli_query( $conn,"SELECT * FROM patient");
						$num_rows = mysqli_num_rows($result);

						echo "$num_rows\n";
						?>
					</th>
					<th>
						
					</th>
				</tr>
					<tr>
					<td>Total Doctors</td>
					<td>Total Patients</td>
					<td>Appointments</td>
				</tr>
				
			</table>	
			
		<!--Managment--------------------------------------------------------------------------------------------------------------------------------------->
			<table class="table1">
				<tr>
					<th>Manage Doctors</th>
					<th>Manage Patient</th>
					<th>Manage Appointments</th>
				</tr>
				<tr>
					<td><a href="#1">View Doctors</a></td>
					<td><a href="admin/showPatient.php">View Patient</a></td>
					<td><a href="#1">View Appointments</a></td>
					
				</tr>
				<tr>
					<td><a href="#2">Update Doctors</a></td>
					<td><a href="#2">Update Patient</a></td>
					<td><a href="#2">Update Appointments</a></td>
					
				</tr>
				<tr>
					<td><a href="addDoc.php">Add Doctors</a></td>
					<td><a href="#3">Add Patient</a></td>
					<td><a href="#3">#3</a></td>
					
				</tr>
				<tr>
					<td><a href="#4">Remove Doctors</a></td>
					<td><a href="#4">Remove Patient</a></td>
					<td><a href="#4">Remove Appointments</a></td>
					
				</tr>
			</table>
			
			
		<br><br><br><br><br><br>
		
	
		
			
			
			
			
			
			
			
			
			
			
			
			
			
	<!-- Footer------------------------------------------------------------------------------------------------------------------------------------------------- -->
			<footer>
		
			<div class="row">
			
				<div class="column5";>
					<h1 align="left";>My Doctor Hospitals(pvt)Ltd</h1>
					<img src="img/logo.png"alt="logo"style="width:150px;height:150px;"align="left";>
				</div>

				<div class="column6">
					<h2 align="left";>Contact Us</h2>
					<table>
						<tr style="line-height: 1em;">
							<td><i class="fa"><img src="icon/7.png" style="height: 30px; width: 30px;"></i></td>
							<td>My Doctor Hospitals(pvt)Ltd<br>Anuradhapura<br>Sri Lanka</td>
						</tr>
						<tr style="line-height: 1em;">
							<td><i class="fa"><img src="icon/6.png" style="height: 30px; width: 30px;"></i></td>
							<td>+94-55 5555555</td>
						</tr>
						<tr style="line-height: 1em;">
							<td><i class="fa"><img src="icon/4.png" style="height: 30px; width: 30px;"></i></td>
							<td><a href="#">www.mydoctorhospitals.abc.lk</a></td>
						</tr>
						<tr style="line-height: 1em;">
							<td><i class="fa"><img src="icon/1.png" style="height: 30px; width: 30px;"></i></td>
							<td><a href="#">my_doc@abc.lk</a></td>
						<tr>
						<tr style="line-height: 1em;">
							<td><i class="fa"><img src="icon/3.png" style="height: 30px; width: 30px;"></i></td>
							<td>+94-55 5555555</td>
						</tr>
					</table>
				</div>
	
				<div class="column7">
						<div class="row">
							<div class="links">
							<h2>Navigate</h2>
								<a href="index.html" style="font-size: 12px; line-height: 2em;">home</a><br>
								<a href="services.html" style="font-size: 12px; line-height: 2em;">Services</a><br>
								<a href="about_us.html" style="font-size: 12px; line-height: 2em;">About Us</a><br>
								<a href="contact.html" style="font-size: 12px; line-height: 2em;">Contact Us</a><br>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="connect">
								<h2>Find Us:</h2>
					
								<table>
									<tr>
										<td><a href="#"><img src="icon/2.png" style="height: 50px; width: 50px;"></a></td>
										<td><a href="#"><img src="icon/5.png" style="height: 50px; width: 50px;"></a></td>
									</tr>
								</table>
							</div>
						</div>
				</div>

			</div>
	
			</footer>		
	

	</table>
	
	</body>
</html>