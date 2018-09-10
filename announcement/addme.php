
<?php 
	 include_once('dbconnect.php');
	 if(isset($_GET)){
	 	$announcement = $_GET['announcement'];
	 	$description = $_GET['description'];
	 	$fontsize = $_GET['fontsize'];
	 	if($fontsize==''){
	 		$fontsize=100;
	 	}
		$query = "INSERT into announcement values(NULL,'$announcement','$description','$fontsize')";
		if(mysqli_query($conn, $query)){
			echo "TRUE";
		}
		else{
			echo "FALSE";
		}
	}
		
		 	
	
?>