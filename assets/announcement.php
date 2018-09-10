<?php

include '../application/db.php';
?>


var array = [
    <?php
    		$query = "SELECT * FROM announcement";
	        $result =  $conn->query($query);
	        while($row = $result->fetch_assoc()){
	        	$announce = $row["announcement"];
	        	$font = $row["fontsize"];
	        	$description = $row['description'];
	        	echo "['$announce','$description','$font'],";
	        }
	        
        
    ?>
];