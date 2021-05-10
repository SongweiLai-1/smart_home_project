<?php
$select_plateform = "SELECT count(*) FROM platform";
$plateform_result = mysqli_query($conn,$select_plateform);
$rows = mysqli_fetch_row($plateform_result);
$rowcount = $rows[0];


$cus_id = $_SESSION['user_account']['Customer_id'];
$ip =  $_SESSION['cus_ip'] ;
$country = "SYDNEY";
$state = "True";
$_SESSION['plateform_id'] = $rowcount+1;
$count_result= $rowcount+1;
$inset_platform = "INSERT INTO platform (platform_id,Cus_id,state,country,ip_address ) VALUE ('$count_result',$cus_id,'$state','$country','$ip')";
$conn->query($inset_platform);



