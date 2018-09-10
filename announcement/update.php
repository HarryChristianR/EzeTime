<?php 
	 include_once('dbconnect.php');
	 if(isset($_GET)){
	 	$id = $_GET['announcementID'];
	 	$announcement = $_GET['announcement'];
	 	$description = $_GET['description'];
	 	$fontsize = $_GET['fontsize'];
		$query = "UPDATE announcement SET announcement='$announcement',description='$description',fontsize='$fontsize'  WHERE id='$id'";

		//$conn->query($query)
		if(mysqli_query($conn, $query)){
			echo "TRUE";
		}
		else{
			echo "FALSE";
		}
	}
		
		 	
	
?>