<?php
session_start();
include "connection.php";
if(!isset($_SESSION["username"]))
{
    header("location:patient_login.php");
}?>
<!DOCTYPE html>
<html>
<head>
    <title>UPDATE PATIENT</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/formm.css">
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

<div class="formbox">
    <div class="aa">
        <a href="p_dashbord.php" class="previous">&laquo; Previous</a>
    </div>
    <?php
    echo 'You can update your details';
    echo '<h4>' . print_r($_SESSION["fname"], TRUE) . '</h4>';
    if(isset($_POST["submit"]))
    {
        $first_name = mysqli_real_escape_string($db,$_REQUEST['first_name']);
        $last_name = mysqli_real_escape_string($db,$_REQUEST['last_name']);
        $gender = mysqli_real_escape_string($db,$_REQUEST['gender']);
        $DOB = mysqli_real_escape_string($db,$_REQUEST['DOB']);
        $address = mysqli_real_escape_string($db,$_REQUEST['address']);
        $description = mysqli_real_escape_string($db,$_REQUEST['description']);
        $blood_group = mysqli_real_escape_string($db,$_REQUEST['blood_group']);
        $contact_no = mysqli_real_escape_string($db,$_REQUEST['contact_no']);
        $Email = mysqli_real_escape_string($db,$_REQUEST['Email']);
// Attempt insert query execution
        $sql = "UPDATE patient SET first_name = '$first_name', last_name = '$last_name', gender = '$gender', DOB = '$DOB', address = '$address', description = '$description', blood_group = '$blood_group', contact_no = '$contact_no', Email = '$Email' WHERE patient.patient_ID = '{$_SESSION["patient_ID"]}'";
        if(mysqli_query($db,$sql)){
            echo "<p class='success'>Records added successfully</p>";
            header('Location: p_dashbord.php');
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
    <form action="update_patient.php" method="post"  >
        <div class="topic">Update Details!</div>
        <br>
        <hr class="new1">
        <div class="details">
            <label ="first_name">First name:</label><br>
            <input type="text" id="first_name" name="first_name" size="59" required><br>
            <label ="last_name">Last name:</label><br>
            <input type="text" id="last_name" name="last_name" size="59" required><br>
            <p>Gender:-----<input style="width: auto" type="radio" id="male" name="gender" value="male">
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