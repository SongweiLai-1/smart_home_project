<?php
require_once("../phpMQTT-master/phpMQTT.php");
require_once __DIR__ . '/Workerman/Autoloader.php';

$server = "www.kevin-smart-home.net";     //server
$port = 45534;                           // port
$username = "admin";                     // account name
$password = "public";                   // password
$client_id = "testest";                 // set your client id

$mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);
if(!$mqtt->connect(true, NULL, $username, $password)) {
    exit(1);
}

$msg = $mqtt->subscribeAndWaitForMessage('time-record', 0);

if ($mqtt->connect(true, NULL, $username, $password)) {
//if connection successful

    $mqtt->publish("test-1", $msg, 2);
    // send topic" test-1"  a $msg  Qos :
    $mqtt->close();    //close mqtt


} else {
    echo "Time out!\n";
}

$mqtt->close();





