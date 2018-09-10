<?php
include 'application/db.php';
$query1 = "SELECT * FROM employees where status = 'in'";


//$zonedate = new DateTimeZone('Asia/Manila');
//$todate = new DateTime('', $zonedate);
//$interval = new DateInterval('P1D');
//$date -> sub($interval);

//or

//$date = new DateTime(strtotime("yesterday"), new DateTimeZone('Asia/Manila'));

$date = new DateTime('', new DateTimeZone('Asia/Manila'));

$current_datetime = $date->format('U');
$result =  $conn->query($query1);
if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		$fullname = $row['empfullname'];
		$query2 = "INSERT into info values('$fullname','out','$current_datetime','forgot','::1')";
		$conn->query($query2);
	}

}

?>