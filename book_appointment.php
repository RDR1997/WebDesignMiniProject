<?php
	include("session.php");
	include("connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Online Patient Management System</title>
		<link rel="stylesheet" href="css/book_appointment.css">
	</head>
	<body style="background:url('img/patient1.jpg') no-repeat;background-size: cover; background-size: 1400px 700px;">
		<?php
		
		if (isset($_POST['submit'])){
			$patient_ID = $_POST['patient_ID'];
			$d_category = $_POST['d_category'];
			$doctor_name = $_POST['doctor_name'];
			$book_appointment_date = $_POST['book_appointment_date'];
			$book_appointment_time = $_POST['book_appointment_time'];
			$doctor_ID = $_POST['doctor_ID'];
			$description = $_POST['description'];
		
		$sql = "INSERT INTO appointment (date,time,doctor_ID,patient_ID,description) VALUES ('$book_appointment_date', '$book_appointment_time', '$doctor_ID', '$patient_ID', '$description')";
		  
		//mysql_select_db('opms');
		$retval = mysqli_query($conn,$sql);
		   
		if(! $retval ) {
			die('Could not enter data: ' . mysqli_error($conn));
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		$sql_appointment = "SELECT * FROM appointment WHERE appointment_ID =(SELECT max(appointment_ID) FROM appointment);";
		$result_appointment = mysqli_query($conn,$sql_appointment);
		$row = mysqli_fetch_assoc($result_appointment);
		echo "Booking Successfull. Your Appointement ID is " . $row['appointment_ID'] . " .\n Please retain this appointment_ID in case you need to submit at the hospital"; 
		   
		//mysqli_close($conn);
		}
		?>
		
		<div class="container">
		<div class="nav">
			<ul>
				<li><a href = "logout.php">Log out</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="index.php">Home</a></li>
			</ul>
		</div>
		<br>
		<div class="row">
			
			<div class="column left">
			<form action="book_appointment.php" method="POST" name="book" onsubmit="return validateForm()">
				<table>
					<tr><td><button class="side_nav" name="my_profile"><a href="patient1.php">My Profile</a></button></td></tr>
					<tr><td><button class="side_nav" name="search_doctor"><a href="search_doctor.php">Search Doctors</a></button></td></tr>
					<tr><td><button class="side_nav" name="book_appointment">Book Appointments</button></td></tr>
					<tr><td><button class="side_nav" name="treatment_history"><a href="treatment_history.php">Treatment History</a></button></td></tr>
					<tr><td><button class="side_nav" name="view_bookings"><a href="view_bookings.php">View Bookings</a></button></td></tr>
				</table>
			</div>
			<div class="column center">
			<center>
				<h3>Book an Appointment</h3>
				<table border="1px solid #000" class="f_info">
					<tr>
						<td>Appointment ID</td>
						<td colspan="2"><input type="text" name="appointment_ID" placeholder="Your appointment ID will be sent to you via email" readonly></td>
					</tr>
					<tr>
						<td>Doctor Category</td>
						<td colspan="2"><select type="text" name="d_category">
							<option value="general_physician">General Physicians</option>
							<option value="pediatrician">Pediatrician</option>
							<option value="psychiatrist">Psychiatrist</option>
							<option value="ob/gyns">Obstetricians and Gynecologists</option>
							<option value="neurologist">Neurologist</option>
							<option value="cardiologist"> Cardiologist </option>
							<option value="allergist/immunologist">Allergist and Immunologist</option>
							<option value="urologist">Urologist</option>
							<option value="ophthalmologist">Ophthalmologist</option>
							<option value="dermatologist">dermatologist</option>
						</select>
					</tr>
					
					<tr>
						<td>Doctor</td>
						<td><select type="text" name="doctor_name" required>
						<option selected="" disabled="" value = "Select_your_doctor">Select your doctor</option>
						<?php 
							$doctor_names = "SELECT * FROM doctor;";
							$result = mysqli_query($conn,$doctor_names);
					
							$resultCheck = mysqli_num_rows($result);
							if($resultCheck > 0){
								while($row = mysqli_fetch_array($result)){
									echo "<option value = 'Dr. " . $row['d_first_name'] . $row['d_last_name'] . "'> Dr. " . $row['d_first_name'] . " " . $row['d_last_name'] . "</option>";
								}
							}
							mysqli_close($conn);
						?>
							<!--<option value = "Select_your_doctor">Select your doctor</option>
							<option value="Dr.T.S.Vitharana">Dr. Sandamali Vithrana<option>
							<option value="Dr.A">Dr. A<option>
							<option value="Dr. B">Dr. B<option>
							<option value="Dr. C">Dr. C<option>
							<option value="Dr.D">Dr. D<option>-->
						</td>
						<td>
							<input type="text" name="doctor_ID" placeholder="Please use the Search doctor tab to find the Doctor ID" id="doctor_ID">
						</td>
					</tr>
					<tr>
						<td>Date</td>
						<td colspan="2"><input type="date" name="book_appointment_date" required></td>
					</tr>
					<tr>
						<td>Time</td>
						<td colspan="2"><input type="time" name="book_appointment_time" required></td>
					</tr>
					<tr>
						<td>Description</td>
						<td colspan="2"><textarea type="text" name="description" placeholder="You can enter a short description of your desease and symptoms etc..."></textarea></td>
					</tr>
					<tr>
						<td colspan="3"><button type="submit" class="submit" name="submit">Make an Appointment</button></td>
					</tr>
				</table>
				</center>
			</div>
			<div class="column right">
				<br><br><br>
				<table border="1px solid #000" class="f_info">
					<tr>
						<td>Patient ID</td>
						<td><input type="text" name="patient_ID" required></td>
					</tr>
				</table>
			</div>
			</form>
		</div>
		<br>
		<footer>
			
			<div class="row">
				
				<div class="column5">
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
			function validateForm() {
			  var x = document.forms["book"]["doctor_ID"].value;
			  if (x == "") {
				alert("Please use the search doctor tab to find the doctor_ID");
				return false;
			  }
			}
		</script>
		<script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
			}

		</script>
	</body>
</html>