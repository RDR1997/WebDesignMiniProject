<!DOCTYPE html>
<html>
<html>
	<head>
		<title>Show Doctors</title>
		<link rel="stylesheet" type="text/css" href="../css/table.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	<body>

		<table class="table2">
			<tr>
				<th>Doctor ID</th>
				<th>Name</th>
				<th>Category</th>
				
			</tr>
			
			<?php
				$conn = mysqli_connect("localhost","root","","my doctor");
				if ($conn-> connect_error){
					die("Connection Failed:". $conn-> connect_error);
				}
				
				$sql = "SELECT DocId,fname,category from doctor";
				$result = $conn-> query($sql);
				
				if ($result-> num_rows > 0){
					while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["DocId"]. "</td><td>" . $row["fname"]
					   ."</td><td>" . $row["category"]
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