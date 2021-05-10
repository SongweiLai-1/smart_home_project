<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="js/dependancies/bootstrap-select-1.12.4/dist/css/bootstrap-select.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/dependancies/bootstrap-select-1.12.4/dist/js/bootstrap-select.min.js"></script>
<script src="js/countrypicker.min.js"></script>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/log_sign.css">
    <title>Wecome to the smart home control system</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,shrink-to-fit=no">
</head>
<script>




    function validate() {

        var pwd1 = document.getElementById("pwd1").value;

        var pwd2 = document.getElementById("pwd2").value;



        <!-- 对比两次输入的密码 -->

        if(pwd1 == pwd2)
        {
            document.getElementById("tishi").innerHTML="<font color='green'>Same password</font>";
            document.getElementById("button").disabled = false;
        }
        else
        {
            document.getElementById("tishi").innerHTML="<font color='red'>The password is not the same</font>";
            document.getElementById("button").disabled = true;
        }


    }

function check(){

    var pwd1 = document.getElementById("pwd1").value;

    var pwd2 = document.getElementById("pwd2").value;

    var name = document.getElementById("name").value;

    var DateOfBrith = document.getElementById("DateOfBrith").value;

    var nall = nall;




    if(pwd1 == pwd2)
       {

       }
       else
       {
           window.alert("Please check the password");
           window.event.returnValue = false;

       }
    if(name =="" ){
        window.alert("There is not name");
        window.event.returnValue = false;

    }


}

function checkJquery(){

    if(typeof jQuery !='undefined'){

        alert("jQuery library is loaded!");

    }else{

        alert("jQuery library is not found!");

    }
}
</script>

<body>

<div class="container">
    
    <div id="top">
        <h1>If you do not have account, please sign in</h1>
    </div>

    <div id="main">
        <form action="sign_in_jump_action.php" name="new_cus" method="post">

            <label class="col-sm-2 control-label font">first_name</label>
            <input type="text" class="form-control bt" name="first_name" id="first_name" placeholder="Please set the first_name">

            <br><label class="col-sm-2 control-label font">last_nameame</label></br>
            <input type="text" class="form-control bt" name="last_name" id="last_name" placeholder="Please set the last_nameame">

            <br><label class="col-sm-2 control-label font">email</label></br>
            <input type="email" class="form-control bt" name="email" id="email" placeholder="Please set the email">


            <br><label class="col-sm-2 control-label font"> Gender</label></br>
            <select name="sex" id="sex" class="form-control bt">
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="unknow">unknow</option>
            </select>

            <br><label class="col-sm-2 control-label font">Phone number</label></br>
            <input type="number" class="form-control bt" name="Phone_Number" id="Phone_Number" placeholder="Please set the phone number">

            <br><label class="col-sm-2 control-label font">Date Of Brith</label></br>
            <input type="date" class="form-control bt" name="DateOfBrith" id="DateOfBrith" placeholder="DDMMYYYY"></br>

            <label class="col-sm-2 control-label font">Password</label>
            <input type="password" class="form-control bt" name="pwd1" id="pwd1" placeholder="please set the password">

            <label class="col-sm-2 control-label font">Confire password</label>
            <input type="password" class="form-control bt" name="pwd2" id="pwd2" placeholder="Please reenter the password" onkeyup="validate()"><span id="tishi"></span></br>

            <label>Please select your country</label>
            <br><select name="country" class="selectpicker countrypicker" data-live-search="true" id="country" data-default="United States" data-flag="true"></select></br>

            <br><label>Address(opition)</label></br>
            <input type="text" class="form-control bt" name="address" id="address" placeholder="Please enter your address">
            <button type="submit" onclick="check()">Submit</button>
        </form>
    </div>
</div>


</body>
</html>