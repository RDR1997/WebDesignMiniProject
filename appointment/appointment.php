<!DOCTYPE html>
<html>
	<head>
		<title>Appointment</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/appointment.css">
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

            <div class="app-w3">
				<h4>Book Your Appointment Now</h4>
				<div class="app-sub-w3">
					<form action="/appointment/func.php" method="post">
						<input type="text" name="patient_name" placeholder="Patient Name" required=""/>
						<div class="ag-w3">
                  <a >Departments </a>
									<select  class="form-control" name="departments" aria-haspopup="true"  aria-expanded="false">
									<option></option>
									<option>Cardiology</option>
									<option>Ophthalmology</option>
									<option>Neurology</option>
									<option>Psychology</option>
									<option>Dermatology</option>
								</select>
						</div>
						<input  id="datepicker" name="date" type="date" value="mm/dd/yyyy" required="" class = "ag-w3">
						<input type="time" id="timepicker" name="time" class="ag-w3" value="Hrs:Min">
                        <input type="submit" name="appointment" value="Make An Appointment">
					</form>
				</div>
			</div>

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