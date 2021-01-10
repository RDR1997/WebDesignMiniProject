<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<!--<script src="homejs.js"></script>      This code dosent run-->
	</head>
	<body style="background-color:#acf5fb">
		<!-- Header------------------------------------------------------------------------------------------------------------------------------------------------- -->
		<header>
			<div class="header">
				<img src="img/logo.jpg"alt="logo"style="width:150px;height:150;font-size:30px ">
			
				<a style="float:right;padding-right:800px;padding-top:30px;font-size:50px;">My Doctor Hospitals</a>
			</div>
		</header>
		
		
			<!-- navigation bar------------------------------------------------------------------------------------------------------------------------------------- -->
			<div class="navigationbar">
				<div class="login_dropdown"><!--when mouse point put on Login aren on Nav.bar it will drop down more options-->
					<button class="dropbtn">Login</button>
					<div class="login_dropdown-content">
						<a href="#">Login as Admin</a>
						<a href="#">Login as Doctor</a>
						<a href="#">Login as Penitent</a>
					</div>
				</div> 
				
				<a href="#about">About</a>
				<a href="contact.php">Contact</a>
				<a href="#services">Services</a>
				<a class="active" href="#home">Home</a><!--we use class named active for when that option became white when that option already selected-->
						
			</div>
			<br>
			
			
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
				
			<br><br><br><br><br><br><br><h3>any content</h3><br><br><br><br><br><br><br><h3>
			
			
			<!-- Footer------------------------------------------------------------------------------------------------------------------------------------------------- -->
			<Footer>
				<div class="footer">
					<h2>Footer here</h2>
				</div>
			</Footer>
	
	</body>
</html>
