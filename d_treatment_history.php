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

<!--counters--------------------------------------------------------------------------------------------------------------------------------------->
<div class="row">
	<div class="col-md-12">
	<form action="d_treatment_history.php" method="POST" style="padding-top:50px;padding-left:50px;padding-right:50px;">
	<input type="text" name="patient_ID" style="height:30px;width:150px;border-radius:10px;" placeholder="Patient ID"> &nbsp &nbsp &nbsp 
	<input type="submit" class="search" name="search" value="search" style="height:30px;width:100px;border-radius:10px;">
	
	<table style='margin-right: auto' width='100%' border='1px solid #000' class='table2'>
							<tr>
							    <th>No.</th>
                                <th>Treatment</th>
								<th>Doctor Notes</th>
								<th>Date and Time</th>
								<th>Doctor ID</th>
                                <th>Doctor F_name</th>
                                <th>Doctor L_name</th>
                            </tr>
  
        <?php
		
		if(isset($_POST['search'])){
		$patient_ID = $_POST['patient_ID'];
			
		$sql="SELECT * FROM treatment_history where patient_ID = '$patient_ID'; ";
        $res=$db->query($sql);
        if($res->num_rows>0)
        {
            echo "
                                    ";
                $i=0;
                while($row=$res->fetch_assoc())
                {
                    $i++;
                    echo "<tr>";
                    echo "<td>{$i}</td>";
					echo "<td>{$row["treatment"]}</td>";
					echo "<td>{$row["doctor_notes"]}</td>";
					echo "<td>{$row["date_time"]}</td>";
                    echo "<td>{$row["doctor_ID"]}</td>";
                    echo "<td> Dr. {$row["d_first_name"]}</td>";
                    echo "<td>{$row["d_last_name"]}</td>";
                    echo "</tr>";
                }

                //echo "</table>";
            }
            else
            {
                echo "<p class='error'>No Treatment History Found</p>";
            }
			}
			mysqli_close($db);
            ?>
			</table>
		</form>
	</div>
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
</body>
</html>