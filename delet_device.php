<?php

require_once("head.php");


$Device_ID = $_GET['id'];
echo $Device_ID;
$sql = "DELETE FROM users_devices WHERE Device_id= $Device_ID";

$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
    die('无法删除数据: ' . mysqli_error($conn));
}else {
    echo '数据删除成功！';
}
?>
<script>window.location.href="home_page.php";</script>
    <?php




require_once("foot.php");


?>


