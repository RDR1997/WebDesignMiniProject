<?php
	include("session.php");
	include("connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Online Patient Management System</title>
		<link rel="stylesheet" href="css/a_view_doctor.css">
	</head>
	<body style="background:url('img/admin5.jpg') no-repeat;background-size: cover; background-size: 1400px 700px;">
		<div class="container">
		<div class="nav">
			<ul>
				<li><a href = "logout.php">Log out</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="index.php">Home</a></li>
			</ul>
		</div>
		<br>
		<div class="row">
			
			<div class="column left">
			<form action="a_delete_doctor.php" method="POST" id="delete_doctor">
				<table>
					<tr><td><button class="side_nav" name="a_add_doctor"><a href="admin.php">Add Doctor</a></button></td></tr>
					<tr><td><button class="side_nav" name="a_view_doctor"><a href="a_view_doctor.php">View Doctor Details</button></td></tr>
					<tr><td><button class="side_nav" name="a_delete_doctor">Delete Doctor</button></td><tr>
					<tr><td><button class="side_nav" name="a_view_patient"><a href="a_view_patient.php">View Patients Details</a></button></td></tr>
					<tr><td><button class="side_nav" name="a_delete_doctor"><a href="a_delete_patient.php">Delete Patient</a></button></td><tr>
					<tr><td><button class="side_nav" name="a_view_appointment"><a href="a_view_appointment.php">View Doctor Appointments</a></button></td></tr>
					<!--<tr><td><button class="side_nav" name="search_doctor"><a href="search_doctor.php">Search Doctors</a></button></td></tr>-->
				</table>
			</div>
			<div class="column right1">
			<table>
				<tr>
					<td><label>Doctor ID</label></td>
					<td><input type="search" name="doctor_ID" width="100px;"></td>
					<td><button type="submit" name="search" class="search"> Search </button>
					<td><button type="submit" name="delete" class="delete"> Delete </button>
				</tr>
			</table>
				<center><h3>Doctors Details</h3>
				<table width='100%' border='1px solid #000' class="doctor_details">
					<tr>
						<th>Doctor ID</th>
						<th>Name</th>
						<th>NIC</th>
						<th>Gender</th>
						<th>Address</th>
						<th>Speciality</th>
						<th>Category</th>
						<th>Username</th>
						<th>Password</th>
						<th>Contact Number</td>
						<th>Email</td>
						<th>Admin ID</th>
					</tr>
					<?php 
					if(isset($_POST['search'])){
					$doctor_ID = $_POST['doctor_ID'];
					
					$query = "SELECT * FROM doctor JOIN doctor_contact_no ON doctor_contact_no.doctor_ID = doctor.doctor_ID JOIN doctor_email ON doctor_email.doctor_ID = doctor.doctor_ID WHERE doctor.doctor_ID = '$doctor_ID';";
					
					$result = mysqli_query($conn,$query);
					
					$resultCheck = mysqli_num_rows($result);
					

					if($resultCheck > 0){
						while($row = mysqli_fetch_array($result)){
							echo"<tr><td name='doctor_ID'>" . $row['doctor_ID'] . "</td>" . "<td> Dr. ". $row['d_first_name'] . " " . $row['d_last_name'] . "</td>
							<td>" . $row['NIC'] . "</td>
							<td>" . $row['gender'] . "</td>
							<td>" . $row['address'] . "</td>
							<td>" . $row['speciality'] . "</td>
							<td>" . $row['category'] . "</td>
							<td>" . $row['username'] . "'></td>
							<td>" . $row['password'] . "</td>
							<td>" . $row['contact_no'] . "</td>
							<td>" . $row['email'] . "</td>
							<td>" . $row['admin_ID'] . "</td>
							</tr>";
						}
						echo "</table>";
					}
					
					//header("Refresh:0; url=d_view_patient.php");
					
					//mysqli_close($conn);
					}
					?>
					<?php
						if(isset($_POST['delete'])){
							$doctor_ID = $_POST['doctor_ID'];
							
							$query1 = "DELETE doctor , login FROM doctor INNER JOIN login ON login.username = doctor.username WHERE doctor.doctor_ID = '$doctor_ID';";
							if (mysqli_query($conn, $query1)) {
								echo "Record deleted successfully";
								} 
							else {
								echo "Error deleting record: " . mysqli_error($conn);
							}
						}
					?>
			</table>
			</div>
			</form>
		</div>
		<br><br>
		<footer>
			
			<div class="row">
				
				<div class="column5" style="padding-top:60px;">
					<img src="img/logo.jpg" width="90%" height="200px">
				</div>

				<div class="column6">
					<p style="font-size:25px;">Contact Us</p>
					<table>
						<tr style="line-height: 1em;">
							<td><i class="fa"><img src="icon/7.png" style="height: 30px; width: 30px;"></i></td>
							<td>My Doctor Hospitals(pvt)Ltd<br>Anuradhapura<br>Sri Lanka</td>
						</tr>
						<tr style="line-height: 1em;">
							<td><i class="fa"><img src="icon/6.png" style="height: 30px; width: 30px;"></i></td>
							<td>+94 71 563 0030</td>
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
							<p style="font-size:25px;">Navigate</p>
								<a href="index.html" style="font-size: 12px; line-height: 2em;">home</a><br>
								<a href="services.html" style="font-size: 12px; line-height: 2em;">Services</a><br>
								<a href="about_us.html" style="font-size: 12px; line-height: 2em;">About Us</a><br>
								<a href="contact.html" style="font-size: 12px; line-height: 2em;">Contact Us</a><br>
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="connect">
								<p style="font-size:25px;">Find Us:</p>
						
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
			
		</div>
		
		<script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
			}

		</script>
	</body>
</html>