<?php 
session_start();
unset($_SESSION["name"]);
unset($_SESSION["ausername"]);
session_destroy();
header("location:index.php");

?>