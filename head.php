<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>We come to system one</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <?php
        session_start();
    $servername = "localhost";
    $username = "root";
    $password = "laiwoaini123//";
    $dbname = "smart_home";

        $conn = new mysqli($servername, $username, $password,$dbname);

        if ($conn->connect_error) {
            die("CONNECT FAILD, PLEASE TRY AGAGIN LATTER: " . $conn->connect_error);
        }

        if(empty($_SESSION["user_account"])){
            ?>
            <script>
                window.location.href = "index.php";
            </script>
            <?php
        }

    ?>
</head>