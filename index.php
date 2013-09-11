<?php

#Config here!
$apiKey   = '';
$username = '';

if (!empty($_GET['number'])){

  require_once('NutshellApi.php');
  $api = new NutshellApi($username, $apiKey);

  $params = array( $_GET['number'] );
  $result = $api->call('searchUniversal', $params);

  echo $result->accounts[0]->name." ".$result->contacts[0]->name;
}
