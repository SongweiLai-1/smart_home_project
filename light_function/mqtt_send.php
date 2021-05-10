<?php
require_once("../head.php");
require_once("../phpMQTT-master/phpMQTT.php");

$server = "www.kevin-smart-home.net";     // 服务代理地址(mqtt服务端地址)
$port = 45534;                     // 通信端口
$username = "admin";                   // 用户名(如果需要)
$password = "public";                   // 密码(如果需要
$client_id = "clientx9293670xxctr"; // 设置你的连接客户端id

$cus_id = $_SESSION['user_account']['Customer_id'];
$platform_id = $_SESSION['plateform_id'];
$state = "true";
$state_error = "false";
$date = date('Y-m-d H:i:s');

$action = $_POST['action'];
$dev_id = $_POST['deviceId'];
$type = $_POST['type'];

$mqtt =  new Bluerhinos\phpMQTT($server, $port, $client_id); //实例化MQTT类
if ($mqtt->connect(true, NULL, $username, $password)) {
//如果创建链接成功

    $send_record = "INSERT INTO state_record (platform_id,Customer_id,Device_id, state,action,`date`) VALUES ('$platform_id ',$cus_id, '$dev_id', '$state','$action','$date')";
    $conn->query($send_record) ;
    //shell_exec("php mqtt_light_report.php");
    $mqtt->publish($dev_id, $action, 2);
    // 发送到 test-1 的主题 一个信息 内容为 setr=3xxxxxxxxx Qos 为 0
    $mqtt->close();    //发送后关闭链接


} else {
    $send_error_record = "INSERT INTO state_record (platform_id,Customer_id,Device_id, state,action,`date`) VALUES ('$platform_id ',$cus_id, '$dev_id', '$state_error','$action','$date')";
    echo "Time out!\n";
}

require_once("../foot.php");
?>