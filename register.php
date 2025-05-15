<?php
$server = "localhost";
$username ="root";
$password = "";
$dbname = "registerroad";

$con = mysqli_connect($server,$username,$password,$dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else{echo "Connected successfully";
}
$fullName = $_POST["fullName"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];

$sql = "INSERT INTO `storage`(`fullName`, `email`, `password`, `confirmPassword`) VALUES 
('$fullName','$email','$password','$confirmPassword')
";


$result = mysqli_query($con , $sql);

if($result)
{
    echo " data submitted";

}
else{
    echo "error";
}
header("Location: mainpage.html");
    exit;








?>