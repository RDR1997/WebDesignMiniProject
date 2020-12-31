<!DOCTYPE html>
	<head>
		<title>Online Patient Management System</title>
		<link rel="stylesheet" href="patient_reg.css">
	</head>
	<body>
		<?php
		
		include 'connection.php';
		
		if (isset($_POST['submit'])){
		$fname = $_POST['first_name'];
		$lname = $_POST['last_name'];
		$NIC = $_POST['NIC'];
		$gender = $_POST['gender'];
		$speciality = $_POST['speciality'];
		$category = $_POST['category'];
		$password = $_POST['password'];
		$contact_no = $_POST['mobile_no'];
		$email = $_POST['email'];
		$admin_ID = $_POST['admin_ID'];
		
		$sql = "INSERT INTO doctor (first_name,last_name,NIC,gender,speciality,category,password,admin_ID) VALUES ( '$fname', '$lname', '$NIC', '$gender', '$speciality', '$category', '$password', '$admin_ID')";
		
		//mysql_select_db('opms');
		$retval = mysqli_query($conn,$sql);
		   
		if(! $retval ) {
			die('Could not enter data: ' . mysqli_error($conn));
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		   
		echo "Registered successfully\n";
		   
		mysqli_close($conn);
		}
		?>
		<div class ="container">
		<div class="nav">
			<ul>
				<li><a href = "logout.php">Log out</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Home</a></li>
			</ul>
		</div>
			<center>
			<form action="doctor_reg.php" method="POST">
				<h1>Doctor Registration</h1>
				
				<fieldset>
					<legend><h3>Admin Information</h3></legend>
					<label>Admin ID</label>
					<input type="text" name="admin_ID"><br><br><br>
				</fieldset>
				
				<fieldset>
					<legend><h3>Doctor Information</h3></legend>
					<label>Doctor ID</label>
					<input type="text" name="doctor_ID" readonly><br><br>
					
					<label>First name</label>
					<input type="text" name="first_name"><br><br>
					
					<label>Last name</label>
					<input type="text" name="last_name"><br><br>
					
					<label>National Identity Card Number</label>
					<input type="text" name="NIC"><br><br>
					
					<label>gender</label>
					<select name="gender">
						<option value="male">Male</option>
						<option value="Female">Female</option>
					</select><br><br>
					
					<label>Speciality</label>
					<input type="text" name="speciality"><br><br>
					
					<label>Category</label>
					<input type="text" name="category"><br><br>
					
					<label>Contact_no</label>
					<input type="text" name="mobile_no"><br>
					<input type="text" name="mobile_no"><br><br>
					
					<label>E-mail</label>
					<input type="text" name="email"><br>
					<input type="text" name="email"><br><br>
					
					<label>Password</label>
					<input type="text" name="password" placeholder="Enter a password for your account"><br><br>
					
					<label>Confirm Password</label>
					<input type="text" name="confirm_password" placeholder="Re-enter the password"><br><br>
				</fieldset>
				<br>
				<button type="submit" name="submit" class="submit">Register</button>
			</form>
			</center>
		</div>
	</body>
</html>