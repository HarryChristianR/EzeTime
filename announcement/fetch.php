<?php 
	 include_once('dbconnect.php');

		$query = "SELECT * FROM announcement";
		$result =  $conn->query($query);
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				echo "<tr>
<td id='".$row['id']."'>".$row['id']."</td>
<td id='".$row['announcement']."'>".$row['announcement']."</td>
<td id='".$row['description']."'>".$row['description']."</td>
<td id='".$row['fontsize']."'>".$row['fontsize']."</td>
<td>
<button  onclick='obj.delete(".$row['id'].")' id='xbutton' class='btn btn-danger'>Delete</button>
<button type='button' class='btn btn-primary' data-toggle='modal' data-target='.bs-example-modal-lg' onclick='obj.editAnnouncement(".$row['id'].");'>Edit</button>
</td>
</tr>

";
		    }
		}

		
		 	
?>