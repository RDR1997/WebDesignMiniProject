<!DOCTYPE html>
<html>
<html>
	<head>
		<title>Show Patient popup</title>
		<link rel="stylesheet" type="text/css" href="../css/table.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	<body>

		<table class="table2">
			<tr>
				<th>Patient ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Oparation</th>
			</tr>
			
			<?php
				$conn = mysqli_connect("localhost","root","","my doctor");
				if ($conn-> connect_error){
					die("Connection Failed:". $conn-> connect_error);
				}
				
				$sql = "SELECT patient_ID,first_name,last_name from patient";
				$result = $conn-> query($sql);
				
				if ($result-> num_rows > 0){
					while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["patient_ID"]. "</td><td>" . $row["first_name"]
					   ."</td><td>" . $row["last_name"]. 
					   "</td><td><a href = deleteP.php?patient_ID=".$row['patient_ID'].">Remove</a></td></td>";
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