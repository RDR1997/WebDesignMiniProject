<!DOCTYPE html>
	<head>
		<title>Online Patient Management System</title>
		<link rel="stylesheet" href="css/patient_reg.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/formm.css">
	</head>
	<body>
		<div class ="container">
			<!-- navigation bar------------------------------------------------------------------------------------------------------------------------------------- -->
			<ul>
				<img src="img/logo.png"alt="logo"style="width:55px;height:55px; padding-left: 10px;"align="left";>
				<li class="logo">My Doctor Hospitals
				
				</li>
				
				<li class="login_dropdown"><!--when mouse point put on Login aren on Nav.bar it will drop down more options-->
					<button class="dropbtn">Login</button>
					<div class="login_dropdown-content">
						<a href="Admin_login.php">Login as Admin</a>
						<a href="Doctor_login.php">Login as Doctor</a>
						<a href="Patient_login.php">Login as Patient</a>
					</div>
				</li>
				<li class="nav"><a href="contact.php">Contact</a></li>
				<li class="nav"><a href="about.php">About us</a></li>
				<li class="nav"><a href="services.php">Services</a></li>
				<li class="nav"><a href="index.php">Home</a></li>
			</ul>
			<center>
				<?php
					if(isset($_POST["submit"]))
					{
						$first_name = mysqli_real_escape_string($db,$_REQUEST['first_name']);
						$last_name = mysqli_real_escape_string($db,$_REQUEST['last_name']);
						$gender = mysqli_real_escape_string($db,$_REQUEST['gender']);
						$DOB = mysqli_real_escape_string($db,$_REQUEST['DOB']);
						$address = mysqli_real_escape_string($db,$_REQUEST['address']);
						$description = mysqli_real_escape_string($db,$_REQUEST['description']);
						$blood_group = mysqli_real_escape_string($db,$_REQUEST['blood_group']);
						$username = mysqli_real_escape_string($db,$_REQUEST['username']);
						$password = mysqli_real_escape_string($db,$_REQUEST['password']);
						$contact_no = mysqli_real_escape_string($db,$_REQUEST['contact_no']);
						$Email = mysqli_real_escape_string($db,$_REQUEST['Email']);
				// Attempt insert query execution
						$sql = "INSERT INTO patient (first_name, last_name,gender, DOB, address, description, blood_group, username, password, contact_no, Email) VALUES ('$first_name', '$last_name', '$gender', '$DOB', '$address', '$description', '$blood_group', '$username', '$password', '$contact_no', '$Email')";
						if(mysqli_query($db,$sql)){
							echo "<p class='success'>Records added successfully</p>";
							/*header('Location: admindashbord.php');*/
							exit;
						} else{
							echo "<p class='error'>ERROR: Could not able to execute </p>";
						}
						/*$stmt = $this->con->prepare("INSERT INTO doctor(d_first_name,d_last_name,NIC,gender,address,speciality,category,username,password,contact_no,Email)
													VALUES (?,?,?,?,?,?,?,?,?,?,?)");
						$stmt->bind_param("sssssssssss", $fname, $lname, $NIC, $quantity, $gender, $address, $speciality, $category, $username, $password, $contact_no, $email);
						$stmt->execute();*/
						/*$sql="insert into doctor(d_first_name,d_last_name,NIC,gender,address,speciality,category,username,password,contact_no,Email) values ('{$_POST["fname"]}','{$_POST["lname"]}','{$_POST["NIC"]}','{$_POST["gender"]}','{$_POST["gender"]}','{$_POST["address"]}','{$_POST["speciality"]}','{$_POST["category"]}','{$_POST["username"]}','{$_POST["password"]}','{$_POST["contact_no"]}','{$_POST["email"]}')";
						$res=$db->query($sql);
						print_r($res);
						echo "<p class='success'>Doctor Registration Success</p>";*/
					}
					?>
					<form action="add_patient.php" method="post"  >
						<div class="topic">Create an Account</div>
						<br>
						<hr class="new1">
						<div class="details">
							<label ="first_name">First name:</label><br>
							<input type="text" id="first_name" name="first_name" size="59" required><br>
							<label ="last_name">Last name:</label><br>
							<input type="text" id="last_name" name="last_name" size="59" required><br>
							<table width="50%">
								<tr>
									<td style="padding-left:0px;">Gender:</td>
									<td style="text-align:right;padding-top:5px;"><input style="width: auto" type="radio" id="male" name="gender" value="male" required></td>
									<td style="padding-left:0px;"><label for="male">Male</label></td>
									<td style="text-align:right;padding-top:5px;"><input style="width: auto" type="radio" id="female" name="gender" value="female"></td>
									<td style="padding-left:0px;"><label for="female">Female</label></td>
								</tr>
							</table>
							</p>
							<label ="DOB">DOB.:</label><br>
							<input type="date" id="DOB" name="DOB" size="59" required>

							<hr class="new1"">
							<label ="address">Address:</label><br>
							<input type="text" id="address" name="address" size="59" required><br>
							<label ="speciality">Description:</label><br>
							<input type="text" id="speciality" name="description" size="59" required><br>
							<label ="category">Blood_group:</label><br>
							<select style="    font-size: 20px; display: list-item;" name="blood_group">
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
							</select><br>
							<label ="username">Username:</label><br>
							<input type="text" id="username" name="username" size="59" required><br>
							<label ="password">Password:</label><br>
							<input type="password" id="password" name="password" size="59" required><br>

							<label ="contact_no">Phone number:</label><br>
							<input type="text" id="contact_no" name="contact_no" size="59" required><br>
							<label ="email">E-mail:</label><br>
							<input type="email" id="Email" name="Email" size="59" required><br>



							<hr class="new1">
							<br>
							<div style="text-align:center" >
								<button type="submit" name="submit" id="submit" class="button" > submit </button>
								<button type="reset" name="reset" id="reset" class="button" > reset </button>
								
							</div>
						</div>
					</form>
			</center>
		</div>
		<script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
			}

		</script>
	</body>
</html>