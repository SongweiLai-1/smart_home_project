<?php
require_once("head.php");
?>

    <body>
    <div class="container-md mt-3 p-2">
        <!--  <form action="add_device_action.php" method="post">
                 <div class="form-group">
                     <label>Device Code</label>
                     <input type="text" class="form-control" name="code">
                 </div>
                 <div class="form-group">
                     <label>Device Name</label>
                     <input type="text" class="form-control" name="name">
                 </div>

                 <div>
                     <label>Device_type</label>
                     <select name="type" onclick="">
                         <option value="Smart_light">Smart_light</option>
                         <option value="Smart_clock">Smart_clock</option>
                     </select>
                 </div>
                 <div class="form-group">
                     <label>Description</label>
                     <input type="text" class="form-control" name="description">
                 </div>

                 <button type="submit" class="btn btn-primary">Submit</button>
             </form>-->
        <form action="add_device_action.php" method="post">
            <div class="form-group">
                <label>Device Code</label>
                <input type="text" class="form-control" name="code">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
         </div>
         </body>
<?php
require_once("foot.php");
?>