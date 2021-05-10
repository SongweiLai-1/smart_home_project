<?php
$client = new Mosquitto\Client();
$client->setCredentials('test','123456');
$client->connect("www.kevin-smart-home.net", 45534, 5);

for($i = 0;$i<=10;$i++) {
    $client->loop();
    $mid = $client->publish('ss', "Hello from PHP at " . date('Y-m-d H:i:s'), 1, 0);
    echo "Sent message ID: {$mid}\n";
    $client->loop();

    sleep(2);
}