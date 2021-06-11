<?php
session_start();
include "connection.php";
if(!isset($_SESSION["ausername"]))
{
    header("location:Admin_login.php");
}?>
<!DOCTYPE html>
<html>
<head>
    <title>UPDATE APPOINTMENT</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/formm.css">
</head>
<body >

<!-- navigation bar------------------------------------------------------------------------------------------------------------------------------------- -->
<ul>
    <img src="img/logo.png"alt="logo"style="width:55px;height:55px; padding-left: 10px;"align="left";>
    <li class="logo">Rajarata Hospitals

    </li>

    <li class="nav"><a href="logout.php">Logout</a></li>
    <li class="nav"><a href="contact.php">Contact</a></li>
    <li class="nav"><a href="about.php">About us</a></li>
    <li class="nav"><a href="services.php">Services</a></li>
    <li class="nav"><a href="index.php">Home</a></li>
</ul>
<br>

<div class="formbox">
    <div class="aa">
        <a href="admindashbord.php" class="previous">&laquo; Previous</a>
    </div>
    <?php
    if(isset($_POST["submit"]))
    {
        $appointment_ID  = mysqli_real_escape_string($db,$_REQUEST['appointment_ID']);
        $date = mysqli_real_escape_string($db,$_REQUEST['date']);
        $time = mysqli_real_escape_string($db,$_REQUEST['time']);
        $doctor_ID = mysqli_real_escape_string($db,$_REQUEST['doctor_ID']);
        $patient_ID = mysqli_real_escape_string($db,$_REQUEST['patient_ID']);
        $description = mysqli_real_escape_string($db,$_REQUEST['description']);
// Attempt insert query execution
        $sql = "UPDATE appointment SET date = '$date', time = '$time', appointment.doctor_ID = '$doctor_ID', appointment.patient_ID = '$patient_ID', description = '$description' WHERE appointment.appointment_ID = '$appointment_ID'";
        if(mysqli_query($db,$sql)){
            echo "<p class='success'>Records added successfully</p>";
            header('Location: admindashbord.php');
            exit;
        } else{
            echo "<p class='error'>ERROR: Could not able to execute </p>";
        }
    }
    ?>
    <form action="update_appointment.php" method="post">
        <div class="topic">Update Details!</div>
        <br>
        <hr class="new1">
        <div class="details">
            <label>Appointment_ID:</label><br>
            <input type="text" id="appointment_ID" name="appointment_ID" size="59" required><br>
            <label ="date">Date:</label><br>
            <input type="date" id="date" name="date" size="59" required><br>
            <label ="time">Time:</label><br>
            <input type="time" id="time" name="time" size="59" required><br>
            <label ="doctor_ID ">Doctor ID :</label><br>
            <input type="text" id="doctor_ID " name="doctor_ID" size="59" required><br>
            <label ="patient_ID ">Patient ID :</label><br>
            <input type="text" id="patient_ID " name="patient_ID" size="59" required><br>
            <label ="description">Description:</label><br>
            <input type="text" id="description" name="description" size="59" required><br>
            <hr class="new1">
            <br>
            <div style="text-align:center" >
                <button type="submit" name="submit" id="submit" class="button" > submit </button>
                <button type="reset" name="reset" id="reset" class="button" > reset </button>

            </div>
        </div>
    </form>
</div>




<br>
<!-- Footer------------------------------------------------------------------------------------------------------------------------------------------------- -->
<footer>
		
			<div class="row">
			
				<div class="column5";>
					<h1 align="left";>Rajarata Hospitals(pvt)Ltd</h1>
					<img src="img/logo.png"alt="logo"style="width:150px;height:150px;"align="left";>
				</div>

				<div class="column6">
					<h2 align="left";>Contact Us</h2>
					<table>
						<tr style="line-height: 1em;">
							<td><i class="fa"><img src="icon/7.png" style="height: 30px; width: 30px;"></i></td>
							<td>Rajarata Hospitals(pvt)Ltd<br>Anuradhapura<br>Sri Lanka</td>
						</tr>
						<tr style="line-height: 1em;">
							<td><i class="fa"><img src="icon/6.png" style="height: 30px; width: 30px;"></i></td>
							<td>+94-55 5555555</td>
						</tr>
						<tr style="line-height: 1em;">
							<td><i class="fa"><img src="icon/4.png" style="height: 30px; width: 30px;"></i></td>
							<td><a href="#">www.rajaratahospitals.abc.lk</a></td>
						</tr>
						<tr style="line-height: 1em;">
							<td><i class="fa"><img src="icon/1.png" style="height: 30px; width: 30px;"></i></td>
							<td><a href="#">rajaratah@abc.lk</a></td>
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
                                <a href="index.php" style="font-size: 12px; line-height: 2em;">home</a><br>
                                <a href="services.php" style="font-size: 12px; line-height: 2em;">Services</a><br>
                                <a href="about.php" style="font-size: 12px; line-height: 2em;">About Us</a><br>
                                <a href="contact.php" style="font-size: 12px; line-height: 2em;">Contact Us</a><br>
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