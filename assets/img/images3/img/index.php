<?php
    include "autoload.php";
    $sentMessages = "";
    $clients = new SMSGatewayMe\Client\ClientProvider("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTUyODg3MzMzNywiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjU0ODg2LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.1vb8LVCKt8fdrpPrtba-tg_IDiI675Lox23NyiMnrks");
    if(isset($_GET['send'])){
    	if($_GET['number']!=""){


	    	$sendMessageRequest = new SMSGatewayMe\Client\Model\SendMessageRequest([
	        'phoneNumber' => $_GET['number'], 'message' => $_GET	['message'], 'deviceId' => 93477
		    ]);

		    $sentMessages = $clients->getMessageClient()->sendMessages([$sendMessageRequest]);
    	}
	}
?>   
<!DOCTYPE html>
<html>
<head>
	<title>This is it!</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body>
	<div class="container text-center">
		<div class="col-md-12">
			<h1>Free Text Messenger</h1>
			<form method="GET">
				<div class="form-group">
				<input type="text" name="number" placeholder="Number" class="form-control">
				</div>
				<div class="form-group">
				<textarea name="message" class="form-control" placeholder="Your message here"></textarea>
				</div>
				<button type="submit" id="sendBtn" class="btn btn-primary" name="send">Send</button>
			</form><br><br>
			<?php
				if($sentMessages!=""){
					echo "<div class='alert alert-success'>
						  <strong>Success!</strong> Message sent!
						</div>";
				}
			?>
		</div>
	</div>

</body>
</html>