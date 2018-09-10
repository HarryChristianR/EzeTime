<?php 
	 include_once('dbconnect.php');
	 	$id = $_GET['delete'];
		$query = "DELETE FROM announcement Where id='$id'";

		//$conn->query($query)
		if(mysqli_query($conn, $query)){
			echo "TRUE";
		}
		else{
			echo "FALSE";
		}
		
		 	
	
?>