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
    <title>ADD DOCTOR</title>
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
    <?php
    if(isset($_POST["submit"]))
    {
        $first_name = mysqli_real_escape_string($db,$_REQUEST['first_name']);
        $last_name = mysqli_real_escape_string($db,$_REQUEST['last_name']);
        $gender = mysqli_real_escape_string($db,$_REQUEST['gender']);
        $DOB = mysqli_real_escape_string($db,$_REQUEST['DOB']);
        $address = mysqli_real_escape_string($db,$_REQUEST['address']);
        $description = mysqli_real_escape_string($db,$_REQUEST['description']);
        $blood_group = mysqli_real_escape_string($db,$_REQUEST['blood_group']);
        $username = mysqli_real_escape_string($db,$_REQUEST['username']);
        $password = mysqli_real_escape_string($db,$_REQUEST['password']);
        $contact_no = mysqli_real_escape_string($db,$_REQUEST['contact_no']);
        $Email = mysqli_real_escape_string($db,$_REQUEST['Email']);
// Attempt insert query execution
        $sql = "INSERT INTO patient (first_name, last_name,gender, DOB, address, description, blood_group, username, password, contact_no, Email) VALUES ('$first_name', '$last_name', '$gender', '$DOB', '$address', '$description', '$blood_group', '$username', '$password', '$contact_no', '$Email')";
        if(mysqli_query($db,$sql)){
            echo "<p class='success'>Records added successfully</p>";
            /*header('Location: admindashbord.php');*/
            exit;
        } else{
            echo "<p class='error'>ERROR: Could not able to execute </p>";
        }
        /*$stmt = $this->con->prepare("INSERT INTO doctor(d_first_name,d_last_name,NIC,gender,address,speciality,category,username,password,contact_no,Email)
                                    VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssssss", $fname, $lname, $NIC, $quantity, $gender, $address, $speciality, $category, $username, $password, $contact_no, $email);
        $stmt->execute();*/
        /*$sql="insert into doctor(d_first_name,d_last_name,NIC,gender,address,speciality,category,username,password,contact_no,Email) values ('{$_POST["fname"]}','{$_POST["lname"]}','{$_POST["NIC"]}','{$_POST["gender"]}','{$_POST["gender"]}','{$_POST["address"]}','{$_POST["speciality"]}','{$_POST["category"]}','{$_POST["username"]}','{$_POST["password"]}','{$_POST["contact_no"]}','{$_POST["email"]}')";
        $res=$db->query($sql);
        print_r($res);
        echo "<p class='success'>Doctor Registration Success</p>";*/
    }
    ?>
    <form action="add_patient.php" method="post"  >
        <div class="aa">
            <a href="admindashbord.php" class="previous">&laquo; Previous</a>
        </div>
        <div class="topic">Add new patient</div>
        <br>
        <hr class="new1">
        <div class="details">
            <label ="first_name">First name:</label><br>
            <input type="text" id="first_name" name="first_name" size="59" required><br>
            <label ="last_name">Last name:</label><br>
            <input type="text" id="last_name" name="last_name" size="59" required><br>
            <p>Gender:-----<input style="width: auto" type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
                <input style="width: auto" type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>
            </p>
            <label ="DOB">DOB.:</label><br>
            <input type="date" id="DOB" name="DOB" size="59" required>

            <hr class="new1"">
            <label ="address">Address:</label><br>
            <input type="text" id="address" name="address" size="59" required><br>
            <label ="speciality">Description:</label><br>
            <input type="text" id="speciality" name="description" size="59" required><br>
            <label ="category">Blood_group:</label><br>
            <select style="    font-size: 20px; display: list-item;" name="blood_group">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select><br>
            <label ="username">Username:</label><br>
            <input type="text" id="username" name="username" size="59" required><br>
            <label ="password">Password:</label><br>
            <input type="password" id="password" name="password" size="59" required><br>

            <label ="contact_no">Phone number:</label><br>
            <input type="text" id="contact_no" name="contact_no" size="59" required><br>
            <label ="email">E-mail:</label><br>
            <input type="email" id="Email" name="Email" size="59" required><br>



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