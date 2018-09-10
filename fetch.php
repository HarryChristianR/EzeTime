<?php 
include 'application/db.php';
$employee_id = $_GET['employee_id'];
$query = "SELECT * FROM display where employee_id = '$employee_id'";
$result =  $conn->query($query);
date_default_timezone_set('Asia/Manila');
$datenow = new DateTime();
$timeadd = 28800;
$cur_date = $datenow->format('U');
$cur_datetime = $cur_date - $timeadd;
$Hour = date('G');


if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		// if(($cur_datetime-$row['timestamp'])<=300){
		// 	//STOP LOGIN!
		// 	echo "<script type='text/javascript'>alert('STOP!');</script>";
		// }
		// else{
			if($row['status']=="in"){
					$greet = "Goodbye,";	
			}
			else{
if ( $Hour >= 5 && $Hour <= 11 ) {
    $greet = "Good Morning,";
} 

elseif ($Hour == 12 && $Hour < 13 ) {
	$greet = "Good Noon,";
}

else if ( $Hour >= 13 && $Hour < 17 ) {
    $greet = "Good Afternoon,";
} 

else if ( $Hour >= 17 || $Hour <= 4 ) {
    $greet = "Good Evening,";
}
			}
			echo "<span style='font-size:50px;'>".date("g:i A ")."</span><p style='font-size:70px;line-height:70px;font-weight:900;'>".$greet." ".$row['employee_name']."!<input type='hidden' class='transparent-input' id='out_id' value='".$row['employee_id']."'> 
			<input type='hidden' name='curtime' id='curtime' value='".$cur_datetime."' '>
			</p>" ;
		// }
		
    }
}
?>