<?php
$server = "localhost";
$username ="root";
$password = "";
$dbname = "road";

$con = mysqli_connect($server,$username,$password,$dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else{echo "Connected successfully";
}



$fullName = $_POST["fullName"];
$Aadharnumber = $_POST["Aadharnumber"]; //<!--Unique-->
$contactNumber = $_POST["contactNumber"];
$email = $_POST["email"]; //<!--Unique-->
$AddressN = $_POST["AddressN"];
$AddressD = $_POST["AddressD"];
$AddressS = $_POST["AddressS"];
$Complain = $_POST["Complain"];

$sql = "INSERT INTO `roaddata`(`fullName`, `Aadharnumber`, `contactNumber`, `email`, `AddressN`, `AddressD`, `AddressS`, `Complain`) VALUES
 ('$fullName','$Aadharnumber','$contactNumber','$email','$AddressN','$AddressD','$AddressS','$Complain')";

$result = mysqli_query($con , $sql);

if($result)
{
    echo " data submitted";

}
else{
    echo "error";
}
header("Location: thankspage.html");
    exit;




?>