<?php

	//database connection
		
	$conn = new mysqli('localhost','root','','my doctor');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	else {
		$query = "DELETE FROM patient WHERE patient_ID= '$_GET[patient_ID]'";
		
		if(mysqli_query($conn, $query))	{
			header("refresh:1; url= deletePatient.php");
		}
		else{
			echo "Not Deleted";
		}

	}	
	


?>	