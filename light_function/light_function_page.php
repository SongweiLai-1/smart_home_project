<!DOCTYPE html>
<html lang="en">
<?php require_once("../head.php");
?>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>遥控树莓派</title>
<link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<style type="text/css">
    #up {
        margin-left: 55px;
        margin-bottom: 3px;
    }

    #rear {
        margin-top: 3px;
        margin-left: 55px;
    }

    .btn {
        background: #62559f;
    }
</style>
<script>
    $(function () {
        $("button").click(function () {
            $("button").attr('disabled',true);
            var id = $(this).attr("id");

            $.ajax({
                type: "POST",
                url: 'mqtt_send.php',
                data: {
                    action: id,
                    deviceId: '<?php echo $_GET['sys_dev_id']?>',
                    type: 'light'
                },
                success: function () {
                    console.log("Data Saved ");
                    $("button").attr('disabled',false)
                },
                error: function(){
                    $("button").attr('disabled',false)}
            });
        });
    });

</script>

<head></head>
<body>

<div id="container" class="container">

    <div>
        <button id="up" class="btn btn-lg btn-primary glyphicon glyphicon-circle-arrow-up"></button>
    </div>
    <div>
        <button id='breath' class="btn btn-lg btn-primary glyphicon glyphicon-circle-arrow-left"></button>
        <button id='down' class="btn btn-lg btn-primary glyphicon glyphicon-stop"></button>
        <button id='rightFront' class="btn btn-lg btn-primary glyphicon glyphicon-circle-arrow-right"></button>
    </div>
    <div>
        <button id='rear' class="btn btn-lg btn-primary glyphicon glyphicon-circle-arrow-down"></button>
    </div>

</div>

<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript">


</script>
</body>

<?php require_once("../foot.php"); ?>