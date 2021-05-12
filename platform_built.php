<?php
 require ("get_ip.php");
 require ("get_location.php");

session_start();
$servername = "localhost";
$username = "root";
$password = "laiwoaini123//";
$dbname = "smart_home";

$conn = new mysqli($servername, $username, $password,$dbname);
ip();
get_location($_SESSION['cus_ip']);



$cus_id = $_SESSION['user_account']['Customer_id'];
$state = "well";
$location_id = $_SESSION['Latitude'] ."/".  $_SESSION['Longitude'];
$log_date=date("Y-m-d h:i:sa"); ;
$ip_address = $_SESSION['cus_ip'];



$create_platform_record = "INSERT INTO platforms (Cus_id,state,location_id,log_date,ip_address) VALUE ($cus_id,'$state','$location_id','$log_date','$ip_address')";
$check_platform ="SELECT * FROM platforms ";
$result = $conn->query($check_platform);
$row = $result->fetch_assoc();

$country_name = $_SESSION['country_name'];
$city_name =  $_SESSION['city_name'];
$Continent_Name =   $_SESSION['Continent_Name'];
$Latitude = $_SESSION['Latitude'];
$Longitude =$_SESSION['Longitude'];
$Timezone = $_SESSION['Timezone'];





$_SESSION['platform_record'] = $row;

if ($conn->query($create_platform_record) === TRUE) {

    $insert_location = "INSERT INTO location_log (cus_id,country_name,city_name,continent_Name,latitude,longitude,time_zone) VALUE ($cus_id,'$country_name','$city_name','$Continent_Name','$Latitude','$Longitude','$Timezone')";
    $select_platform_id = "SELECT * FROM platforms WHERE ()";

    if($conn->query($insert_location) === TRUE){

    }else{
        echo "Error: " . $insert_location . "<br>" . $conn->error;
    }

} else {
    echo "Error: " . $create_platform_record . "<br>" . $conn->error;
}
mysqli_close($conn);
//include ('get_location.php');

