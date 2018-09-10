<?php 
	 include_once('dbconnect.php');

		$query = "SELECT * FROM employees";
		$result =  $conn->query($query);
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				echo "<tr>
<td id='".$row['barcode']."'>".$row['barcode']."</td>
<td id='".$row['empfullname']."'>".$row['empfullname']."</td>
<td id='".$row['displayname']."'>".$row['displayname']."</td>
<td id='".$row['email']."'>".$row['email']."</td>
<td id='".$row['groups']."'>".$row['groups']."</td>
<td id='".$row['office']."'>".$row['office']."</td>

<td>
<button  onclick='obj.delete(".$row['barcode'].")' id='xbutton' class='btn btn-danger'>Delete</button>
<button type='button' class='btn btn-primary' data-toggle='modal' data-target='.bs-example-modal-lg' onclick='obj.editEmployee(".$row['barcode'].");'>Edit</button>
</td>
</tr>

";
		    }
		}



?>

