<?php 
	 include_once('dbconnect.php');

		$query = "SELECT * FROM info LIMIT 10";
		$result =  $conn->query($query);
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				echo "<tr>
<td id='".$row['fullname']."'>".$row['fullname']."</td>
<td id='".$row['inout']."'>".$row['inout']."</td>
<td id='".$row['timestamp']."'>".$row['timestamp']."</td>
</tr>

";
		    }
		}



?>

