<?php 
	 include_once('dbconnect.php');
	 if(isset($_GET)){
	 	$barcode = $_GET['barcode'];
	 	$empfullname = $_GET['empfullname'];
	 	$displayname = $_GET['displayname'];
	 	$email = $_GET['email'];
	 	$groups = $_GET['groups'];
	 	$office = $_GET['office'];

		$query = "INSERT INTO employees values('$barcode','$empfullname', NULL, '', '$displayname', '$email','$groups','$office', '0', '0', '0', '0', 'out')";

		if(mysqli_query($conn, $query)){
			echo "TRUE";
		}
		else{
			echo "FALSE";
		}
	}
		
		 	
	
?>