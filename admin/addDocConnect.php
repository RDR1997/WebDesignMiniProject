<!DOCTYPE html>
<html>
	<head>
		<title>Registration successfully</title>
		<link rel="stylesheet" type="text/css" href="../css/addDocConnect.css" >
	</head>
	<body>
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
		
	$conn = new mysqli('localhost','root','','my doctor');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into doctor(fname,nic,gender,address,tel,email,DocId,category)values(?,?,?,?,?,?,?,?)");
		$stmt ->bind_param("ssssisss",$fname,$nic,$gender,$address,$tel,$email,$DocId,$category);
		$execval = $stmt->execute();
		
		
		$stmt->close();
		$conn->close();
	}


?>	
	
		<h1>Registration successfully...</h1>
		<a href = "../admindashbord.php"><button >Back to Admin Dashbord</button>
	
	
	</body>
</html>	