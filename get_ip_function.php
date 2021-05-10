<?php
function get_real_ip(){
    $ip=false;
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ips=explode (', ', $_SERVER['HTTP_X_FORWARDED_FOR']);
        if($ip){ array_unshift($ips, $ip); $ip=FALSE; }
        for ($i=0; $i < count($ips); $i++){
            if(!preg_match ('/^(10│172.16│192.168)./', $ips[$i])){
                $ip=$ips[$i];
                break;
            }
        }
    }
    $ip = ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
    $_SESSION['cus_ip'] =  $ip ;

}

get_real_ip();
echo $_SESSION['cus_ip'];
