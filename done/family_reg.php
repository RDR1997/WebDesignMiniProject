<!DOCTYPE html>
	<head>
		<title>Online Patient Management System</title>
		<link rel="stylesheet" href="patient_reg.css">
	</head>
	<body>
		<?php
			include 'connection.php';
			
			if(isset($_POST['submit'])){
				$family_ID = $_POST['family_ID'];
				$family_name = $_POST['family_name'];
				$family_address = $_POST['family_address'];
				
				$sql="INSERT INTO family (family_ID,family_name,address) VALUES ('$family_ID','$family_name','$family_address')";
				
				if(!mysqli_query($conn,$sql)){
					die('could not enter data:'. mysqli_error($conn));
				}
				echo 'Entere data successfully';
			
			mysqli_close($conn);
			
			header('Location:patient_reg.php');
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
			<form action="family_reg.php" method="post">
				<h1>Patient Registration</h1>
				<fieldset>
					<legend><h3>Family Information</h3></legend>
					<label>Family ID </label>
					<input type="text" name="family_ID"><br><br><br>
					
					<label>Family name </label>
					<input type="text" name="family_name"><br><br><br>
					
					<label>Address </label>
					<input type="text" name="family_address"><br><br><br>
					
					<label>Contact no</label>
					<input type="text" name="family_contact_no"><br>
				</fieldset>
				
				<br>
				
				<button type="submit" name="submit" class="submit">Register</button>
			</form>
			</center>
		</div>
	</body>
</html>
