<!DOCTYPE html>
	<head>
		<title>Online Patient Management System</title>
		<link rel="stylesheet" href="patient_reg.css">
	</head>
	<body>
		<?php
		
		include 'connection.php';
		session_start();
		
		if (isset($_POST['submit'])){
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		
		$sql = "SELECT patient_ID FROM patient WHERE username = '$username' AND password='$password'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		#$active = $row['active'];
		$count = mysqli_num_rows($result);
		
		if($count == 1){
			#session_register("username");
			$_SESSION['login_user'] = $username;
			
			header("location:../opms/patient.php");
		}
		else{
			$error = "Incoreect username or password";
		}
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
			<form action="login.php" method="POST">
				
				<fieldset>
					<legend><h1>Log In</h1></legend>
					<label>Username</label>
					<input type="text" name="username" placeholder="Enter Username" required><br><br>
					
					<label>Password</label>
					<input type="password" name="password" placeholder="Enter password" required><br><br>
					
					<button type="submit" name="submit" class="submit">Login</button><br><br>
					
					<div class="register" style="font-size:20px;">Not registered as a patient? &nbsp<a href="patient_reg.php">Sign up</a>&nbsp here</div>
				</fieldset>
			</form>
			</center>
		</div>
	</body>
</html>