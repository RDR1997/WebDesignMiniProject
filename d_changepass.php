<?php
session_start();
include "connection.php";
if(!isset($_SESSION["username"]))
{
    header("location:doctor_login.php");
}
if (count($_POST) > 0) {
    $result = mysqli_query($db, "SELECT *from doctor WHERE username='" . $_SESSION["username"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($db, "UPDATE doctor set password='" . $_POST["newPassword"] . "' WHERE username='" . $_SESSION["username"] . "'");
        $message = "Password Changed";
        header("location:doctor_login.php");
    } else
        $message = "Current Password is not correct";
}
?>
<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="css/changepass.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/formm.css"/>
    <script>
        function validatePassword() {
            var currentPassword,newPassword,confirmPassword,output = true;

            currentPassword = document.frmChange.currentPassword;
            newPassword = document.frmChange.newPassword;
            confirmPassword = document.frmChange.confirmPassword;

            if(!currentPassword.value) {
                currentPassword.focus();
                document.getElementById("currentPassword").innerHTML = "required";
                output = false;
            }
            else if(!newPassword.value) {
                newPassword.focus();
                document.getElementById("newPassword").innerHTML = "required";
                output = false;
            }
            else if(!confirmPassword.value) {
                confirmPassword.focus();
                document.getElementById("confirmPassword").innerHTML = "required";
                output = false;
            }
            if(newPassword.value != confirmPassword.value) {
                newPassword.value="";
                confirmPassword.value="";
                newPassword.focus();
                document.getElementById("confirmPassword").innerHTML = "not same";
                output = false;
            }
            return output;
        }
    </script>
</head>
<body>
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
<div style="width: 500px" class="formbox">
    <div class="aa">
        <a href="d_dashbord.php" class="previous">&laquo; Previous</a>
    </div>
    <br>
    <form name="frmChange" method="post" action=""
          onSubmit="return validatePassword()">
        <div style="width: 500px;">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <table border="0" cellpadding="10" cellspacing="0"
                   align="center" class="tblSaveForm">
                <tr class="tableheader">
                    <td colspan="2">Change Password</td>
                </tr>
                <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password"
                                           name="currentPassword" class="txtField" /><span
                            id="currentPassword" class="required"></span></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password" name="newPassword"
                               class="txtField" /><span id="newPassword"
                                                        class="required"></span></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword"
                           class="txtField" /><span id="confirmPassword"
                                                    class="required"></span></td>
                </tr>
                <tr>
                    <td colspan="2"><input style="cursor: pointer" type="submit" name="submit"
                                           value="Submit" class="btnSubmit"></td>
                </tr>
            </table>
        </div>
</div>

</form>

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
</body>
</html>