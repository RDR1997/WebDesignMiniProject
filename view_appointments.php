<?php
session_start();
include "connection.php";
if(!isset($_SESSION["ausername"]))
{
    header("location:Admin_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Doctor Management System</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body >
<!-- navigation bar------------------------------------------------------------------------------------------------------------------------------------- -->
<ul>
    <img src="img/logo.png"alt="logo"style="width:55px;height:55px; padding-left: 10px;"align="left";>
    <li class="logo">My Doctor Hospitals

    </li>

    <li class="nav"><a href="logout.php">Logout</a></li>
    <li class="nav"><a href="contact.php">Contact</a></li>
    <li class="nav"><a href="about.php">About us</a></li>
    <li class="nav"><a href="services.php">Services</a></li>
    <li class="nav"><a href="index.php">Home</a></li>
</ul>
<br>
<!--
		<div class="container">
		<div class="nav">
			<ul>
				<li><a href = "logout.php">Log out</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="index.php">Home</a></li>
			</ul>
		</div>
-->
<br>
<div class="row">

    <div class="column left">
        <form action="view_appointments.php" method="POST">
            <div class="aa">
                <a href="admindashbord.php" class="previous">&laquo; Previous</a>
            </div>
            
    </div>
    <div class="column right1">
        <center><h3>Patients Enrolled in the System</h3>
            <?php
            $sql="SELECT appointment.appointment_ID , patient.first_name, patient.last_name, doctor.d_first_name, doctor.d_last_name, appointment.date, 
                    appointment.time, appointment.description FROM appointment INNER JOIN patient ON patient.patient_ID = 
                    appointment.patient_ID INNER JOIN doctor ON doctor.doctor_ID = appointment.doctor_ID ORDER BY appointment.date";
            $res=$db->query($sql);
            if($res->num_rows>0)
            {
                echo "<table width='100%' border='1px solid #000' class='table2'>
							<tr>
							    <th>No.</th>
							    <th>Appointment ID</th>
                                <th>Patient F_name</th>
                                <th>Patient L_name</th>
                                <th>DoC F_name</th>
                                <th>DoC L_name</th>
                                <th>DATE</th>
                                <th>TIME</th>
                                <th>Description</th>
                            </tr>
                                    ";
                $i=0;
                while($row=$res->fetch_assoc())
                {
                    $i++;
                    echo "<tr>";
                    echo "<td>{$i}</td>";
                    echo "<td>{$row["appointment_ID"]}</td>";
                    echo "<td>{$row["first_name"]}</td>";
                    echo "<td>{$row["last_name"]}</td>";
                    echo "<td>{$row["d_first_name"]}</td>";
                    echo "<td>{$row["d_last_name"]}</td>";
                    echo "<td>{$row["date"]}</td>";
                    echo "<td>{$row["time"]}</td>";
                    echo "<td>{$row["description"]}</td>";
                    echo "</tr>";
                }

                echo "</table>";
            }
            else
            {
                echo "<p class='error'>No Appointments Records Found</p>";
            }
            ?>
    </div>
    </form>
</div>
<br><br><br><br><br>
<footer>

    <div class="row">

        <div class="column5" style="padding-top:60px;">
            <img src="img/logo.jpg" width="90%" height="200px">
        </div>

        <div class="column6">
            <p style="font-size:25px;">Contact Us</p>
            <table>
                <tr style="line-height: 1em;">
                    <td><i class="fa"><img src="icon/7.png" style="height: 30px; width: 30px;"></i></td>
                    <td>My Doctor Hospitals(pvt)Ltd<br>Anuradhapura<br>Sri Lanka</td>
                </tr>
                <tr style="line-height: 1em;">
                    <td><i class="fa"><img src="icon/6.png" style="height: 30px; width: 30px;"></i></td>
                    <td>+94 71 563 0030</td>
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
                    <p style="font-size:25px;">Navigate</p>
                    <a href="index.php" style="font-size: 12px; line-height: 2em;">home</a><br>
                    <a href="services.php" style="font-size: 12px; line-height: 2em;">Services</a><br>
                    <a href="about.php" style="font-size: 12px; line-height: 2em;">About Us</a><br>
                    <a href="contact.php" style="font-size: 12px; line-height: 2em;">Contact Us</a><br>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="connect">
                    <p style="font-size:25px;">Find Us:</p>

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

</div>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>
</body>
</html>