<?php
session_start();
include "connection.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Admin Log In</title>
    <link rel="Stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
    <div class="header">
        <img src="img/logo.jpg"alt="logo"style="width:150px;height:150px;font-size:30px ">
        <a style="float:right;padding-right:450px;padding-top:30px;font-size:50px;">Rajarata Medical Center</a>
    </div>
</header>
<div class="loginbox">
    <img src="img/admin logo1.jpg" class="avatar">
    <h1>Admin Login</h1>
            <?php
            if(isset($_POST["submit"]))
            {
                $sql="SELECT * FROM admin where ausername='{$_POST["aname"]}' and apassword='{$_POST["apass"]}'";
                $res=$db->query($sql);
                if($res->num_rows>0)
                {
                    $row=$res->fetch_assoc();
                    $_SESSION["name"]=$row["name"];
                    $_SESSION["ausername"]=$row["ausername"];
                    header("location:admindashbord.php");
                }
                else
                {
                    echo "<p class='error'>Invalid User Details</p>";
                }

            }

            ?>
            <form action="Admin_login.php" method="post">
                <label>User Name</label>
                <input type="text" name="aname" required>
                <label>Password</label>
                <input type="password" name="apass" required>
                <button type="submit" class="button" name="submit">Login Now</button>
            </form>
</div>
<br>
<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


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
