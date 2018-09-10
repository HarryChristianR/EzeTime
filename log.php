<?php
include 'application/db.php';

//GET IP ADDRESS OF USER: 
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$ipaddress = getRealIpAddr();
$employee_id = $_GET['employee_id'];
$mynote = $_GET['mynote'];
$query1 = "SELECT * FROM employees where barcode = '$employee_id'";
$result =  $conn->query($query1);
date_default_timezone_set('Asia/Manila');
$date = new DateTime();
$timeadd = 28800;
$current_date = $date->format('U');
$current_datetime = $current_date - $timeadd;

if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		if ($row['status']=="in"){
			$fullname = $row['empfullname'];
			$query = "INSERT into info values('$fullname','out','$current_datetime','$mynote','$ipaddress');";
			//$query .= "UPDATE employees set tstamp = '$current_datetime', status = 'out' where empfullname = '$fullname'"

			$conn->query($query);
			//$conn->mysqli_multi_query($query);
			echo "<p  id='rcornersred'>You're OUT</p>";
		}
		else if($row['status']=="out"){
			$employeename = $row['empfullname'];
			$subquery = "SELECT fullname,`inout`,MAX(info.timestamp),info.notes from info where 
				`inout`='out' and 
				`notes`='forgot' and 
				`fullname`='$employeename' AND
				`timestamp`=(SELECT MAX(info.timestamp) from info where fullname='$employeename')
				group by info.fullname";
			$subresult = $conn->query($subquery);
			if($subresult->num_rows > 0){
				$fullname = $row['empfullname'];
				$query = "INSERT into info values('$fullname','in','$current_datetime','$mynote','$ipaddress');";
				//$query .= "UPDATE employees set tstamp = '$current_datetime', status = 'in' where empfullname = '$fullname'"
				$conn->query($query);
				//$conn->mysqli_multi_query($query);
				echo "<p  id='rcornersgreen'>You're IN</p><br><p id='idle' style='font-size:32px;'>YOU FORGOT TO LOGOUT LAST TIME</p>";
			}
			else{
				$fullname = $row['empfullname'];
				$query = "INSERT into info values('$fullname','in','$current_datetime','$mynote','$ipaddress');";
				//$query .= "UPDATE employees set tstamp = '$current_datetime', status = 'in' where empfullname = '$fullname'"
				$conn->query($query);
				//$conn->mysqli_multi_query($query);
				echo "<p  id='rcornersgreen'>You're IN</p>";
			}
			
		}
    }
}


?>