<?php
include 'application/db.php';
$curtime = $_GET['curtime'];
$mynote = $_GET['mynote'];
$query = "UPDATE info set notes='$mynote' where timestamp='$curtime' ";
$result =  $conn->query($query);



?>
