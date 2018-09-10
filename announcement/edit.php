<?php 
	include_once('dbconnect.php');
	$id = $_GET['fetchme'];
	$query = "SELECT * FROM announcement where id='$id' ";
	$req =  mysqli_query($conn,$query);
	$result = mysqli_fetch_array($req);
	echo "
	<div class='form-group'>
	  <h5>Announcement ID: ".$result['id']."</h5>
	</div>
	<input type='text' id='editID' value='".$result['id']."' hidden>
	<div class='form-group'>
	  <input type='text' class='form-control' name='Announcement' id='editAnnouncement' value='".$result['announcement']."' placeholder='Announcement' required>
	</div>
	<div class='form-group'>
	  <textarea type='text' class='form-control' name='Description' id='editDescription'  placeholder='Description'>".$result['description']."</textarea>
	</div>
	<div class='form-group'>
	  <input type='number' class='form-control' name='Fontsize' id='editFontsize' value='".$result['fontsize']."' placeholder='fontsize'>
	</div>

	";
?>