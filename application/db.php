<?php
	$server = "localhost";
	$username = "root";
	$password = "qwerty";
	$db = "eztime";
	$conn = new mysqli($server,$username, $password, $db);
	if($conn->connect_errno > 0){
		die("Connection Failed");
	}
?>