<?php
$server = "www.kevin-smart-home.net";     // 服务代理地址(mqtt服务端地址)
$port = 45534;                     // 通信端口
$username = "admin";                   // 用户名(如果需要)
$password = "public";                   // 密码(如果需要
$client_id = "clientx9293670xxctr"; // 设置你的连接客户端id


$c = new Mosquitto\Client;
$c->setCredentials('test','123123');
$c->connect(true, NULL, $username, $password);
$c->subscribe('ss', 1);
$c->onMessage(function($m) {
    var_dump($m);
});
$c->loopForever();