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
		$gender = $_POST['gender'];
		$DOB = $_POST['DOB'];
		$address = $_POST['address'];
		$family_ID = $_POST['family_ID'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$contact_no = $_POST['mobile_no'];
		$email = $_POST['email'];
		
		$sql = "INSERT INTO patient (first_name,last_name,gender,DOB,address,username,password,family_ID) VALUES ( '$fname', '$lname', '$gender', '$DOB', '$address','$username','$password', '$family_ID')";
		$sql1 = "INSERT INTO login (username,password,admin_ID) VALUES ( '$username', '$password','1')";
		  
		//mysql_select_db('opms');
		$retval = mysqli_query($conn,$sql);
		//$retval1 = mysqli_query($conn,$sql1); check this
		   
		if(! $retval ) {
			die('Could not enter data: ' . mysqli_error($conn));
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		/*elseif(! $retval1 ){
			die('Could not enter data to login: ' . mysqli_error($conn));
		} check */
		   
		echo "Entered data successfully\n";
		   
		mysqli_close($conn);
		}
		?>
		<div class ="container">
		<div class="nav">
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Home</a></li>
			</ul>
		</div>
			<center>
			<form action="patient_reg.php" method="POST">
				<h1>Patient Registration</h1>
				<div id="hideaway">
					<font color="red">*</font>Is your family already registered in the system? &nbsp &nbsp &nbsp
					<button type="submit" name="registered"><a href="javascript:;" onClick="document.getElementById('hideaway').style.display='none';" style="text-decoration:none;color:#000;"> Yes</a></button> &nbsp &nbsp &nbsp
					<button type="submit" name="not_registered"><a href="family_reg.php" style="text-decoration:none;color:#000;">No</a></button>
				</div>
				<fieldset>
					<legend><h3>Family Information</h3></legend>
					<label>Family ID </label>
					<input type="text" name="family_ID"><br><br><br>
					
					<label>Family name </label>
					<input type="text" name="family_name" readonly><br><br><br>
					
					<label>Address </label>
					<input type="text" name="family_address" readonly><br><br><br>
					
					<label>Contact no</label>
					<input type="text" name="family_contact_no" readonly><br>
				</fieldset>
				<fieldset>
					<legend><h3>Patient Information</h3></legend>
					<label>Patient ID</label>
					<input type="text" name="patient_ID" readonly><br><br><br>
					
					<label>First name</label>
					<input type="text" name="first_name"><br><br><br>
					
					<label>Last name</label>
					<input type="text" name="last_name"><br><br><br>
					
					<label>gender</label>
					<select name="gender">
						<option value="male">Male</option>
						<option value="Female">Female</option>
					</select><br><br>
					
					<label>Date of Birth</label>
					<input type="date" name="DOB">
					<label>Age</label>
					<input type="text" name="age" readonly><br><br>
					
					<label>Address</label>
					<input type="text" name="address"><br><br>
					
					<label>Contact_no</label>
					<input type="text" name="mobile_no"><br>
					<input type="text" name="mobile_no"><br><br>
					
					<label>E-mail</label>
					<input type="text" name="email"><br>
					<input type="text" name="email"><br><br>
					
					<label>Username</label>
					<input type="text" name="username"><br><br>
					
					<label>Password</label>
					<input type="text" name="password" placeholder="Enter a password for your account"><br><br>
					
					<label>Confirm Password</label>
					<input type="text" name="confirm_password" placeholder="Re-enter the password"><br><br>
				</fieldset>
				<br>
				<button type="submit" name="submit" class="submit">Sign up</button>
			</form>
			</center>
		</div>
	</body>
</html>