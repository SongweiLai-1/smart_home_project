<?php
require_once("head.php");


?>
    <body>
    <script>
        function action(address,id) {
           var url = address;
           var dev_id = id;
           var url2 = "?sys_dev_id="+ id;
           var jump_rul = url+url2;
           alert(jump_rul);
           window.location.href = jump_rul;

        }

        function reload(){
        if(sessionStorage.getItem("isReload")){
            console.log("页面被刷新");


        }else{
            console.log("首次被加载");
            sessionStorage.setItem("isReload", true)
        }
        }
        reload()
    </script>
    <div class="container-md mt-3 p-2">
        <div id="top">
            <button class="btn btn-success" onclick="window.location.href='add_device.php'">Add Device</button>
            <?php

            $sql = "SELECT dl.* FROM users_devices ud join device_list dl on(ud.Device_id = dl.Device_id) where ud.cus_id=" . $_SESSION['user_account']['Customer_id'];

            $result = $conn->query($sql);
            ?>
        </div>
        <div id="main">
            <table class="table mt-2 table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Device ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                    <th scope="col">Delet</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['Device_id']  ?></td>
                        <td><?php echo $row['Device_type']  ?></td>
                        <td><button class="btn btn-secondary" onclick='action("<?php echo $row['address'] ?>","<?php echo $row['Device_id'] ?>")'>Action</button></td>
                        <td><a href='delet_device.php?id="<?php echo $row['Device_id'] ?>"' class="btn btn-secondary"> Delete</a></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <button class="btn btn-secondary"  onclick="logout()">log out</button>
        <script>
            function logout(){
                sessionStorage.clear();
                window.location.href = 'index.html';
            }</script>
    </body>
<?php

require_once("foot.php");
?>