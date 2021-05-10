<?php

require('../phpMQTT.php');

$server = "www.kevin-smart-home.net";     // 服务代理地址(mqtt服务端地址)
$port = 45534;                     // 通信端口
$username = "admin";                   // 用户名(如果需要)
$password = "public";                   // 密码(如果需要
$client_id = "testest"; // 设置你的连接客户端id

$mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);
if(!$mqtt->connect(true, NULL, $username, $password)) {
	exit(1);
}

echo $mqtt->subscribeAndWaitForMessage('time-record', 0);

$mqtt->close();