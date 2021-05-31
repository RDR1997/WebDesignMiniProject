<?php
session_start();
include "connection.php";
if(!isset($_SESSION["username"]))
{
    header("location:patient_login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Dashbord</title>
    <link rel="stylesheet" type="text/css" href="css/admindashbord.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>

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

<!--profile line--------------------------------------------------------------------------------------------------------------------------------------->
<div class="split left">
    <div class="centered" style="padding-top: 100px">
        <img src="img/img_avatar2.png" alt="Avatar woman">
        <?php
        echo '<h2>' . print_r($_SESSION["fname"], TRUE) . '</h2>';
        echo '<h2>' . print_r($_SESSION["lname"], TRUE) . '</h2>';
        ?>
        <h4 style="cursor: pointer; width: max-content;text-align: left">
        <p> <a href="book_appointment.php">Book Appointments </a></p>
        <p> <a href="p_view_appointments.php">View Appointments </a></p>
        <p> <a href="p_changepass.php">View treatment history </a></p>
        <p> <a href="p_view_doctor.php">Search doctors</a></p>
        <p> <a href="update_patient.php">Update patients details </a></p>
        <p> <a href="p_changepass.php">Change Password </a></p>
        </h4>
    </div>
</div>

<!--counters--------------------------------------------------------------------------------------------------------------------------------------->
<div >
    <?php


    echo "<center><h3>Welcome! </h3>";
    echo '<h3>' . print_r($_SESSION["username"], TRUE) . '</h3>';
    ?>
        <?php
        $sql="SELECT * FROM patient where username = '{$_SESSION["username"]}' ";
        $res=$db->query($sql);
        if($res->num_rows>0)
        {
            echo "<table style='margin-top: 0%' width='50%' border='1px solid #000' class='table2'> ";
            /*
							<tr>
                                <th>Patient ID</th>
                            </tr>
                            <tr>
                                <th>First name</th>
                            </tr>
                            <tr>
                                <th>Last name</th>
                            </tr>
                            <tr>
                                <th>Gender</th>
                            </tr>
                            <tr>
                                <th>DOB</th>
                            </tr>
                            <tr>
                                <th>Address</th>
                            </tr>
                            <tr>    
                                <th>Description</th>
                            </tr>
                            <tr>    
                                <th>Blood Group</th>
                            </tr>
                            <tr>    
                                <th>Username</th>
                            </tr>
                            <tr>    
                                <th>Password</th>
                            </tr>
                            <tr>
                                <th>Contact Number</td>
                            </tr>
                            <tr>
                                <th>Email</td>
                            </tr>
                                    ";
            */
            $i=0;
            while($row=$res->fetch_assoc())
            {
                $i++;
                echo "<tr>";
                echo "<th>Patient ID</th>";
                echo "<td>{$row["patient_ID"]}</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>First name</th>";
                echo "<td>{$row["first_name"]}</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Last name</th>";
                echo "<td>{$row["last_name"]}</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Gender</th>";
                echo "<td>{$row["gender"]}</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>DOB</th>";
                echo "<td>{$row["DOB"]}</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Address</th>";
                echo "<td>{$row["address"]}</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Description</th>";
                echo "<td>{$row["description"]}</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Blood Group</th>";
                echo "<td>{$row["blood_group"]}</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Username</th>";
                echo "<td>{$row["username"]}</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Password</th>";
                echo "<td>{$row["password"]}</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Contact Number</th>";
                echo "<td>{$row["contact_no"]}</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Email</th>";
                echo "<td>{$row["Email"]}</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
        else
        {
            echo "<p class='error'>No Patients Records Found</p>";
        }
        ?>
</div>
</form>
</div>

<!--Managment--------------------------------------------------------------------------------------------------------------------------------------->



<br><br><br><br><br><br>
















<!-- Footer------------------------------------------------------------------------------------------------------------------------------------------------- -->
<footer style="margin-top: -100px">

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