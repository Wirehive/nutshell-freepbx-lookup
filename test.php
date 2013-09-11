<?php

$apiKey   = '';
$username = '';

require_once('NutshellApi.php');
$api = new NutshellApi($username, $apiKey);

$params = array( "01252560565" );
$result = $api->call('searchUniversal', $params);

echo $result->accounts[0]->name." ".$result->contacts[0]->name;
