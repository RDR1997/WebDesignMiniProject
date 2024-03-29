<?php
session_start();
include "connection.php";
function countRecord($sql,$db)
{
    $res=$db->query($sql);
    return $res->num_rows;
}

if(!isset($_SESSION["ausername"]))
{
    header("location:Admin_login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashbord</title>
    <link rel="stylesheet" type="text/css" href="css/admindashbord.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

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

<!--profile line--------------------------------------------------------------------------------------------------------------------------------------->
<div class="split left" style="height:500px;">
    <div class="centered" >
        <img src="img/img_avatar2.png" alt="Avatar woman">
        <h2><?php echo $_SESSION['ausername']; ?></h2>
        <p style="cursor: pointer"> <a href="a_changepass.php">Change Password </a></p>
        <p>The art of medicine consists of amusing the patient while nature curses the disease.<br><br> - Voltaire</p>
    </div>
</div>

<!--counters--------------------------------------------------------------------------------------------------------------------------------------->
<table class="table3">
    <tr>
        <th>

            <?php

            mysqli_select_db($db,"own");

            $result = mysqli_query( $db,"SELECT * FROM doctor");
            $num_rows = mysqli_num_rows($result);

            echo "$num_rows\n";
            ?>
        </th>

        <th>
            <?php
            mysqli_select_db($db,"own");
            $result = mysqli_query( $db,"SELECT * FROM patient");
            $num_rows = mysqli_num_rows($result);
            echo "$num_rows\n";
            ?>
        </th>

        <th>
            <?php
            mysqli_select_db($db,"own");

            $result = mysqli_query( $db,"SELECT patient.first_name, patient.last_name, doctor.d_first_name, doctor.d_last_name, appointment.date, 
                    appointment.time, appointment.description FROM appointment INNER JOIN patient ON patient.patient_ID = 
                    appointment.patient_ID INNER JOIN doctor ON doctor.doctor_ID = appointment.doctor_ID ORDER BY appointment.date");
            $num_rows = mysqli_num_rows($result);

            echo "$num_rows\n";
            ?>

        </th>
    </tr>
    <tr>
        <td>Total Doctors</td>
        <td>Total Patients</td>
        <td>Appointments</td>
    </tr>

</table>

<!--Managment--------------------------------------------------------------------------------------------------------------------------------------->
<table class="table1">
    <tr>
        <th>Manage Doctors</th>
        <th>Manage Patient</th>
        <th>Manage Appointments</th>
    </tr>
    <tr>
        <td><a href="view_doctor.php">View Doctors</a></td>
        <td><a href="view_patient.php">View Patient</a></td>
        <td><a href="view_appointments.php">View Appointments</a></td>

    </tr>
    <tr>
        <td><a href="update_doctor.php">Update Doctors</a></td>
        <td><a href="add_patient.php">Add Patient</a></td>
        <td><a href="update_appointment.php">Update Appointments</a></td>

    </tr>
    <tr>
        <td><a href="add_Doctor.php">Add Doctors</a></td>
        <td><a href="delete_Patient.php">Remove Patient</a></td>
        <td><a href="delete_Appointment.php">Remove Appointments</a></td>
    </tr>
    <tr>
        <td><a href="delete_Doctor.php">Remove Doctors</a></td>


    </tr>
</table>


<br><br><br><br><br><br>
















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


</table>

</body>
</html>