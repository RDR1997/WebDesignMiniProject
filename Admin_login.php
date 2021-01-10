<html>
<head>
	<title>Admin Log In</title>
		<link rel="Stylesheet" type="text/css" href="css/style1.css">
		<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
			<div class="header">
				<img src="img/logo.jpg"alt="logo"style="width:150px;height:150;font-size:30px ">
			<a style="float:right;padding-right:450px;padding-top:30px;font-size:50px;">Rajarata Medical Center</a>
			</div>
		</header>
		<div class="loginbox">
			<img src="img/admin logo1.jpg" class="avatar">
			<h1>Admin Login</h1>
			<form>
					<p>User Name</p>
					<input type="text" name="AdminName" placeholder="Enter User Name">
					<p>Password</p>
					<input type="password" name="Password" placeholder="Enter Password">
					<input type="submit" name="" value="Login" onclick="check(this.form)">
				</form>
			<script>
					function check(form){
						if(form.AdminName.value =="admin" && form.Password.value==1234){
							window.open("admindashbord.html");
						}
						else {
							alert("User name or Password incorrect");						}
					}
				</script>
			</div>
			<br>
			<br>
			<br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


			<footer>

				<div class="row">

					<div class="column5">
						<h1>My Doctor Hospitals(pvt)Ltd</h1>
					</div>

					<div class="column6">
						<h2>Contact Us</h2>
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
