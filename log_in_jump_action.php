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
    require ("get_location.php");

    $conn = new mysqli($servername, $username, $password, $dbname);
    $cus_email = $_POST['email'];
    $cus_password = $_POST['password'];

    if ($conn->connect_error) {
        die("CONNECT FAILD, PLEASE TRY AGAGIN LATTER: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM user_inf WHERE (Email_address = '$cus_email') AND (Cus_password='$cus_password')";
    $insert_location
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $_SESSION['user_account'] = $row;
    $_SESSION['email']= $_POST['email'];
    include ('platform_built.php');
}

$select_plateform = "SELECT count(*) FROM platform";
$plateform_result = mysqli_query($conn,$select_plateform);
$rows = mysqli_fetch_row($plateform_result);
$rowcount = $rows[0];




?>

<body>
<script>
   window.location.href="home_page.php";
</script>

<?php


mysqli_close($conn); ?>


</body>

