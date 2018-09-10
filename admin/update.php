<?php 
	 include_once('dbconnect.php');
	 if(isset($_GET)){
	 	$barcode = $_GET['barcode'];
	 	$empfullname = $_GET['empfullname'];
	 	$displayname = $_GET['displayname'];
	 	$email = $_GET['email'];
	 	$groups = $_GET['groups'];
	 	$office = $_GET['office'];
	 	
		$query = "UPDATE employees SET barcode='$barcode', empfullname='$empfullname', displayname='$displayname',email='$email',groups='$groups',office='$office' WHERE `employees`.`barcode` = '$barcode'";

		//$conn->query($query)
		if(mysqli_query($conn, $query)){
			echo "TRUE";
		}
		else{
			echo "FALSE";
		}
	}
		
		 	
	
?>