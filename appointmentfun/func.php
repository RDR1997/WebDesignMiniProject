<?php
$con=mysqli_connect("localhost", "root","","hospital_management");

if(isset($_POST['appointment']))
{
  $patient_name=$_POST['patient_name'];
  $departments=$_POST['departments'];
  $date=$_POST['date'];
  $time=$_POST['time'];

  $booking = " insert into appointment_booking(patient_name,departments,date,time)values ('$patient_name','$departments','$date','$time')";
  $booking_result = mysqli_query($con,$booking);
  if($booking_result)
  {
    echo "<script>window.open('index.php','_self')</script>";
  }
}