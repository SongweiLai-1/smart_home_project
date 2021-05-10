<?php
$url = "http://localhost:63342/Internetworking%20project%20assignment%201/main_page.html?_ijt=5elaj3s5mi8nm7c677g3kvuc6q";

$servername = "localhost";
$username = "root";
$password = "laiwoaini123//";
$dbname = "smart_home";


$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("CONNECT FAILD, PLEASE TRY AGAGIN LATTER: " . $conn->connect_error);
}

$sql = "SELECT count(*) FROM user_inf";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_row($result);
$rowcount = $rows[0];

$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$email = $_POST['email'];
$gender =$_POST["sex"];
$phone_number =$_POST["Phone_Number"];
$date_of_brith =$_POST["DateOfBrith"];
$password =$_POST["pwd1"];
$country =$_POST["country"];
$address =$_POST["address"];
$cus_id_num = $rowcount+1;

$inset = "INSERT INTO user_inf (Customer_id,First_name,Second_name,Email_address,Address,Country,Gender,Customer_Phone_Number,Cus_password) VALUE ('$cus_id_num','$first_name','$last_name','$email','$address','$country',
    '$gender','$phone_number','$phone_number')";

if (mysqli_query($conn, $inset)) {
    echo "your account has beem created, weclome";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



?>

<?php mysqli_close($conn);
?>

url = <?php echo $url; ?>


<form name="platform" id="platform" action="home_page.php" method="post" enctype="multipart/form-data">
   <input type="text" name="signin_cus_id" id="signin_cus_id" >
    <script>document.getElementById("signin_cus_id").value="<?php echo $cus_id_num ?>";
    document.platform.submit();</script>
</form>



