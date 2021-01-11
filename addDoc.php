<!DOCTYPE html>
<html>
	<head>
		<title>ADD Doctor</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/form.css">
	</head>
	<body >
	
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
	<br>
	
	<div class="formbox">
	<form action="admin/addDocConnect.php" method="post">
		<div class="topic">Add new Doctor</div>
		<br>
		<hr class="new1">
		<div class="details">
			<label ="fname">Full name:</label><br>
			<input type="text" id="fname" name="fname" size="59" required><br>
			<label ="nic">NIC No.:</label><br>
			<input type="text" id="nic" name="nic" size="59" required>
			<p>Gender:-----<label ="male">Male</label>
			  <input type="radio" id="male" name="gender" value="male" required>
			<label ="female">Female</label>
			  <input type="radio" id="female" name="gender" value="female" required></p>
		
			<hr class="new1"">
			<label ="address">Address:</label><br>
			<input type="text" id="address" name="address" size="59" required><br>
			<label ="tel">Phone number:</label><br>
			<input type="text" id="tel" name="tel" size="59" required><br>
			<label ="email">E-mail:</label><br>
			<input type="text" id="email" name="email" size="59" required><br>		
			<br>
			<hr class="new1">
			<label ="DocId">Doctor Id:</label><br>
			<input type="text" id="DocId" name="DocId" size="59" required><br>	
			<br>
			<label ="category">Category:</label>
			<input type="text" id="category" name="category" size="59" required>
			<!--	<select style="font-size:18px" name="category " id="category">
					<option value="Pediatricians">Pediatricians</option>
					<option value="Allergists">Allergists</option>
					<option value="Dermatologists">Dermatologists</option>
					<option value="Ophthalmologists">Ophthalmologists</option>
					<option value="Obstetrician">Obstetrician</option>
					<option value="Cardiologists">Cardiologists</option>
					<option value="Endocrinologists">Endocrinologists</option>
					<option value="other">other</option>
				</select>-->
			<br><br>	
			<hr class="new1">
			<br><br>
			<div style="text-align:center"> 
			<input type="submit">
			<input type="reset">
			
			</div>
		</div>
	</form>	
	</div>
	
	
	
	
	<br>
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
	</body>
</html>