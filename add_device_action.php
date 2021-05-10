<?php
require_once("head.php");
?>
    <body>
    <?php

    // $check_address = $conn->query("SELECT type FROM device WHERE (serial_number = '$id') ");
    $id=$_POST['code'];
    $cus_id = $_SESSION['user_account']['Customer_id'];

    $address = "";
    $name = "";
    $search_type = "SELECT type FROM device WHERE (serial_number = '$id')";
    $type = $conn->query($search_type);


    if($type="Smart_light"){
        $address =  "light_function/light_function_page.php";
        $name = "Smart_light";

    }
    elseif($type="Smart_clock"){
        $address = "clock_function/clock_function.php";
        $name = "Smart_clock";

    }

    $check_code = "SELECT * FROM device WHERE (serial_number = '$id') ";
    $result = mysqli_query($conn,$check_code);
    $row = mysqli_fetch_row($result);


    //$sql = "INSERT INTO device_list VALUES ('$id', '$name', '$type', '$description','$address')";
    //$sql2 = "INSERT INTO users_devices VALUES ('$id', $cus_id)";


    if ($row[0]!=0){
        echo $id;
        echo $cus_id;
        $device_list = "INSERT INTO device_list VALUES ('$id', '$name', '$type','$address')";
        $insert_device_list = mysqli_query( $conn, $device_list );

        if(!$insert_device_list){
            $users_devices = "INSERT INTO users_devices VALUES ('$id','$cus_id')";
            $insert_users_devices = mysqli_query( $conn, $users_devices );
            echo '$insert_device_list active';
            if($insert_users_devices){
                ?>
                <script>
                window.location.href="home_page.php";
                </script><?php

            }
        }



    }else {
        echo "Error: " .  $check_code . "<br>" . $conn->error;
    }
    ?>
    </body>
<?php
require_once("foot.php");
?>