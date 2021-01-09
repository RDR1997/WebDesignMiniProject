<?php

	$fname = $_POST['fname'];
	$nic = $_POST['nic'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$DocId = $_POST['DocId'];
	$category = $_POST['category'];
	
	//database connection
		
	$conn = new mysqli('localhost','root','','doctors');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(fname,nic,gender,address,tel,email,DocId,category)values(?,?,?,?,?,?,?,?)");
		$stmt ->bind_param("ssssisss",$fname,$nic,$gender,$address,$tel,$email,$DocId,$category);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}


?>	