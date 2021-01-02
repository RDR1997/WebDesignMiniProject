<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
	</head>
	<body style="background-color:#acf5fb">
		<!-- Header------------------------------------------------------------------------------------------------------------------------------------------------- -->

		
			<!-- navigation bar------------------------------------------------------------------------------------------------------------------------------------- -->
			<ul>
				
				<!--<li class="login_dropdown"><!--when mouse point put on Login aren on Nav.bar it will drop down more options
					<button class="dropbtn">Login</button>
					<div class="login_dropdown-content">
						<a href="#">Login as Admin</a>
						<a href="#">Login as Doctor</a>
						<a href="#">Login as Penitent</a>
					</div>
				</li>-->
				<img src="img/logo.png"alt="logo"style="width:55px;height:55px; padding-left: 10px;"align="left";>
				<li class="logo">My Doctor Hospitals
				
				</li>
				
				<li class="login_dropdown"><!--when mouse point put on Login aren on Nav.bar it will drop down more options-->
					<button class="dropbtn">Login</button>
					<div class="login_dropdown-content">
						<a href="Admin_login">Login as Admin</a>
						<a href="Doctor_login">Login as Doctor</a>
						<a href="Patient_login">Login as Patient</a>
					</div>
				</li>
				<li class="nav"><a href="contact.php">Contact</a></li>
				<li class="nav"><a href="about_us.html">About us</a></li>
				<li class="nav"><a href="services.php">Services</a></li>
				<li class="nav"><a href="index.html">Home</a></li>
			</ul>
			
			
			<!-- slideshow----------------------------------------------------------------------------------------------------------------------------------------------->
			<div class ="ss-container">
			
			<!--images-->
			<div class="mySlides">
				<img src="img/ss1.jpg"style="width:100%">
				<div class="text">Caption 01</div>
			</div>
			
			<div class="mySlides">
				<img src="img/ss2.jpg"style="width:100%">
				<div class="text">Caption 02</div>		
			</div>
			
			<div class="mySlides">
				<img src="img/ss3.jpg"style="width:100%">
				<div class="text">Caption 03</div>	
			</div>
			<br>
			
			<!--indicators-->
			<div style="text-align:center">
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>	

			<!--javascript------------------------------------------------------------------------------------------------------------------------------------------------>
			<script src="js/homejs.js"></script>	
				
			<table  align="center"width=100%;>
				<tr style="font-size:150px;">
					<td>100</td>
					<td>#1</td>
					<td>3</td>
					<td>200</td>
				</tr>
				<tr style="font-size:20px";>
					<td>WELL TRAINED DOCTORS</td>
					<td>MEDICAL CENTER IN ANUURADHAPURA</td>
					<td>BRANCHERS</td>
					<td>EMPLOYEES</td>
				</tr>
			
			</table>
			<br><br>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
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
