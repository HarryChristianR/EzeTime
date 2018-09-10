<?php 
	include_once('dbconnect.php');
	$barcode = $_GET['fetchme'];
	$query = "SELECT * FROM employees where barcode='$barcode' ";
	$req =  mysqli_query($conn,$query);
	$result = mysqli_fetch_array($req);
	echo "
	
	<div class='form-group'>
	  <textarea type='text' class='form-control' name='barcode' id='editbarcode'  placeholder='Barcode'>".$result['barcode']."</textarea>
	</div>

	<div class='form-group'>
	  <textarea type='text' class='form-control' name='empfullname' id='editempfullname'  placeholder='Employee Full Name'>".$result['empfullname']."</textarea>
	</div>
		<div class='form-group'>
	  <textarea type='text' class='form-control' name='displayname' id='editdisplayname'  placeholder='Display Name'>".$result['displayname']."</textarea>
	</div>

	<div class='form-group'>
	  <textarea type='text' class='form-control' name='email' id='editemail'  placeholder='Email'>".$result['email']."</textarea>
	</div>

	<div class='form-group'>
	  <input type='text' class='form-control' name='groups' id='editgroups' value='".$result['groups']."' placeholder='Groups' required>
	</div>
	
	<div class='form-group'>
	  <input type='text' class='form-control' name='office' id='editoffice' value='".$result['office']."' placeholder='Office'>
	</div>


	";
?>