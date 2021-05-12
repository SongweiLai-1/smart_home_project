<!DOCTYPE html>
<html lang="en">
<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "laiwoaini123//";
$dbname = "smart_home";


if (isset($_POST['email']) && isset($_POST['password'])) {
    include ("get_ip_function.php");
    $conn = new mysqli($servername, $username, $password, $dbname);
    $cus_email = $_POST['email'];
    $cus_password = $_POST['password'];

    if ($conn->connect_error) {
        die("CONNECT FAILD, PLEASE TRY AGAGIN LATTER: " . $conn->connect_error);
    }


    $sql = "SELECT * FROM user_inf WHERE (Email_address = '$cus_email') AND (Cus_password='$cus_password')";
   // $insert_location = "INSERT INTO location_log (cus_id,country_name,city_name,continent_Name,latitude,longitude,time_zone) VALUE ( ".$_SESSION['user_account'].",'$country_name','$Continent_Name','$Latitude' ,'$Longitude','$time_zone')";
  //  $conn->query($insert_location);
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $_SESSION['user_account'] = $row;
    $_SESSION['email']= $_POST['email'];


}


?>

<body>
<script>
   window.location.href="home_page.php";
</script>

<?php
include ("platform_built.php");
mysqli_close($conn); ?>


</body>

