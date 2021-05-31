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
    <title>Online Patient Management System</title>
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
        <form action="delete_Patient.php" method="POST">
            <div class="aa">
                <a href="admindashbord.php" class="previous">&laquo; Previous</a>
            </div>
            <table>
                <tr><td><button class="side_nav" name="a_add_doctor"><a href="add_Doctor.php">Add Doctor</a></button></td></tr>
                <tr><td><button class="side_nav" name="a_view_doctor"><a href="view_doctor.php">View Doctor Details</button></td></tr>
                <tr><td><button class="side_nav" name="a_delete_doctor"><a href="delete_Doctor.php">Delete Doctor</button></td><tr>
                <tr><td><button class="side_nav" name="a_view_patient"><a href="view_patient.php">View Patients Details</a></button></td></tr>
                <tr><td><button class="side_nav" name="a_delete_doctor">Delete Patient</a></button></td><tr>
                <tr><td><button class="side_nav" name="a_view_appointment"><a href="view_appointments.php">View Doctor Appointments</a></button></td></tr>
                <!--<tr><td><button class="side_nav" name="search_doctor"><a href="search_doctor.php">Search Doctors</a></button></td></tr>-->
            </table>
    </div>
    <div class="column right1">
        <table>
            <tr>
                <td><label>Patient ID</label></td>
                <td><input type="search" name="patient_ID" width="100px;"></td>
                <td><button type="submit" name="search" class="search"> Search </button>
                <td><button type="submit" name="delete" class="delete"> Delete </button>
            </tr>
        </table>
        <?php

        if (isset($_POST['search'])) {
            $patient_ID = $_POST['patient_ID'];
            $sql = "SELECT * FROM patient";
            $res = $db->query($sql);
            if ($res->num_rows > 0) {
                echo "<table width='100%' border='1px solid #000' class='table2'>
							<tr>
							    <th>No.</th>
                                <th>Patient ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Address</th>
                                <th>Description</th>
                                <th>Blood Group</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Contact Number</td>
                                <th>Email</td>
                            </tr>
                                    ";
                $i = 0;
                while ($row = $res->fetch_assoc()) {
                    $i++;
                    echo "<tr>";
                    echo "<td>{$i}</td>";
                    echo "<td>{$row["patient_ID"]}</td>";
                    echo "<td>{$row["first_name"]}</td>";
                    echo "<td>{$row["last_name"]}</td>";
                    echo "<td>{$row["gender"]}</td>";
                    echo "<td>{$row["DOB"]}</td>";
                    echo "<td>{$row["address"]}</td>";
                    echo "<td>{$row["description"]}</td>";
                    echo "<td>{$row["blood_group"]}</td>";
                    echo "<td>{$row["username"]}</td>";
                    echo "<td>{$row["password"]}</td>";
                    echo "<td>{$row["contact_no"]}</td>";
                    echo "<td>{$row["Email"]}</td>";
                    echo "</tr>";
                }

                echo "</table>";
            }
        }

        ?>
        <?php
        if(isset($_POST['delete'])){
            $patient_ID = $_POST['patient_ID'];

            $query1 = "DELETE FROM patient WHERE patient.patient_ID = '$patient_ID';";
            $query2 = "DELETE FROM appointment WHERE appointment.patient_ID = '$patient_ID';";
            if (mysqli_query($db, $query1) and mysqli_query($db, $query2)) {
                echo "Record deleted successfully";
            }
            else {
                echo "Error deleting record: " . mysqli_error($db);
            }
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