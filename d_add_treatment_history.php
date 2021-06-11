<?php
session_start();
include "connection.php";
if(!isset($_SESSION["username"]))
{
    header("location:doctor_login.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Online Patient Management System</title>
		<link rel="stylesheet"  href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/table.css">
  
	</head>
	<body>
	<?php
		
		include 'connection.php';
		
		if (isset($_POST['submit'])){
		$doctor_ID = $_POST['doctor_ID'];
		$patient_ID = $_POST['patient_ID'];
		$treatment = $_POST['treatment'];
		$doctor_notes = $_POST['doctor_notes'];
		$username = $_POST["doctor_ID"];
		$d_first_name = $_POST["d_first_name"];
		$d_last_name = $_POST["d_last_name"];
		//$datetime = $_POST['datetime'];
		
		$sql = "INSERT INTO treatment_history (doctor_ID,patient_ID,treatment,doctor_notes,username,d_first_name,d_last_name) VALUES ( '$doctor_ID', '$patient_ID', '$treatment', '$doctor_notes' , '$username' , '$d_first_name' , '$d_last_name')";
		  
		//mysql_select_db('opms');
		$retval = mysqli_query($db,$sql);
		   
		if(! $retval ) {
			die('Could not enter data: ' . mysqli_error($db));
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		   
		echo "<p class='success'>Records added successfully.</p>";
		
		header('Location: d_add_treatment_history.php');
		exit;
		   
		mysqli_close($db);
		}
		?>
		
		<ul>
			<img src="img/logo.png"alt="logo"style="width:55px;height:55px; padding-left: 10px;"align="left";>
			<li class="logo">Rajarata Hospitals</li>

			<li class="nav"><a href="logout.php">Logout</a></li>
			<li class="nav"><a href="contact.php">Contact</a></li>
			<li class="nav"><a href="about.php">About us</a></li>
			<li class="nav"><a href="services.php">Services</a></li>
			<li class="nav"><a href="index.php">Home</a></li>
		</ul>
		<br>
		<div class="aa">
        <a href="d_dashbord.php" class="previous">&laquo; Previous</a>
    </div>
		<form action="d_Add_treatment_history.php" method="POST">
		<div class="row">
			<div class="column right1">
				<h3 style="padding-left:200px;">Add Treatment Descriptions</h3>
				<center>
				<table width='70%' border='1px solid #000' style="text-align:left;margin-top:50px;" class="table2">
					<tr>
						<th style="padding-left:20px;">Doctor_ID</th>
						<td><input type="text" name="doctor_ID" style="width:90%;height:30px;" value="<?php echo ($_SESSION["doctor_ID"]) ;?>"></td>
					</tr>
					<tr>
						<th style="padding-left:20px;">Doctor First Name</th>
						<td><input type="text" name="d_first_name" style="width:90%;height:30px;"></td>
					</tr>
					<tr>
						<th style="padding-left:20px;">Doctor Last Name</th>
						<td><input type="text" name="d_last_name" style="width:90%;height:30px;"></td>
					</tr>
					<tr>
						<th style="padding-left:20px;">Patient ID</th>
						<td><input type="text" name="patient_ID" style="width:90%;height:30px;"></td>
					</tr>
					<tr>
						<th style="padding-left:20px;">Treatment</th>
						<td><input type="text" name="treatment" style="width:90%;height:30px;"></td>
					</tr>
					<tr>
						<th style="padding-left:20px;">Doctor Notes</th>
						<td><textarea name="doctor_notes" style="width:90%;height:30px;"></textarea></td>
					</tr>
					<!--<tr>
						<th>Date Time</th>
						<td><input type="datetime-local" name="datetime"></td>
					</tr>-->
			</table></center><br>
			<button type="submit" name="submit" class="btn" style="height:40px; font-size:15px; background-color:#3498DB; border-radius:5px; color:#fff; padding:10px; border:1px solid #3498DB;margin-left:200px;">Add Treatment History</button>
			</div>
			</form>
		</div>
		<br><br><br><br><br><br><br><br>
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
								<a href="index.html" style="font-size: 12px; line-height: 2em;">home</a><br>
								<a href="services.html" style="font-size: 12px; line-height: 2em;">Services</a><br>
								<a href="about_us.html" style="font-size: 12px; line-height: 2em;">About Us</a><br>
								<a href="contact.html" style="font-size: 12px; line-height: 2em;">Contact Us</a><br>
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
	</body>
</html>