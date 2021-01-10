<!DOCTYPE html>
<html>
<html>
	<head>
		<title>Show Patient popup</title>
		<link rel="stylesheet" type="text/css" href="../css/admindashbord.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	<body>

		<table class="table2">
			<tr>
				<th>Patient ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</td>
				<th>DOB</th>
				<th>Age</th>
				<th>Address</th>
				<th>User name</th>
				<th>Password</td>
				
			</tr>
			
			<?php
				$conn = mysqli_connect("localhost","root","","my doctor");
				if ($conn-> connect_error){
					die("Connection Failed:". $conn-> connect_error);
				}
				
				$sql = "SELECT patient_ID,first_name,last_name,gender,DOB,age,address,username,password from patient";
				$result = $conn-> query($sql);
				
				if ($result-> num_rows > 0){
					while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["patient_ID"]. "</td><td>" . $row["first_name"]
					   ."</td><td>" . $row["last_name"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["DOB"] 
					   ."</td><td>" . $row["age"]."</td><td>" . $row["address"]
					   ."</td><td>" . $row["username"]. "</td><td>" . $row["password"]
					   ."</td></td>";
					}
					echo "</table>";			
				}
				else{
					echo "0 result";
				}
			$conn-> close();	
			?>
			
		</table>
	
	</body>
</html>