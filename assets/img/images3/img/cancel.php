<?php

require 'autoload.php';

use SMSGatewayMe\Client\ApiClient;
use SMSGatewayMe\Client\Configuration;
use SMSGatewayMe\Client\Api\MessageApi;
use SMSGatewayMe\Client\Model\CancelMessageRequest;

// Configure client
$config = Configuration::getDefaultConfiguration();
$config->setApiKey('Authorization', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTUyODg3MzMzNywiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjU0ODg2LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.1vb8LVCKt8fdrpPrtba-tg_IDiI675Lox23NyiMnrks');
$apiClient = new ApiClient($config);
$messageClient = new MessageApi($apiClient);

// Cancel SMS Message
$cancelMessageRequest1 = new CancelMessageRequest([
    'id' => $_GET['ids']
]);

$canceledMessaged = $messageClient->cancelMessages([
    $cancelMessageRequest1
    
]);
print_r($canceledMessaged);