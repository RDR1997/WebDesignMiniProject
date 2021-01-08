<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
	</head>
	<body style="background-color:#acf5fb">
		
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
			</div>
			<!--javascript------------------------------------>
			<script src="js/homejs.js"></script>	
			<!-- slideshow end--------------------------------------------------------------------------------------------------------------------------------------------->	
			
			<!-- table1---------------------------------------------------------------------------------------------------------------------------------------------------->
			<table  align="center"width="100%";>
				<tr style="font-size:150px;text-align:center;">
					<td>10</td>
					<td>#1</td>
					<td>3</td>
					<td>200</td>
				</tr>
				<tr style="font-size:20px;text-align:center;">
					<td>WELL TRAINED DOCTORS</td>
					<td>MEDICAL CENTER IN ANUURADHAPURA</td>
					<td>BRANCHERS</td>
					<td>EMPLOYEES</td>
				</tr>
			
			</table>
			<!-- table1 end------------------------------------------------------------------------------------------------------------------------------------------------->
			<br><br>
			
			<!--timetable------------------------------------------------------------------------------------------------------------------------------------------------ -->	
					
					<table style="height:500px;width:100%;font-size:20px;background-color:rgba(255, 255, 255, .4);text-align:center";>
						 <caption><h2>Our Doctor's time table</h2></caption>	
							<tr style="background-color:rgba(255, 255, 255, .4);height:50px">
								<th>Doctor</th>
								<th>Monday</th> 
								<th>Tuesday</th>
								<th>Wednesday</th>
								<th>Thursday</th> 
								<th>Friday</th>		
								<th>Saturday</th> 
								<th>Sunday</th>								
							</tr>
							<tr>
								<td>Dr A</td>
								<td>8am - 4pm</td>
								<td>11am - 7pm</td>
								<td>11am - 7pm</td>
								<td>8am - 4pm</td>
								<td>11am - 7pm</td>
								<td>8am - 3pm</td>
								<td>8am - 12pm</td>
							</tr>
							<tr>
								<td>Dr B</td>
								<td>11am - 6pm</td>
								<td>7am - 3pm</td>
								<td>-</td>
								<td>8am - 5pm</td>
								<td>12am - 5pm</td>
								<td>12pm - 6pm</td>
								<td>8am - 12pm</td>
							</tr>
							<tr>
								<td>Dr C</td>
								<td>8am - 5pm</td>
								<td>8am - 5pm</td>
								<td>-</td>
								<td>9am - 6pm</td>
								<td>-</td>
								<td>8am - 3pm</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Dr D</td>
								<td>-</td>
								<td>-</td>
								<td>11am - 7pm</td>
								<td>8am - 4pm</td>
								<td>11am - 7pm</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>		
								<td>Dr E</td>
								<td>-</td>
								<td>8am - 7pm</td>
								<td>10am - 3pm</td>
								<td>8am - 4pm</td>
								<td>-</td>
								<td>12pm - 6pm</td>
								<td>12pm - 6pm</td>	
							</tr>	
								<td>Dr F</td>
								<td>8am - 4pm</td>
								<td>11am - 7pm</td>
								<td>11am - 7pm</td>
								<td>8am - 4pm</td>
								<td>11am - 7pm</td>
								<td>8am - 3pm</td>
								<td>8am - 12pm</td>
							</tr>
							<tr>
								<td>Dr G</td>
								<td>11am - 6pm</td>
								<td>7am - 3pm</td>
								<td>-</td>
								<td>8am - 5pm</td>
								<td>12am - 5pm</td>
								<td>12pm - 6pm</td>
								<td>8am - 12pm</td>
							</tr>
							<tr>
								<td>Dr H</td>
								<td>8am - 5pm</td>
								<td>8am - 5pm</td>
								<td>-</td>
								<td>9am - 6pm</td>
								<td>-</td>
								<td>8am - 3pm</td>
								<td>-</td>
							</tr>
							<tr>
								<td>Dr I</td>
								<td>-</td>
								<td>-</td>
								<td>11am - 7pm</td>
								<td>8am - 4pm</td>
								<td>11am - 7pm</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>		
								<td>Dr J</td>
								<td>-</td>
								<td>8am - 7pm</td>
								<td>10am - 3pm</td>
								<td>8am - 4pm</td>
								<td>-</td>
								<td>12pm - 6pm</td>
								<td>12pm - 6pm</td>	
							</tr>								
						</table>
			<!--timetable end--------------------------------------------------------------------------------------------------------------------------------------------- -->			
			
			<br>
			
			<!-- table2---------------------------------------------------------------------------------------------------------------------------------------------------->
			<table  align="center"width="100%";>
				<tr style="font-size:150px;text-align:center;">
					<td>100</td>
					<td>50</td>
					<td>24h</td>
					
				</tr>
				<tr style="font-size:20px;text-align:center;">
					<td>COCHLEAR IMPLANTS</td>
					<td>IVF BABIES</td>
					<td>ACTIVE AMBULANCE SERVICE</td>
					
				</tr>
			
			</table>
			<!-- table2 end-------------------------------------------------------------------------------------------------------------------------------------------------->			
			
			<br>
			
			<!--Doc's quoet------------------------------------------------------------------------------------------------------------------------------------------------ -->	
			<div class="docsays">
				<img src="img/index2.png"style="width:100%;height:100%">

				<div class="textplace"style="text-align:left;">
					<p style="font-size:45px;line-height:1.2;">Every Mind Matters<br>
					<font style="font-size:120px">DO NOT</font>
					<font style="font-size:40px"><br>stay glued to the news<br></font></p>
					<p style="font-size:20px;">Try to limit the time you spend watching, reading
												or listening<br> to coverage of the outbreak, including on social
												 media, and <br>think about turning off breaking news alerts on your phone.</p>
					
				</div>
			</div>
			<!--Doc's quoet end----------------------------------------------------------------------------------------------------------------------------------------------->
			
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
